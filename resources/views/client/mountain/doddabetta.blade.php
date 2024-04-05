@extends('client.master')
@section('title' ,'Doddabetta')
@section('content')
@foreach ($mountains as $mountain)
@if ($mountain->country->name == "India")
@if ($mountain->name=="Doddabetta")
<div class="image-container">
    <img src="{{asset('blog/files/hinhchitietnui.png')}}" class="img1">
    <div class="overlay">{{$mountain->name}} Mountain</div>
</div>
<div class="introducing">
<h2>Conquer {{$mountain->name}} Mountain</h2>
<p>{{$mountain->content}} .</p>
<div><img class="img6" src="{{asset('blog/files/nuidoddabetta.jpg')}}" alt="Doddabetta"></div>
<h3 class="mountaintitle">Flora</h3>
<p>The area surrounding Doddabetta is mostly forested. Sholas cover the hollows of its slopes. Slightly stunted, rhododendron trees, in the midst of thick coarse grass, flowering sub-alpine shrubs and herbs are common, even very near the peak.</p>

<h3 class="mountaintitle">Telescope House</h3>
    <p>There is an observatory at the top of Doddabetta with two telescopes available for the public. It was opened on 18 June 1983 and is run by the Tamil Nadu Tourism Development Corporation (TTDC). The average number of viewers in 2001-2002 was 3500 per day in season and 700 per day in the off season.[4]</p>
    @include('client.home.createtour',['id' => $mountain->id])
    @endif
@endif
@endforeach
</div>



@endsection