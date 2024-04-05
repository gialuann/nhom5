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
</section>
@endsection