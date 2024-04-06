
@extends('client.master')
@foreach ($mountains as $mountain)
@section('title' )
@section('content')
<div class="image-container">
    <img src="{{asset('uploads/')}}/{{$mountain->image}}" class="img1">
    <div class="overlay">{{$mountain->name}} Mountain</div>
</div>
<div class="introducing">
<h2>Conquer {{$mountain->name}} Mountain</h2>
<p>{{$mountain->content}}</p>
<div><img class="img6" src="{{asset('uploads/')}}/{{$mountain->image}}" alt="nuiba"></div>
<p>{!!$mountain->description!!}</p>
@include('client.home.createtour', ['id' => $mountain->id])
</div>

@endsection
@endforeach

