@extends('client.master')
@section('title' ,'Kangchenjunga')
@section('content')
@foreach ($mountains as $mountain)
@if ($mountain->country->name == "India")
@if ($mountain->name=="Kabru")
<div class="image-container">
    <img src="{{asset('blog/files/hinhchitietnui.png')}}" class="img1">
    <div class="overlay">{{$mountain->name}} Mountain</div>
</div>
<div class="introducing">
<h2>Conquer {{$mountain->name}} Mountain</h2>
<p>{{$mountain->content}}</p>
<div><img class="img6" src="{{asset('blog/files/dinh-nui-Kangchenjunga.jpg')}}" alt="Kangchenjunga"></div>
<h3 class="mountaintitle">Challenge climbers</h3>
<p>Climbing Kangchenjunga mountain requires good health and experience, as it has the height and difficulty of a high mountain. Those who want to climb this mountain need to have a good plan and a good team to deal with weather, geography and health issues.</p>

<h3 class="mountaintitle">General features</h3>
    <p>Kangchenjunga Mountain has 5 peaks, 4 of which are over 8,400 meters high: main peak (8,586 m), west peak (8,505 m), central peak (8,482 m), south peak (8,494 m) and Kangbachen peak (7,903 m). <br><br>

    Kangchenjunga is the second least climbed of the 14 peaks above 8,000 metres. In fact, Annapurna is the only 8,000 meter peak less climbed than Kangchenjunga. <br><br>
    Since the first ascent in 1955, only 243 climbers have reached the summit of Kangchenjunga, while in the same period 4,500 have reached the summit of Everest.</p>



    @include('client.home.createtour',['id' => $mountain->id])
    @endif
@endif
@endforeach
</div>



@endsection