@extends('client.master')
@section('title' ,'Himmalaya')
@section('content')
@foreach ($mountains as $mountain)
@if ($mountain->country->name == "India")
@if ($mountain->name=="Himalaya")
<div class="image-container">
    <img src="{{asset('blog/files/hinhchitietnui.png')}}" class="img1">
    <div class="overlay">{{$mountain->name}} Mountain</div>
</div>
<div class="introducing">
<h2>Conquer {{$mountain->name}} Mountain</h2>
<p>
    {{$mountain->content}}</p>
<div><img class="img6" src="{{asset('blog/files/himalaya.jpg')}}" alt="núi himalaya"></div>
<h3 class="mountaintitle">Name</h3>
<p>
    The name of the range is derived from the Sanskrit Himālaya (हिमालय, "Abode of Snow"), from himá (हिम, "snow") and ā-laya (आलय, "abode, dwelling place"). They are now known as the "Himalayan Mountains", often shortened to "Himalaya". Previously, they were described in the singular as Himalaya and were represented as Himavan in old writings. This was also formerly transliterated as Himmaleh, as in the poetry of Emily Dickinson and the essays of Henry David Thoreau.
    <br><br>

    The mountains are known as Himālaya in Nepali and Hindi (both written as हिमालय), or the 'Snow Mountains' (ཧི་མ་ལ་ཡ་) in Tibet, the Himāliya Mountains ( Urdu: سلسلہ کوہ ہمالیہ) in Urdu and Ximalaya Mountains (simplified Chinese: 喜马拉雅山脉; traditional Chinese: 喜馬拉雅山脈; pinyin: Xǐmǎlāyǎ Shānmài ) in Chinese . ( Cantonese : hei-ma-lai-fall san-mak (hei1 maa5 laai1 ngaa5 saan1 mak6) .)
</p>

@include('client.home.createtour',['id' => $mountain->id])
@endif
@endif
@endforeach
</div>



@endsection