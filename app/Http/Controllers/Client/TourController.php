<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Join;
use App\Models\User;
use App\Models\MemberJoin;
use App\Models\Mountain;
use DB;
use App\Rules\UniqueEmail;
class TourController extends Controller
{   
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $mountain = Mountain::get();
        return view('client.home.createtour',[
            'mountains' => $mountain,
        ]);
    }
    public function show()
    {   
        $join=Join::get(); 
        return view("client.home.tour",[
            'joins' =>$join,
           
        ]);
    }
    public function showvalidate()
    {
        
        $memberjoin = MemberJoin::get();
        return view("client.home.validated",[
        
            'memberjoins'=>$memberjoin
        ]);
    }
    public function showrejected()
    {   $memberjoin = MemberJoin::get();
        return view("client.home.rejected",[
            'memberjoins' =>$memberjoin,
        ]);
    }
    public function waiting()
    {
        $join = Join::get();
        $memberjoin = MemberJoin::get();
        return view("client.home.waiting",[
            'joins' =>$join,
            'memberjoins'=>$memberjoin
        ]);
    }
    public function memberjoin(){
        $memberjoin = MemberJoin::get();
       
        return view("client.home.memberjoin",[
            'memberjoins' =>$memberjoin,
        ]);
    }
}
