@extends('client.master')
@section('title' ,'Norikura')
@section('content')
@foreach ($mountains as $mountain)
@if ($mountain->country->name == "Japan")
@if ($mountain->name=="Norikura")
<div class="image-container">
    <img src="{{asset('blog/files/hinhchitietnui.png')}}" class="img1">
    <div class="overlay">{{$mountain->name}} Mountain</div>
</div>
<div class="introducing">
<h2>Conquer {{$mountain->name}} Mountain</h2>
<p>{{$mountain->content}}</p>

<div><img class="img6" src="{{asset('uploads/1712193200-Norikura.jpg')}}" alt="núi Norikura"></div>


<h3 class="mountaintitle">Hot springs, skiing and adventure on Japan's third highest volcano</h3>
<p>Located on the border with Gifu Prefecture, Mount Norikura and its plateau area are well worth exploring if you visit the Matsumoto region. Mount Norikura has many hot springs and great outdoor activities all year round.</p>

<div><img class="img6" src="{{asset('uploads/1712193200-Norikura.jpg')}}" alt="hình Norikura"></div>

<h3 class="mountaintitle">Method of transportation</h3>
    <p>The closest major transportation hub to Mount Norikura is Matsumoto Station. Matsumoto Station is easily accessible by JR lines from Tokyo, Nagano or Nagoya. <br><br>

    You can reach Matsumoto Station from Shinjuku Station in Tokyo using the JR Chuo limited express train bound for Matsumoto.
    <br><br>
    From Nagoya take the JR Shinano limited express line to Nagano.
    <br><br>
    If you're leaving from Nagano, take the same JR Shinano Limited Express line bound for Nagoya. There is a convenient bus service from Takayama in neighboring Gifu Prefecture.
    <br><br>
    From Matsumoto, take a train to Shin-Shimashima, then transfer to a bus to the Kanko Center Mae bus stop in the plateau. For other areas in rural Nagano, driving a rental car will give you more freedom to explore.</p>
    @include('client.home.createtour',['id' => $mountain->id])
</div>



@endsection