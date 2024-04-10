@extends('client.master')
@section('title' ,'Rejected')

@section('content')

<div class="image-container">
    <img src="{{asset('blog/files/nui4.jpg')}}" class="img1">
    <div class="overlay">Rejected Tour</div>
</div>
@if (Auth::check())
<section class="container">
    <div class="package-content">  
        @foreach ($memberjoins as $memberjoin)
        @if(Auth::user()->id == $memberjoin->user_id)
        @if ($memberjoin->status==3)
        <div class="box">
            <div class="image">
                <img src="{{asset('uploads/')}}/{{$memberjoin->join->mountain->image}}" alt=""> 
                <h3> {{$memberjoin->join->name}}</h3>
            </div>
            <div class="dest-content">
                <div class="location">
                    <h4>{{$memberjoin->join->mountain->name}} </h4>
                <ul class="pac-details">
                    <li>Creator {{$memberjoin->join->user->fullname}}</li>
                    <li>height : {{$memberjoin->join->mountain->height}} m</li>
                    <li>Quantity : {{$memberjoin->join->quantity}} people</li>
                    <li>Information : {{$memberjoin->join->infomation}}</li>
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
        @endif 
        @endforeach  
        </div>  
</section>
@endif

@endsection