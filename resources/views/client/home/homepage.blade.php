@extends('client.master')
@section('title' ,'Home')

@section('content')

<section class="locations" id="locations">
    <div class="banner">
        <video src="{{asset('blog/files/bgvid copy.mp4')}}" type="video/mp4" autoplay muted loop></video>
        <div class="title">
            <h1>MOUNTAIN CLIMBING TRIPS</h1>
            <p>Plan your climbing trip with friends on mountains around the world!</p>
            @if (!Auth::check())
            <a href="{{route('client.sign-in.register')}}" class="button">Register Now!</a> 
            @endif
            
        </div>
    </div>
    <div class="package-title">
        <h2>Countries</h2>
    </div>
    <div class="location-container">
    @foreach ($countries as $country ) 
    
    <div class="location-content">      
        <a href="{{route('client.country.country',['id'=>$country->id])}}" >
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
    <div class="package-content">  
        @foreach ($joins as $join)
        
        <div class="box">
            <div class="image">
                <img src="{{asset('uploads/')}}/{{$join->mountain->image}}" alt=""> 
                <h3> {{$join->name}}</h3>
            </div>
            <div class="dest-content">
                <div class="location">
                    <h4>{{$join->mountain->name}} </h4>
                <ul class="pac-details">
                    <li>Creator {{$join->user->fullname}}</li>
                    <li>quantity : {{$join->quantity}} people</li>
                    <li>Date-Time {{date('d/m/Y - H:m:i', strtotime($join->date))}}</li>
                    <li><p>{{Str::words($join->infomation,15)}}
                    @if (Auth::check())
                    @if(!(Auth::user()->id == $join->user->id))
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
                        <form action="{{route('admin.memberjoin.store')}}" method="post" style="
                                                                                                margin-top: -35px;
                                                                                                marin-left: -35px;">
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
                        @endif       
                        </form>
                        @endif 
                        @endif</a></li>
                </ul>
                </div>
            </div>
        </div> 
        @endforeach  
        </div>   

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
</section>
@endsection