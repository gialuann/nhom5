<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Join;
use App\Models\User;
use App\Models\MemberJoin;
use Carbon\Carbon;
class MemberJoinController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $memberjoin = MemberJoin::with('user')->where('status', '!=' , 4)->orderBy('created_at','DESC')->get();
        return view('client.home.memberjoin',[
            'memberjoins' =>$memberjoin
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
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
    {
        $MemberJoin = new MemberJoin();
        $MemberJoin->user_id = $request->user_id;
        $MemberJoin->join_id = $request->join_id;
        $MemberJoin->save();
        return redirect()->route('client.tour.waiting')->with('success','Create country successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $memberjoins = MemberJoin::findOrFail($id);
        $join = join::get();
        $user = User::get();
        return view('admin.modules.memberjoin.edit', [
            'id' => $id,
            'joins' => $join,
            'users'=> $user,
            'memberjoins' => $memberjoins,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
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
        $memberjoins = MemberJoin::findOrFail($id);

        $memberjoins->status=4;

        $memberjoins->save();

        return redirect()->route('admin.user.index')->with('success','Delete user successfully');
    }
}
