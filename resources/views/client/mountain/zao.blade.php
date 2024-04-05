@extends('client.master')
@section('title' ,'Zao')
@section('content')
<div class="image-container">
    <img src="{{asset('blog/files/hinhchitietnui.png')}}" class="img1">
    <div class="overlay">Mountain Zao</div>
</div>
<div class="introducing">
<h2>Conquer Zao Mountain</h2>
<h3 class="mountaintitle">Mount Asahi currently exhibits steam activity in the form of fumaroles.</h3>
<p>Although Zao ski resort has many small hotels, restaurants and souvenir shops, it still retains the charm of a small hot spring village. The vast mountain landscape here is guarded by "snow monsters".</p>
<div><img class="img6" src="{{asset('blog/files/truottyetzao.jpg')}}" alt="trượt tuyết"></div>
<h3 class="mountaintitle">Method of transportation</h3>
    <p>If you're planning to ski Mount Zao, from Yamagata Prefecture, take the scheduled bus from Yamagata Station to get there. The trip will last for 40 minutes. <br>

    From Sendai, take the Senzan Line to Yamagata Station. The trip will last 1 hour and 15 minutes. From Tokyo, take the shinkansen to Yamagata. The trip will last 2 hours and 30 minutes. <br>
    
    If you want to stay overnight, ask your hotel if they offer free shuttle service from Yamagata Station.</p>
<h3 class="mountaintitle">Fast information</h3>
<div class="ul-li-mountain">
    <ul class="pac-details ">
        <li><p>Snow monsters are actually trees covered in soft frost, a unique symbol when freezing fog and wind combine to form ice on the outer surface of an object.</p></li>
        <li><p>Zao is an old hot spring town with three public baths and four open-air (rotenburo) baths</p></li>
        <li><p>Zao doesn't have any big hotels</p></li>
    </ul>
</div>
@include('client.home.createtour')
</div>



@endsection