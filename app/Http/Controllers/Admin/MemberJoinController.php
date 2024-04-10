<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\DemoMail;
use App\Mail\TourValidatedMail;
use Illuminate\Http\Request;
use App\Models\Join;
use App\Models\User;
use App\Models\MemberJoin;
use Carbon\Carbon;
use App\Models\Country;
use Illuminate\Support\Facades\Mail;
use DB;
class MemberJoinController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $country = Country::get();   
        $memberjoin = MemberJoin::with('user')->where('status', '!=' , 3)->orderBy('created_at','DESC')->get();
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
        $MemberJoin->status = $request->status;
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

        $join = join::where('id',$memberjoins->join_id)->get();
       
        $user = User::where('id',$memberjoins->user_id)->get();
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
    
        Mail::to($memberjoins->user->email)
        ->send(new TourValidatedMail($memberjoins,"validated"));
        if($memberjoins->status == "2"){
            return redirect()->route('client.tour.showvalidate')->with('success','Update Memberjoin successfully');
        }
            return redirect()->route('client.tour.showrejected')->with('success','Update Memberjoin successfully');   
    }




    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $country = Country::get();
        $memberjoins = MemberJoin::findOrFail($id);
        $memberjoins->status=3;
        $memberjoins->save();

        return redirect()->route('admin.user.index')->with('success','Delete user successfully');
    }
}
