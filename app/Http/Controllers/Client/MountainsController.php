<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Join;
use App\Models\Mountain;
use App\Models\Country;
class MountainsController extends Controller
{   //VietNam
    public function mountain($id){
        $country= Country::where('id', $id)->get();
        $mountain = Mountain::with('country')->where('id', $id)->get();
     
        return view("client.mountain.mountain"
        ,[
            'mountains' =>$mountain,
            'countries' =>$country
        ]);
    }
}
