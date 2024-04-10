@extends('client.master')
@section('title' ,'Waiting')
@section('content')

<div class="image-container">
    <img src="{{asset('blog/files/nui4.jpg')}}" class="img1">
    <div class="overlay">Rejected Tour</div>
</div>
@if (Auth::check())

<div class="package-content">  
    @foreach ($memberjoins as $memberjoin)
    @if(Auth::user()->id == $memberjoin->user_id)
    <div class="box">
        <div class="image">
            <img src="{{asset('uploads/')}}/{{$memberjoin->join->mountain->image}}" alt=""> 
            <h3> {{$memberjoin->join->name}}</h3>
        </div>
        <div class="dest-content">
            <div class="location">
                <h4>{{$memberjoin->join->infomation}} </h4>
            <ul class="pac-details">
                <li>Creator {{$memberjoin->join->user->fullname}}</li>
                <li>quantity : {{$memberjoin->join->quantity}} people</li>
                <li>Date-Time {{date('d/m/Y - H:m:i', strtotime($memberjoin->join->date))}}</li>
                <li><a>
                @if ($memberjoin->status == 1)
                <td><span class="right badge badge-{{$memberjoin->status == 1 ?'dark':'success'}}">Waiting</td>
                @endif
                @if ($memberjoin->status == 2)
                <td><span class="right badge badge-{{$memberjoin->status == 2 ?'success':'dark'}}">Validated</td>
                @endif
                @if ($memberjoin->status == 3)
                <td><span class="right badge badge-{{$memberjoin->status == 3 ?'dark':'success'}}">Rejected</td>
                @endif
           </a></li>
            </ul>
            </div>
        </div>
    </div>
    @endif 
    @endforeach  
    </div>   
@endif
{{-- @if (Auth::check())
<section class="container">
    <table name="created" border="1px" class="tb1">
        <thead class="head1">
            <tr>
                <th>ID</th>
                <th>Mountain</th>
                <th>Name</th>
                <th>Infomation</th>
                <th>Quantity</th>
                <th>Status</th>         
            </tr>
        </thead>
        
        @foreach ($memberjoins as $memberjoin) 
        @if(Auth::user()->id == $memberjoin->user_id)
        <tbody class="body1">
            <tr>@if ($memberjoin->status==1)    
                <td>{{$loop->iteration}}</td>
                <td>{{$memberjoin->join->mountain->name}}</td>
                <td>{{$memberjoin->user->fullname}}</td>
                <td>{{$memberjoin->join->infomation}}</td>
                <td>{{$memberjoin->join->quantity}}</td> 
                
                @if ($memberjoin->status == 1)
                <td><span class="right badge badge-{{$memberjoin->status == 1 ?'dark':'success'}}">Waiting</td>
            @endif
            @if ($memberjoin->status == 2)
            <td><span class="right badge badge-{{$memberjoin->status == 2 ?'success':'dark'}}">Validated</td>
            @endif
            @if ($memberjoin->status == 3)
            <td><span class="right badge badge-{{$memberjoin->status == 3 ?'dark':'success'}}">Rejected</td>
            @endif
                @endif  
                
            </tr>
        </tbody>
       
        @endforeach
        <thead class="head1">
            <tr>
                <th>ID</th>
                <th>Mountain</th>
                <th>Name</th>
                <th>Infomation</th>
                <th>Quantity</th>
                <th>Status</th>         
            </tr>
        </thead>
    </form>
    </table>        
</section>
@endif --}}

@endsection