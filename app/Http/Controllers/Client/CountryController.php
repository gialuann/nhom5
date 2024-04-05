<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Country;
use Illuminate\Http\Request;
use App\Models\Mountain;

class CountryController extends Controller
{
    public function country($id){
        $country= Country::where('id', $id)->get();
        $mountain = Mountain::with('country')->where('country_id', $id)->get();
        return view("client.country.country"
        ,[
            'mountains' =>$mountain,
            'countries' =>$country
        ]);
    }

}
