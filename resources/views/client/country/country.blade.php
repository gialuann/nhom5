@extends('client.master')


@section('title' )
@section('action', 'List Mountains')
@section('content')
@foreach ($countries as $country)
<div class="image-container">
    <img src="{{asset('uploads/')}}/{{$country->image}}" class="img1">
    <div class="overlay">{{$country->name}} Mountains</div>
</div>
@endforeach

    <div class="package-content">  
        @foreach ($mountains as $mountain) 
        <div class="box">
            
            <div class="image">
                <a href="{{route('client.mountain.'.$mountain->name )}}"><img src="{{asset('uploads/')}}/{{$mountain->image}}" alt=""> 
                <h3> {{$mountain->name}}</h3>
            </div>
            <div class="stars">
                <a href="#"><i class='bx bxs-star'></i></a>
                <a href="#"><i class='bx bxs-star'></i></a>
                <a href="#"><i class='bx bxs-star'></i></a>
                <a href="#"><i class='bx bxs-star'></i></a>
                <a href="#"><i class='bx bxs-star-half'></i></a>
            </div>
            <div class="dest-content">
                <div class="location">
                    <li><h4>{{$mountain->name}} Mountain </h4></li>
                <ul class="pac-details">
                    <li>Height {{$mountain->height}}m</li>
                    <li><p>{{Str::words($mountain->content,15)}} <a href="{{route('client.mountain.'.$mountain->name )}}">Read More</a>
                </ul>
                </div>
            </div>
           
        </div> 
        @endforeach  
        </div>   
        
</section>
@endsection
