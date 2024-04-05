@extends('client.master')
@section('title' ,'Asahi')
@section('content')
@foreach ($mountains as $mountain)
@if ($mountain->country->name == "Japan")
@if ($mountain->name=="Hotakadake")
<div class="image-container">
    <img src="{{asset('uploads/1712195887-hotakadake.jpg')}}" class="img1">
    <div class="overlay">{{$mountain->name}} Mountain</div>
</div>
<div class="introducing">
<h2>Conquer {{$mountain->name}} Mountain</h2>
<p>{{$mountain->content}}

</p>

<h3 class="mountaintitle">Geological</h3>
<p>Mount Hotaka (穂高岳, Hotaka-dake), also known as Mount Hotakadake, is one of the 100 Famous Japanese Mountains as coined by the media, reaching a height of 3,190 m (10,466 ft). Mount Hotaka is situated in Japan's Hida Mountains and all its major peaks except Mount Maehotaka, lie on the border between the cities of Matsumoto, Nagano Prefecture, and Takayama, Gifu Prefecture. This mountain is located in Chūbu-Sangaku National Park.
The peaks of Okuhotaka, Karasawa, Kitahotaka, Maehotaka and Nishihotaka are called the Hotaka Mountains. The highest peak in this range, and also the tallest mountain in both Nagano and Gifu prefectures, is Mount Okuhotaka. Mount Hotaka is also referred to as the "Leader of the Northern Alps" (北アルプスの盟主, Kita-Arupusu no Meishu).</p>
<div><img class="img6" src="{{asset('uploads/1712195887-hotakadake.jpg')}}" alt="fujisan"></div>
<p><b>History</b></p>
<div class="ul-li-mountain">
    <ul class="pac-details ">
        <li><p>1880 - William Gowland climbed Mount Myōjin, guided by local hunter Kamijō Kamonji.</p></li>
        <li><p>1893 - Kiyohiko Tate climbed Mount Maehotaka, then Walter Weston climbed Mount Maehotaka. Walter Weston published Mountaineering and Exploring in the Japanese Alps (1896) and introduced Japanese mountains to the world.</p></li>
        <li><p>1906 - Gunji Abe climbed Mount Okuhotaka at first.</p></li>
        <li><p>1912 - Walter Weston climbed Mount Okuhotaka.</p></li>
        <li><p>December 4, 1934 - The region in this mountain was specified for the Chūbu-Sangaku National Park.</p></li>
    </ul>
</div>
<h3 class="mountaintitle">Hiking routes</h3>
<div class="ul-li-mountain">
<ul class="pac-details ">
<li><p>Even though the Hotaka Mountains are often climbed during times of lingering snow, like Golden Week, the following routes are strictly for snow-free periods. When snow has fallen, the area becomes extremely dangerous. Routes may become impassable, so special care is required. </p></li>

<li><p>The mountain climbing base at Karasawa lies in a U-shaped cirque dominated by Mount Okuhotaka, Mount Maehotaka and the Tsuri Ridge connecting the two. Because it lies on the northern side of the mountains, snow remains throughout the year. </p></li>
    
<li><p>To the north, beyond a steep descent and ascent at the Daikiretto, the ridge continues across Mount Minami (南岳, Minami-dake), Mount Ōbami (大喰岳, Ōbami-dake), ending at Mount Yari. In the south, a ridge stretches from Mount Okuhotaka via Mount Nishihotaka to Mount Yake. The Tsuri Ridge runs from Mount Okuhotaka to Mount Maehotaka, from where a path leads down through a cirque to the bridge Kappabashi in Kamikōchi. Climbing down on the Gifu side, either from the Hotaka Mountain Cottage (穂高岳山荘, Hotakadake Sansō) through Shiradezawa (白出沢, shiradezawa) or taking the Shinhotaka Ropeway from next to Nishihotaka-dake, the road and Shinhodaka Onsen (新穂高温泉, Shinhodaka-onsen) can be reached in the valley below.</p></li>
</ul>
</div>
@include('client.home.createtour',['id' => $mountain->id])
@endif
@endif
@endforeach
</div>



@endsection