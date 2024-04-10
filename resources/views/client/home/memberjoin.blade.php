@extends('client.master')
@section('title' ,'Memberjoin')

@section('content')

<div class="image-container">
    <img src="{{asset('blog/files/nui4.jpg')}}" class="img1">
    <div class="overlay">MemberJoinList</div>
</div>
   
@if (Auth::check())
<section class="container">
    <div class="package-content">  
        @foreach ($memberjoins as $memberjoin)
        @if(!(Auth::user()->id == $memberjoin->user->id))
        @if(Auth::user()->id == $memberjoin->join->user->id)
        @if($memberjoin->status == 1)
        <div class="box">
            <div class="image">
                <img src="{{asset('uploads/')}}/{{$memberjoin->join->mountain->image}}" alt=""> 
                <h3> {{$memberjoin->join->name}}</h3>
            </div>
            <div class="dest-content">
                <div class="location">
                    <h4>{{$memberjoin->join->mountain->name}} Mountain</h4>
                <ul class="pac-details">
                    <li>RegisterMember: {{$memberjoin->user->fullname}}</li>
                    <li>infomation: {{$memberjoin->join->infomation}}</li>
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
                </a> <br>
                    <td><a href="{{route('admin.memberjoin.edit',['id'=>$memberjoin->id])}}">Chose</a></td>
               </li>
                </ul>
                </div>
            </div>
        </div>
        @endif 
        @endif 
        @endif 
        @endforeach  
        </div>  
      
        
@endif

@endsection