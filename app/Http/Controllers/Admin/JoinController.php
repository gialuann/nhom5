<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Join;
use App\Models\Mountain;
use App\Mail\TourRegisteredMail;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use GuzzleHttp\Client;
use App\Http\Requests\Admin\Join\StoreRequest;
use App\Http\Requests\Admin\Join\UpdateRequest;
use App\Models\MemberJoin;
use App\Models\Country;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\DB as FacadesDB;

class JoinController extends Controller

{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   $country= Country::get();
        $join = Join::with('mountain')->where('status', '!=' , 3)->orderBy('created_at','DESC')->get();
        return view('admin.modules.join.index',[
            'joins' =>$join,
            'countries'=>$country
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {$country= Country::get();   
        $mountain = Mountain::get();
        return view('admin.modules.join.create',[
            'mountains' => $mountain,
            'countries'=>$country
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {$country= Country::get();   
        $join = new Join();
        $join->user_id = $request->user_id;
        $join->infomation=$request->infomation;
        $join->mountain_id = $request->mountain_id;
        $join->quantity=$request->quantity;
        $join->date = $request->date;

        $join->status=1;

        $join->save();
        return redirect()->route('client.home')->with('success','Create country successfully');
        
    
        
    }

    public function registerTour(Request $request, $id)
    {
        $join = Join::find($id);
        // Xử lý đăng ký tour ở đây

        // Gửi email
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {   $country= Country::get();   
        $mountain = Mountain::get();
        $join = Join::findOrFail($id);
        return view('admin.modules.join.edit',[
            'id'=>$id,
            'joins' => $join,
            'mountains' => $mountain,
            'countries'=>$country
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, int $id)
    {$country= Country::get();
        $join = Join::findOrFail($id);
        $join->name = $request->name;
        $join->infomation = $request->infomation;
        $join->quantity = $request->quantity;
        $join->mountain_id = $request->mountain_id;
        $join->date = $request->date;
        $join->status= 1;
        $join->save();

        return redirect()->route('admin.join.index')->with('success', 'Update Tour successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {   $country= Country::get();
        $join = Join::findOrFail($id);
        DB::table('joins')->where('id',$id)->update([
            'status' => 3
        ]);

        DB::table('memberjoins')->where('join_id',$id)->update([
            'status' => 3
        ]);

        return redirect()->route('admin.join.index')->with('success','Delete tour successfully');
    }





    public function submitForm(Request $request)
{
    $user = new User();
    $response = $user->post('https://www.google.com/recaptcha/api/siteverify', [
        'form_params' => [
            'secret' => env('RECAPTCHA_SECRET_KEY'),
            'response' => $request->input('g-recaptcha-response'),
            'remoteip' => $request->ip()
        ]
    ]);

    $body = json_decode((string) $response->getBody());
    if ($body->success) {
        // Captcha validation passed
        // Xử lý logic form ở đây
        $join_id = $request->input('join_id');
        $userId = auth()->user()->id;

        $join = Join::find($join_id);
        $user = User::find($userId);

        $memberjoin = new MemberJoin();
        $memberjoin->join_id = $join_id;
        $memberjoin->user_id = $userId;
        $memberjoin->save();

        return redirect()->back()->with('success', 'Đăng ký tour thành công và email đã được gửi.');
    } else {
        // Captcha validation failed
        // Xử lý lỗi ở đây
        return redirect()->back()->withErrors(['captcha' => 'Captcha không hợp lệ. Vui lòng thử lại.']);
    }
}
}
