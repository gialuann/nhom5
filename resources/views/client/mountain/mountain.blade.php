@foreach ($mountains as $mountain)
@extends('client.master')
@section('title' ,$mountain->name)
@section('content')
<div class="image-container">
    <img src="{{asset('blog/files/hinhchitietnui.png')}}" class="img1">
    <div class="overlay">{{$mountain->name}} Mountain</div>
</div>
<div class="introducing">
<h2>Conquer {{$mountain->name}} Mountain</h2>
<p>{{$mountain->content}}</p>
@include('client.home.createtour', ['id' => $mountain->id])
</div>
@endsection
@endforeach
