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
use App\Models\Country;
class TourController extends Controller
{   
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {   $country= Country::get();
        $mountain = Mountain::get();
        return view('client.home.createtour',[
            'mountains' => $mountain,
            'countries'=> $country
        ]);
    }
    public function show()
    {   $country= Country::get();   
        $join=Join::get(); 
        return view("client.home.tour",[
            'joins' =>$join,
            'countries'=> $country
        ]);
    }
    public function showvalidate()
    {   $country= Country::get();
        
        $memberjoin = MemberJoin::get();
        return view("client.home.validated",[
            'countries'=> $country,
            'memberjoins'=>$memberjoin
        ]);
    }
    public function showrejected()
    {   $country= Country::get();   $memberjoin = MemberJoin::get();
        return view("client.home.rejected",[
            'countries'=> $country,
            'memberjoins' =>$memberjoin,
        ]);
    }
    public function waiting()
    {   $country= Country::get();
        $join = Join::get();
        $memberjoin = MemberJoin::get();
        return view("client.home.waiting",[
            'joins' =>$join,
            'memberjoins'=>$memberjoin,
            'countries'=> $country
        ]);
    }
    public function memberjoin(){
        $country= Country::get();
        $memberjoin = MemberJoin::get();
       
        return view("client.home.memberjoin",[
            'memberjoins' =>$memberjoin,
            'countries'=> $country
        ]);
    }
}
