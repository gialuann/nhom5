<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Join;
use App\Models\Mountain;
class MountainsController extends Controller
{   //VietNam
    public function baden(){
        $mountain = Mountain::get();
        
        return view("client.mountain.Ba-Den",[
            'mountains' => $mountain,
        ]);
    }
    public function chua(){
        $mountain = Mountain::get();
        
        return view("client.mountain.Chua",[
            'mountains' => $mountain,
        ]);
    }
    public function langbiang(){
        $mountain = Mountain::get();
        
        return view("client.mountain.Langbiang",[
            'mountains' => $mountain,
        ]);
    }
    public function chuachan(){
        $mountain = Mountain::get();
        
        return view("client.mountain.Chua-Chan",[
            'mountains' => $mountain,
        ]);
    }
    public function fansipan(){
        $mountain = Mountain::get();
        
        return view("client.mountain.Fansipan",[
            'mountains' => $mountain,
        ]);
    }
    public function pusilung(){
        $mountain = Mountain::get();
        
        return view("client.mountain.Pu-Si-Lung",[
            'mountains' => $mountain,
        ]);  
    }
    public function phuluong(){
        $mountain = Mountain::get();
        
        return view("client.mountain.Phu-Luong",[
            'mountains' => $mountain,
        ]);
    }
    public function raoco(){
        $mountain = Mountain::get();
        
        return view("client.mountain.Rao-Co",[
            'mountains' => $mountain,
        ]);
    }

    //China
    public function taishan(){
        $mountain = Mountain::get();
        
        return view("client.mountain.Taishan",[
            'mountains' => $mountain,
        ]);
    }
    public function huashan(){
        $mountain = Mountain::get();
        
        return view("client.mountain.Huashan",[
            'mountains' => $mountain,
        ]);
    }
    public function hanshan(){
        $mountain = Mountain::get();
        
        return view("client.mountain.Hanshan",[
            'mountains' => $mountain,
        ]);
    }
    public function hengshan(){
        $mountain = Mountain::get();
        
        return view("client.mountain.Hengshan",[
            'mountains' => $mountain,
        ]);
    }
    public function songshan(){
        $mountain = Mountain::get();
        
        return view("client.mountain.Songshan",[
            'mountains' => $mountain,
        ]);
    }
    public function wudang(){
        $mountain = Mountain::get();
        
        return view("client.mountain.Wudang",[
            'mountains' => $mountain,
        ]);
    }
    public function qingcheng(){
        $mountain = Mountain::get();
        
        return view("client.mountain.Qingcheng",[
            'mountains' => $mountain,
        ]);
    }
    public function laojun(){
        $mountain = Mountain::get();
        
        return view("client.mountain.laojun",[
            'mountains' => $mountain,
        ]);
    }

    //india
    public function kanchenjunga(){
        $mountain = Mountain::get();
        
        return view("client.mountain.Kanchenjunga",[
            'mountains' => $mountain,
        ]);
    }
    public function kabru(){
        $mountain = Mountain::get();
        
        return view("client.mountain.Kabru",[
            'mountains' => $mountain,
        ]);
    }
    public function triund (){
        $mountain = Mountain::get();
        
        return view("client.mountain.Triund",[
            'mountains' => $mountain,
        ]);
    }
    
    
    public function himalaya(){
        $mountain = Mountain::get();
        return view("client.mountain.Himalaya",[
            'mountains' => $mountain,
        ]);
    }
    public function chembra (){
        $mountain = Mountain::get();
        
        return view("client.mountain.Chembra",[
            'mountains' => $mountain,
        ]);
    }
    public function apharwat (){
        $mountain = Mountain::get();
        
        return view("client.mountain.Apharwat",[
            'mountains' => $mountain,
        ]);
    }
    public function kodachadri (){
        $mountain = Mountain::get();
        
        return view("client.mountain.Kodachadri ",[
            'mountains' => $mountain,
        ]);
    }

    //japan
    public function asahi(){
        $mountain = Mountain::get();
        
        return view("client.mountain.asahi",[
            'mountains' => $mountain,
        ]);
    }
    public function fujisan(){
        $mountain = Mountain::get();
        
        return view("client.mountain.fujisan",[
            'mountains' => $mountain,
        ]);
    }
    public function kitadake(){
        $mountain = Mountain::get();
        
        return view("client.mountain.kitadake",[
            'mountains' => $mountain,
        ]);
    }
    public function zao(){
        $mountain = Mountain::get();
        
        return view("client.mountain.zao",[
            'mountains' => $mountain,
        ]);
    }
    public function asama(){
        $mountain = Mountain::get();
        
        return view("client.mountain.asama",[
            'mountains' => $mountain,
        ]);
    }

    public function hotakadake (){
        $mountain = Mountain::get();
        
        return view("client.mountain.hotakadake",[
            'mountains' => $mountain,
        ]);

    }
    //pakistan
    
    public function norikura(){
        $mountain = Mountain::get();
        
        return view("client.mountain.norikura",[
            'mountains' => $mountain,
        ]);
    }

    public function yari(){
        $mountain = Mountain::get();
        
        return view("client.mountain.yari",[
            'mountains' => $mountain,
        ]);
    }
    public function nangaparbat(){
        $mountain = Mountain::get();
        
        return view("client.mountain.nangaparbat",[
            'mountains' => $mountain,
        ]);
    }
    public function k2(){
        $mountain = Mountain::get();
        
        return view("client.mountain.k2",[
            'mountains' => $mountain,
        ]);
    }
    public function Kangchenjunga(){
        $mountain = Mountain::get();
        
        return view("client.mountain.kangchenjunga",[
            'mountains' => $mountain,
        ]);
    }
    public function doddabetta(){
        $mountain = Mountain::get();
        
        return view("client.mountain.doddabetta",[
            'mountains' => $mountain,
        ]);
    }

    
}
