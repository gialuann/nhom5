@extends('client.master')
@section('title' ,'Triund')
@section('content')
@foreach ($mountains as $mountain)
@if ($mountain->country->name == "Japan")
@if ($mountain->name=="Triund")
<div class="image-container">
    <img src="{{asset('blog/files/hinhchitietnui.png')}}" class="img1">
    <div class="overlay">{{$mountain->name}} Mountain</div>
</div>
<div class="introducing">
<h2>Conquer {{$mountain->name}} Mountain</h2>
<p>
    {{$mountain->content}} </p>
<div><img class="img6" src="{{asset('blog/files/triund-hill.jpg')}}" alt="núi triund"></div>
<h3 class="mountaintitle">Main attractions in and around Triund</h3>
<h4 class="mountaintitlee">1. Bhagsunag Dharamshala Waterfall</h4>
<p>
    You will simply be amazed with the mesmerizing beauty of these waterfalls. During your trip to Triund, you cannot miss this famous tourist destination.
</p>
<h4 class="mountaintitlee">2. Tibet Museum</h4>
<p>
    In the Tibet Museum, you can explore different galleries including four segments such as current exhibitions, Permanent exhibitions, Online exhibitions and Upcoming exhibitions. 
</p>
<h4 class="mountaintitlee">3. Bhagsunath Temple</h4>
<p>
    This temple is located 3 km from Mcleodganj. The temple is highly revered by the Hindu and Gorkha communities. This sacred temple is famous for its two lakes that are said to have healing properties. Therefore, it sees a lot of tourists.
</p>
@include('client.home.createtour',['id' => $mountain->id])
@endif
@endif
@endforeach
</div>



@endsection