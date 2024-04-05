@extends('client.master')
@section('title' ,'Langbiang')
@section('content')
<div class="image-container">
    <img src="{{asset('blog/files/hinhchitietnui.png')}}" class="img1">
    <div class="overlay">Mountain Langbiang</div>
</div>
<div class="introducing">
    <h2>Conquer Langbiang Mountain</h2>
    <p>Langbiang Mountain is a cluster of high mountains located 12 km from Da Lat city in Lac Duong district. The two highest mountains here are Ba Mountain 2,167 m high and Ong Mountain 2,124 m high above sea level. Also in the tourist area is the 1,929 m high Radar hill. This hill is also a familiar place for tourists. Looking from the center of Da Lat city, you can see Ba ​​Mountain on the left, Ong Mountain on the right. Langbiang is considered the "roof" of Da Lat and is an attractive and famous tourist destination in this city.</p>

    <h3 class="mountaintitle">Information about the route to conquer Langbiang peak</h3>
    <p>From Da Lat city center, visitors can travel by motorbike or bus a distance of 12 km to the foot of the mountain. If you choose the bus, the bus route name is Da Lat - Lac Duong. Bus station in Hoa Binh area near Da Lat market. <br>
    Visitors have two main options for climbing.</p>

    <h4 class="mountaintitlee">Conquer Radar Hill (altitude 1929 m)</h4>
    <p>The route is paved and 6 km long. You can walk or rent a Jeep to the top of the hill <br>
    Jeep service: 360,000 VND/1 vehicle (6 people per vehicle, excluding tickets for children under 6 years old, round-trip tickets)<br>
    Langbiang tourist area gate ticket: 40,000 VND (2018)<br>
    Average time to reach the top of the hill: 1.5 - 2 hours if walking, 15 minutes if riding a Jeep</p>
    <img class="img6" src="{{asset('blog/files/doirada.jpg')}}" alt="núi Langbiang">
    <h4 class="mountaintitlee">Conquer the top of Nui Ba - Langbiang (altitude 2167m)</h4>
    <p>This road is difficult to travel but the scenery is beautiful and the terrain is more diverse.<br>
    The average time from the foot of the mountain to the top of the mountain is 3 hours. Travel time from the top of the mountain to the bottom of the mountain is 2 hours.<br>
    This route can be divided into 2 parts.</p>
    <img class="img6" src="{{asset('blog/files/dinhlangbiang.jpg')}}" alt="núi Langbiang">
    <p><b>From the tourist area gate up to the Bidoup Nui Ba National Park checkpoint</b></p>
    <p>There are two ways to get to the checkpoint: <br>

    - Follow the asphalt road that Jeeps use to transport passengers to Radar hill, go about 3-4 km to the intersection with the national park checkpoint, then you will have to enter the trail.<br>
    
    - Do not enter the gate of the tourist area but follow the trail to the right of the gate. On the side of the road you can see a few houses and farmland of indigenous people. Then go into the pine forest, follow the trail towards the control station (note: the road is steep, there are many parts that are lost - you can get lost).</p>

    <p><b>From the checkpoint to the top of Nui Ba - Langbiang</b></p>
    <p>Follow the trail. The trail is quite clear. Along the way, it can be seen that the distribution of plants changes with altitude. Visitors will pass through pine forests, old forests, giant trees, etc. <br>
    This route is a non-rideable trail. <br>
    In addition, the management board of Bidoup Nui Ba National Park (near Zoo Doo) also provides tour guide services to guide and explain the biodiversity of the national park (for a fee, if you want a guide). You can call to register in advance).</p>
    

    @include('client.home.createtour')
</div>



@endsection