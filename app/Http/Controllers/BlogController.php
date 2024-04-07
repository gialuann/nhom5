<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Mountain;
use App\Models\MemberJoin;
use App\Models\Join;
use Illuminate\Support\Facades\Mail;

class BlogController extends Controller
{
    public function blog(){
        
        $country= Country::get();
        $join=Join::get();
        $memberjoin = MemberJoin::get();
        $mountain = Mountain::get();
        return view('client.home.homepage',[
            'countries' =>$country,
            'memberjoins'=>$memberjoin,
            'joins'=>$join,
            'mountains'=>$mountain
        ]);
    }
    public function head(){
        $country= Country::get();
        $join=Join::get();
        $memberjoin = MemberJoin::get();
        $mountain = Mountain::get();
        return view('client.home.homepage',[
            'countries' =>$country,
            'memberjoins'=>$memberjoin,
            'joins'=>$join,
            'mountains'=>$mountain
        ]);
    }
    public function testMail( ){
        $country= Country::get();
        $join=Join::get();
        $memberjoin = MemberJoin::get();
        $mountain = Mountain::get();
        $name='aaaaaaaa';
        Mail::send('client.home.test',compact('name'),function($email){
                $email ->to('dangvanthanhdiep2000@gmail.com','thanhdiep');
                
        });
        
        return view('client.home.homepage',[
            'countries' =>$country,
            'memberjoins'=>$memberjoin,
            'joins'=>$join,
            'mountains'=>$mountain
        ]);
    }

    
}
