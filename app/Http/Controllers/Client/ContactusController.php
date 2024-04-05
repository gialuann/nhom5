<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MemberJoin;
use App\Models\Join;
use App\Models\Country;

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
}
