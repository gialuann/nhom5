@extends('client.master')
@section('title' ,'Apharwat')
@section('content')

@foreach ($mountains as $mountain)
@if ($mountain->country->name == "India")
@if ($mountain->name=="Apharwat")
<div class="image-container">
    <img src="{{asset('blog/files/hinhchitietnui.png')}}" class="img1">
    <div class="overlay">{{$mountain->name}} Mountain</div>
</div>
<div class="introducing">
<h2>Conquer {{$mountain->name}} Mountain</h2>
<p>
    {{$mountain->content}}
</p>
<div><img class="img6" src="{{asset('blog/files/Apharwat.JPG')}}" alt="núi Apharwat"></div>
<h3 class="mountaintitle">How to Reach {{$mountain->name}} Peak</h3>
<p>
    During winters, it's mandatory to hire a chain taxi from Tangmarg a town located near Gulmarg. During summers you can hire a private cab to the base of Gondola starting point. From the base, you can take a gondola ride to the summit above. To reach Apharwat which is phase 2, you need to first take a cable car to phase 1 which is from Gulmarg to Kongdoori. 
</p>
@include('client.home.createtour', ['id' => $mountain->id])
@endif
@endif

@endforeach

</div>



@endsection