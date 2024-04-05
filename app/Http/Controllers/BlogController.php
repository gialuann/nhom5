<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Mountain;
class BlogController extends Controller
{
    public function blog(){
        
        $country= Country::get();
        return view('client.home.homepage',[
            'countries' =>$country
        ]);
    }
    public function head(){
        $country= Country::get();
        return view('client.home.homepage',[
            'countries' =>$country
        ]);
    }
    
}
