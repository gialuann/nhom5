<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MemberJoin;
use App\Models\Join;

class ContactusController extends Controller
{

    public function show(){
        $join= Join::get();
        $memberjoin = MemberJoin::get();
        return view("client.home.contactus",[
            'memberjoins'=>$memberjoin,
            'joins'=>$join
        ]);
    }
}
