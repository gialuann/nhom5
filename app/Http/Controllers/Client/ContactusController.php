<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MemberJoin;
use App\Models\Join;
use App\Models\Country;
use App\Models\Mountain;
use App\Models\User;
class ContactusController extends Controller
{

    public function show(){
        $country= Country::get();
        $join= Join::get();
        $memberjoin = MemberJoin::get();
        return view("client.home.contactus",[
            'memberjoins'=>$memberjoin,
            'joins'=>$join,
            'countries'=> $country
        ]);
    }
    public function howtoknow(){
        $country= Country::get();
        $join= Join::get();
        $memberjoin = MemberJoin::get();
        return view("client.home.howtoknow",[
            'memberjoins'=>$memberjoin,
            'joins'=>$join,
            'countries'=> $country
        ]);
    }
    public function information(){
        $country= Country::get();
        $join= Join::get();
        $memberjoin = MemberJoin::get();
        $mountain=Mountain::get();
        return view("client.home.information",[
            'memberjoins'=>$memberjoin,
            'joins'=>$join,
            'countries'=> $country,
            'mountains'=> $mountain,
            
        ]);
    }
}
