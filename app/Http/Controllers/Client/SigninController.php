<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\Client\LoginRequest;
use App\Http\Requests\Client\RegisterRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Carbon;
use App\Models\Country;
class SigninController extends Controller
{
    public function store(Request $request){  
        $country= Country::get();  
        $user=new User ();
        $user->email=$request->email;
        $user->password=bcrypt($request->password);
        $user->status=$request->status;
        $user->level=$request->level;
        $user->fullname=$request->fullname;
        $user->phone=$request->phone;
        $user->save();
        if (Auth::check()) {
            return redirect()->route("client.home",[
                  'countries' =>$country
            ] );
              
        }
        return redirect()->route('client.sign-in.login',[
            'countries' =>$country
       ]);
        
    }
    public function showLogin(){
        $country= Country::get();  
        if (Auth::check()) {
            return redirect()->route("client.home",[
                'countries' =>$country
           ]);
        }
        return view("client.sign-in.login",[
            'countries' =>$country
       ]);
    }
    public function login(LoginRequest $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);
        if ($validator->fails()) {
            return response()->json(['error'=>"Login failed!"], 401);      
        }
 
        $user = User::where("email",$request->email)->get();
        if($user->count()>0){
            return Response()->json(array("success"=>1,"data"=>$user[0]));
        }
        return response()->json(['error'=>"Login failed!"], 401);
    }
    public function showRegister(){
        $country= Country::get();
    return view("client.sign-in.register",[
        'countries' =>$country
   ]);
    }

    public function register(RegisterRequest $request){
    
    $validator = Validator::make($request->all(), [
        'email' => 'required|email|unique:users',
        'password' => 'required',
        'password.confirm' => 'required|same:password',
        'fullname' => 'required',
    ]);
    if ($validator->fails()) {
        return response()->json(['error'=>$validator->errors()], 401);     
    }
      
    $postArray = [
        'name'      => $request->name,
        'email'     => $request->email,
        'password'  => Hash::make($request->password),
        'remember_token' => $request->token,
        'created_at'=> Carbon::now('Asia/Ho_Chi_Minh'),
        'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh'),
        'avatar'=> $request->file('UrlImage')->getClientOriginalName()
    ];

    if ($request->hasFile('UrlImage')) {
        $image = $request->file('UrlImage');
        $name = $image->getClientOriginalName();
        $destinationPath = public_path('/upload/images');
        $imagePath = $destinationPath . "/" . $name;
        $image->move($destinationPath, $name);
     }
     $user = User::create($postArray);
    return Response()->json(array("success"=> 1,"data"=>$postArray ));


}

}
