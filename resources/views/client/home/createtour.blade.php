




@if (Auth::check())
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
    <h1 class="h1">Tour Create</h1>
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
                              @if(isset($id))
                                  
                                    <option value="{{$mountain->id}}" {{old('mountain_id',$mountain->id)== $id ?'selected' : ''}}>{{$mountain->name}}</option>
                                @else                                          
                              <option value="{{$mountain->id}}" {{old('mountain_id',$mountain->id)==$mountain->id?'selected' : ''}}>{{$mountain->name}}</option>
                              @endif
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
