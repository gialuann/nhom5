@extends('client.master')
@section('title' ,'Asahi')
@section('content')
@foreach ($mountains as $mountain)
@if ($mountain->country->name == "Japan")
@if ($mountain->name=="Yari")
<div class="image-container">
    <img src="{{asset('uploads/1712196694-yari.jpg')}}" class="img1">
    <div class="overlay">{{$mountain->name}} Mountain</div>
</div>
<div class="introducing">
<h3 class="mountaintitle">Conquer {{$mountain->name}} Mountain</h3>
<p>{{$mountain->content}}  
</p>

<h3 class="mountaintitle">Geological</h3>
<p>Mount Yari (槍ヶ岳, Yari-ga-take) is one of the 100 Famous Japanese Mountains. The 3,180-metre-high (10,433 ft) peak lies in the southern part of the Hida Mountains (Northern Alps) of Japan, on the border of Ōmachi and Matsumoto in Nagano Prefecture and Takayama in Gifu Prefecture. The priest Banryū (1786–1840) founded a temple there. The headwater of Japan's longest river, the Shinano River, begins here as the Azusa River.</p>
<div><img class="img6" src="{{asset('uploads/1712196694-yari.jpg')}}" alt="fujisan"></div>
<h3 class="mountaintitle">History</h3>
<div class="ul-li-mountain">
    <ul class="pac-details ">
        <li><p>July 28, 1828 - Banryū first climbed the mountain.</p></li>
        <li><p>1878 - William Gowland became the first non-Japanese man to climb to the top.</p></li>
        <li><p>August, 1891 - Englishman Walter Weston climbed to the top.</p></li>
        <li><p>1922 - Japanese mountaineer Maki Yūkō made the first winter ascent of the mountain.</p></li>
        <li><p>December 20, 1959 - Senshu University mountain staff is climbing Kitakama (北鎌) Ridge when an avalanche occurs, 9 people were killed.</p></li>
    </ul>
</div>
<h3 class="mountaintitle">Main ascent routes</h3>
<div class="ul-li-mountain">
<ul class="pac-details ">
<li><p>Nakabusa Onsen (中房温泉) ― Tsubakuro-dake (燕岳) ― Otensho-dake (大天井岳) ― Higashikama ridge ― Yari-ga-take </p></li>
<li><p>Takase dam (高瀬ダム) ― Eboshi-dake (烏帽子岳) ― Noguchigorō-dake ― Washiba-dake (鷲羽岳) ― Sugoroku-dake (双六岳) ― もみさわだけ Momizawa-dake (樅沢岳) ― Nishikama ridge ― Yariga-take </p></li>
<li><p>Kamikōchi (上高地) ― Myōjinike (明神池) ― Tokusawa (徳沢) ― Yokoo (横尾) ― Yarisawa lodge ― Yari-ga-take</p></li>
</ul>
</div>
@include('client.home.createtour',['id' => $mountain->id])
@endif
@endif
@endforeach
</div>
@endsection