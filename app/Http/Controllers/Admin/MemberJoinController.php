<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\DemoMail;
use Illuminate\Http\Request;
use App\Models\Join;
use App\Models\User;
use App\Models\MemberJoin;
use Carbon\Carbon;
use App\Models\Country;
use Illuminate\Support\Facades\Mail;

class MemberJoinController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $country = Country::get();   
        $memberjoin = MemberJoin::with('user')->where('status', '!=' , 4)->orderBy('created_at','DESC')->get();
        return view('client.home.memberjoin',[
            'memberjoins' =>$memberjoin,'countries'=>$country
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $country = Country::get();
        $join = join::get();
        $user = User::get();
        return view('admin.modules.memberjoin.create',[
            'joins' => $join,
            'users'=> $user
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   $joins = Join::get();
        $country = Country::get();
        $MemberJoin = new MemberJoin();
        $MemberJoin->user_id = $request->user_id;
        $MemberJoin->join_id = $request->join_id;
        $MemberJoin->save();

        foreach($joins as $join){
            $email = $join -> user -> email; 
         }
         //gửi email cho người tạo tour
         Mail::to($email)
         ->send(new DemoMail($join, 'create'));
 
         // Gửi email cho người đăng ký
         Mail::to(auth()->user()->email)
             ->send(new DemoMail($join, 'registrant'));
        return redirect()->route('client.tour.waiting')->with('success','Create country successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $country = Country::get();
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $country = Country::get();
        $memberjoins = MemberJoin::findOrFail($id);
        $join = join::get();
        $user = User::get();
        return view('admin.modules.memberjoin.edit', [
            'id' => $id,
            'joins' => $join,
            'users'=> $user,
            'memberjoins' => $memberjoins,
            'countries'=>$country
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $country = Country::get();
        $memberjoins = MemberJoin::findOrFail($id);
        $memberjoins->user_id = $request->user_id;
        $memberjoins->join_id = $request->join_id;
        $memberjoins->status=$request->status;
        $memberjoins->update();
        return redirect()->route('admin.memberjoin.index')->with('success','Update Memberjoin successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $country = Country::get();
        $memberjoins = MemberJoin::findOrFail($id);

        $memberjoins->status=4;

        $memberjoins->save();

        return redirect()->route('admin.user.index')->with('success','Delete user successfully');
    }
}
