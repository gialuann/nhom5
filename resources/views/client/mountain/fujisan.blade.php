@extends('client.master')
@section('title' ,'Asahi')
@section('content')
@foreach ($mountains as $mountain)
@if ($mountain->country->name == "Japan")
@if ($mountain->name=="Fujisan")
<div class="image-container">
    <img src="{{asset('uploads/1712193604-fujisan.jpg')}}" class="img1">
    <div class="overlay">{{$mountain->name}}</div>

</div>
<div class="introducing">
<h2>Conquer {{$mountain->name}}</h2>
<p>{{$mountain->content}}
</p>
<h3 class="mountaintitle">Geological</h3>
<p>Mount Fuji is an active volcano and a very special feature of Japanese geography. It is 3,776.24 meters high and is located near the Pacific coast of central Honshu, just southwest of Tokyo. It passes through the boundary of Shizuoka and Yamanashi prefectures. Four small cities surround it: Gotemba to the east, Fujiyoshida to the north, Fujinomiya to the southwest, and Fuji to the south. It is also surrounded by five lakes: Lake Kawaguchi, Lake Yamanaka, Lake Sai, Lake Motosu, and Lake Shōji. Along with nearby Lake Ashi, they create a beautiful landscape for this mountain. This mountain is part of Fuji-Hakone-Izu National Park. When standing on the mountain, we can see the Yokohama area, Tokyo, and sometimes as far as Chiba, Saitama, Tochigi, Ibaraki and Lake Hamana when the weather is clear. Especially in winter, it can be seen from the Shinkansen train arriving at Utsunomiya station. It has also been captured from space in a space shuttle.</p>
<div><img class="img6" src="{{asset('uploads/1712193604-fujisan.jpg')}}" alt="fujisan"></div>
<p><b>History</b></p>
<p>Mount Fuji is a fascinating volcano and a frequent subject of Japanese art, especially after 1600, when Edo (now Tokyo) became the capital and people saw the mountain while traveling on it. Tōkaidō road.</p>
<div class="ul-li-mountain">
    <ul class="pac-details ">
        <li><p>Mount Fuji is also a traditional site for ancient warriors: samurai used the foot of the mountain as a training ground, near the present-day town of Gotemba. Shōgun Minamoto no Yoritomo organized yabusame in the area in the early Kamakura period.</p></li>
        <li><p>On March 5, 1966, BOAC Flight 911, a Boeing 707, broke up in flight and crashed near terminal five of Mount Fuji Gotemba, shortly after departure from Tokyo International Airport.</p></li>
        <li><p>Today, Mount Fuji is an international destination for tourism and mountaineering. At the beginning of the 20th century, populist educator Frederick Starr of Chautauqua preached some of the stories of Mount Fuji - 1913, 1919 and 1923 that became widely known in America.</p></li>
        <li><p>In September 2004, the weather station was closed after 72 years of operation. Observers watched for storms and heavy rains. The highest meteorological station in Japan, at 3,780 meters, has been replaced by a fully automated meteorological system.</p></li>
    </ul>
</div>

@include('client.home.createtour')

</div>



@endsection