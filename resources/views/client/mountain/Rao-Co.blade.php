@extends('client.master')
@section('title' ,'Rao Co')
@section('content')
<div class="image-container">
    <img src="{{asset('blog/files/hinhchitietnui.png')}}" class="img1">
    <div class="overlay">Rao Co Mountain</div>
</div>
<div class="introducing">
<h2>Conquer Rao Co Mountain</h2>
    <p>Rao Co Mountain is a massif of mountains on the Vietnam-Laos border, west of Nghe Tinh and east of Bolikhamxai. The mountain peak is 2235 meters above sea level. To the east of Rao Co mountain is the Huong Khe valley, to the west is the Nam Ca Dinh river in Laos, to the south is the Quy Dat lowland. <br><br>

    This massif is composed mainly of Devonian granite and Caledonian metamorphic rocks. The massif developed during the Hercynian orogenic cycle.</p>
    
<img class="img6" src="{{asset('blog/files/Phu_Luong1.jpeg')}}" alt="núi Phu_Luong1">
<h3 class="mountaintitle">Confusion about names </h3>
<p>From 2011 to early 2012, some online travel guide articles mistakenly called Phu Luong mountain Ta Chi Nhu . This confusion caused Ta Chi Nhu to be widely popularized and become the unofficial name of Phu Luong mountain. A tour group placed a mountain peak stele with the name Ta Chi Nhu on Phu Luong peak in 2016</p>
@include('client.home.createtour')
</div>



@endsection