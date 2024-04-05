@extends('client.master')
@section('title' ,'Phu Luong')
@section('content')
<div class="image-container">
    <img src="{{asset('blog/files/hinhchitietnui.png')}}" class="img1">
    <div class="overlay">Phu Luông Mountain</div>
</div>
<div class="introducing">
<h2>Conquer Phu Luông Mountain</h2>
    <p>Phu Luong Mountain, also known as Pu Luong, Phu Song Sung, Chung Chua Nha, Ta Chi Nhu, is the highest peak of the Pu Luong massif in the Hoang Lien Son mountain range and the 7th highest peak in Vietnam. Male .</p>
    <h3 class="mountaintitle">Geography </h3>
<p>The mountain has a height of 2985m, located in Xa Ho commune, Tram Tau district, Yen Bai province. <br> <br>

    This is a tourist destination with beautiful scenery, especially in the last or early months of the year, when the weather is cool and cloudy. It usually takes 5-7 hours to walk to the top of the mountain, so it is only suitable for tourists with good physical strength.</p>
<img class="img6" src="{{asset('blog/files/Phu_Luong1.jpeg')}}" alt="núi Phu_Luong1">
<h3 class="mountaintitle">Confusion about names </h3>
<p>From 2011 to early 2012, some online travel guide articles mistakenly called Phu Luong mountain Ta Chi Nhu . This confusion caused Ta Chi Nhu to be widely popularized and become the unofficial name of Phu Luong mountain. A tour group placed a mountain peak stele with the name Ta Chi Nhu on Phu Luong peak in 2016</p>
@include('client.home.createtour')
</div>



@endsection