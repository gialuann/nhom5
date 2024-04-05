@extends('client.master')
@section('title' ,'blog về núi')
@section('content')
<section class="locations" id="locations">
    <div class="package-title">
        <h2>Countries</h2>
    </div>
    <div class="location-container">
    @foreach ($countries as $country ) 
    
    <div class="location-content">      
        <a href="#" >
            <div class="col-content">
                <img src="{{asset('uploads/')}}/{{$country->image}}" alt="">
                    <h5>{{$country->name}}</h5>
            </div>
        </a>
        
    </div>
    @endforeach
    

    </div>
    <div class="package-title">
        <h2>Availabled Tours</h2>
    </div>
    <section class="container">
        <table border="1px" class="tb1">
            <thead class="head1">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Creator</th>
                    <th scope="col">Mountain</th>
                    <th scope="col">Infomation</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Date</th>
                    <th scope="col">Register Now</th>         
                </tr>
            </thead>
     @foreach ($joins as $join)   
            <tbody class="body1">
                <tr>      
                    <td>{{$loop->iteration}}</td>
                    <td>{{$join->user->fullname}}</td>
                    <td>{{$join->mountain->name}}</td>
                    <td>{{$join->infomation}}</td>
                    <td>{{$join->quantity}}</td>
                    <td>{{date('d/m/Y - H:m:i', strtotime($join->date))}}</td> 
                    @if (Auth::check())
                    @php
                    $register = DB::table('memberjoins')->where([
                        ['join_id', $join->id],
                        ['status', 1]
                    ])->count();
                    $registerMember =DB::table('memberjoins')->where([
                        ['join_id', $join->id],
                        ['user_id', Auth::user()->id]
                    ])->exists();
                    @endphp 
                    @if (!$registerMember && !($register >= $join->quantity)) 
                    <form action="{{route('admin.memberjoin.store')}}" method="post">
                        @csrf
                    <div id="hiddenElement" style="visibility: hidden;">
                    <select name="join_id">
                        <option value="{{$join->id}}">{{$join->name}}</option>
                    </select>
                    <select name="user_id">
                        <option value="{{Auth::user()->id}}" >{{Auth::user()->fullname}} </option>
                    </select>
                    <label>Status</label>
                    <select class="form-control" name="status">
                    <option value="1" selected >validated</option>
                    </select>
                    </div>              
                    <td><input type="submit" value="Register" class="btn1"></td>         
                    </form>
                    @endif
                    @endif 
                </tr>
            </tbody>
            @endforeach     
            <thead class="head1">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Creator</th>
                    <th scope="col">Mountain</th>
                    <th scope="col">Infomation</th>
                    <th scope="col">Quantity</th>
                    <th scope="col">Date</th>
                    <th scope="col">Register Now</th>         
                </tr>
            </thead>
        </form>
        </table>        
    </section>
    @if (Auth::check())
    <div class="package-title">
        <h2>Create Tour</h2>
    </div>
    
<section class="container">
    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible" role="alert">        
            <h5><i class="icon fas fa-ban"></i> Alert!</h5>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
          
    </div>
    @endif
    @if ($message = Session::has('success'))
          <div class="alert alert-success alert-dismissible"  role="alert">
            <h5><i class="icon fas fa-check"></i> Alert!</h5>
            {{Session::get('success')}}
          </div>
    @endif
    <div class="container1">   
    <form method="post" action="{{ route('admin.join.store') }}" enctype="multipart/form-data" class="form1">
        @csrf
        <!-- Default box -->   
        <div class="form-group" >
                        <div class="form-group">
                            <label>creator</label>
                            <input type="text"  placeholder="Enter tour name" name="creator" value="{{ Auth::user()->fullname}}" >
                            <input type="hidden"  placeholder="Enter tour name" name="user_id" value="{{ Auth::user()->id}}" >
                        </div>
                        <div class="form-group">
                            <label>Infomation</label>
                            <textarea  name="infomation">{{old('infomation')}}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Mountain</label>
                            <select  name="mountain_id">
                              <option value="0" {{old('mountain_id')==0?'selected' : ''}}>----- Root -----</option>
                              @foreach ($mountains as $mountain) 
                              <option value="{{$mountain->id}}" {{old('mountain_id')==$mountain->id?'selected' : ''}}>{{$mountain->name}}</option>
                             
                              @endforeach  
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Quantity</label>
                            <input type="text" name="quantity"value="{{old('quantity')}}">
                        </div>
                        <div class="form-group">
                            <label>Date</label>
                            <input type="datetime-local"  name="date" min="{{ date('Y-m-d') }}"/>
                        </div>   
                        <div class="captcha">           
                        <label for="captcha-input">Enter Captcha</label>
                        <div class="preview"></div>
                        <div class="captcha-form">
                            <input type="text" id="captcha-form" placeholder="Enter captcha text" class="captcha-input">
                            <button class="captcha-refresh">
                                <i class="fa fa-refresh"></i>
                            </button>
                        </div>
                    </div> 

            <div class="form-group">
                <button type="submit" id="login-btn">Create</button> 
            </div>
        </div>
        <!-- /.card -->
    </form>   
</div>   
</section>
@endif

<Script>
    (function(){
        const fonts =["cursive","sans-serif","serif","monospace"];
        let captchavalue ="";
        function generateCaptcha (){
        let value = btoa(Math.random()*1000000000);
        value =value.substr(0,5+Math.random()*5);
        captchavalue = value;
        }
    function setCaptcha(    ){
       let html= captchavalue.split("").map((char)=>{
            const rotate =-20 + Math.trunc(Math.random()*30);
            const font = Math.trunc(Math.random()*fonts.length);
            return `<span
                style="
                transform:rotate(${rotate}deg);
                font-family:${fonts[font]}
                ">${char}
                    </span>`;
        }).join("");
        document.querySelector(".form-group .captcha .preview").innerHTML=html;
    }
    function initCaptcha(){
        document.querySelector(".form-group .captcha .captcha-refresh").addEventListener("click",function(){
            generateCaptcha ();
            setCaptcha();
        });
        generateCaptcha ();
            setCaptcha();
    }
    initCaptcha();
    document.querySelector("#login-btn").addEventListener("click",function(){
        let inputCaptchaValue = document.querySelector(".captcha-input").value;
        if(inputCaptchaValue === captchavalue){
            arlert("","Logging In!","success");
        }else{
            arlert("Invalid captcha");
        }
    });

})();
</Script>
    
</section>
@endsection