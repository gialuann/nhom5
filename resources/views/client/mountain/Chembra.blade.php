@extends('client.master')
@section('title' ,'Chembra')
@section('content')
@foreach ($mountains as $mountain)
@if ($mountain->country->name == "India")
@if ($mountain->name=="Chembra")
<div class="image-container">
    <img src="{{asset('blog/files/hinhchitietnui.png')}}" class="img1">
    <div class="overlay">{{$mountain->name}} Mountain</div>
</div>
<div class="introducing">
<h2>Conquer {{$mountain->name}} Mountain</h2>
<p>
    {{$mountain->content}}</p>
<div><img class="img6" src="{{asset('blog/files/Chembra.jpg')}}" alt="núi Chembra"></div>
<h3 class="mountaintitle">Information about company</h3>
<p>
    Be it a casual visit with friends and family to a resort in Vagamon, or an idyllic stay in the backwaters of Munroe Island, or be it celebrating new beginnings in the Honeymoon resorts in Munnar, Voye Homes has got it all ready for you! Kanthalloor beckons you with its scenic beauty and the private and luxury villas in Wayanad enchant you with their grandeur! At Panchalimedu Voye Homes resorts shine in their exotic glory, while the well-appointed Voye Homes luxury villas in Kochi announce their presence with aplomb! Lakeside Villas… private waterfalls… off-roading… you name it, and Voye Homes have it! Every single one of the properties of Voye Homes is unique and crafted for the exclusive enjoyment of the chosen few! Safe to the best extent, privacy kept paramount and finest available service – all of these make a trip to a Voye Homes property worth your time! So what are you waiting for? Choose your date with one of the magical experiences at Voye Homes.. where experiencing life at its best is a way of life for you!!
</p>

@include('client.home.createtour',['id' => $mountain->id])
@endif
@endif
@endforeach
</div>



@endsection