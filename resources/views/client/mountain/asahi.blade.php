@extends('client.master')
@section('title' ,'Asahi')
@section('content')
@foreach ($mountains as $mountain)
@if ($mountain->country->name == "Japan")
@if ($mountain->name=="Asahi")
<div class="image-container">
    <img src="{{asset('blog/files/hinhchitietnui.png')}}" class="img1">
    <div class="overlay">{{$mountain->name}} Mountain</div>
</div>
<div class="introducing">
<h2>Conquer {{$mountain->name}} Mountain</h2>
<p>{{$mountain->content}}</p>
<h3 class="mountaintitle">Geological</h3>
<p>Mount Asahi is an active stratovolcano, 2,291 meters (7,516 ft) high,[2] arising 3 kilometers (1.9 mi) southwest of the Ohachi-Daira caldera. The Japan Meteorological Agency ranked C volcanic activity. The volcano consists mainly of andesite and dacite, This Holocene volcano has mafic non-alkaline rocks less than 18,000 years old. In addition to the main peak, there is a smaller volcano rising from the southeastern shoulder of the mountain, Mount Ushiro Asahi or Mount Asahi in Back (後旭岳 Ushiro-Asahi-dake?).</p>
<div><img class="img6" src="{{asset('uploads/1712191729-asahi.jpg')}}" alt="asahi"></div>
<p><b>Eruption history</b></p>
<p>There are no historical records of the eruption of Mount Asahi. Tephrochronology and radiocarbon geochemical techniques have identified the following events:</p>
<div class="ul-li-mountain">
    <ul class="pac-details ">
        <li><p>3200 BC ± 75 years, Asahi Soria deposit, radiocarbon dating, explosive eruption</p></li>
        <li><p>2800 BC ± 100 years, As-A tephra, corrected radiocarbon dating, explosive eruption and phreatic explosion</p></li>
        <li><p>1450 BC ± 50 years, Tephra As-B, unresolved radiometric date, explosive eruption and phreatic explosion</p></li>
        <li><p>500 BC ± 50 years, Ash-b tephra, tephrochonology, explosive eruptions and phreatic explosions and debris avalanches</p></li>
        <li><p>1739, Tephrochronology, explosive eruption and phreatic explosion with possible eruption of central vent and internal material</p></li>
    </ul>
</div>
<p>Mount Asahi currently exhibits steam activity in the form of fumaroles.</p>
@include('client.home.createtour', ['id' => $mountain->id])
@endif
@endif

@endforeach
</div>
@endsection
