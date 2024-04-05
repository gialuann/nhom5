@extends('client.master')
@section('title' ,'Bà Đen')
@section('content')
@foreach ($mountains as $mountain)
@if ($mountain->country->name == "vietnam")
@if ($mountain->name=="Ba-Den")
<div class="image-container">
    <img src="{{asset('blog/files/hinhchitietnui.png')}}" class="img1">
    <div class="overlay">{{$mountain->name}} Mountain</div>
</div>
<div class="introducing">
<h2>Conquer {{$mountain->name}} Mountain</h2>
<p>{{$mountain->content}} <br>

This area is actually a cluster of three adjacent mountains, Ba Den Mountain (also known as Ba Mountain), Heo Mountain and Phung Mountain on a total area of ​​24 km². The Ba Den Mountain complex was recognized by the Ministry of Culture (now the Ministry of Culture, Sports and Tourism) as a national historical site and scenic spot on January 21, 1989.</p>
<h3 class="mountaintitle">Characteristics and geography</h3>
<h4 class="mountaintitlee">Ba Den Mountain (Ba Mountain)</h4>
<p>At an altitude of 996 meters (3,268 ft), this extinct volcano rises from the flat farmland of the Southeast. The mountain is almost a perfect cone and slightly bulges in the northwest. Ba Den Mountain owns many caves and is covered with many large basalt rocks. The location of the mountain is in the northeast of Tay Ninh city, in Thanh Tan commune and 11 km from the city center; 96 km northwest of Ho Chi Minh City. <br>
A species of gecko, Gekko badenii (Ba Den mountain gecko), was named after the mountain and is endemic to the mountain.</p>
<div><img class="img5" src="{{asset('blog/files/nuiba.jpeg')}}" alt="nuiba"></div>
<h4 class="mountaintitlee">Nui Dat (Pig Mountain)</h4>
<p>Nui Dat, also known by locals as Heo Mountain, is the lowest peak in the Ba Den Mountain Complex of 3 peaks. According to the administrative map of Tay Ninh province in 2002, Heo Mountain is located to the west of Ba Den Mountain with a peak of 341 m.</p>
<h4 class="mountaintitlee">Phung Mountain</h4>
<p>Phung Mountain is a mountain located in the northwest of Ba Den Mountain, near Road 785 with an altitude of 419 m.</p>
<h4 class="mountaintitlee">Ma Thien Lanh Valley</h4>
<p>Ma Thien Lanh Valley is a valley located in the Ba Den mountain complex, the contiguous place between three mountains: Dat mountain, Phung mountain and Ba Den mountain in Thanh Tan commune, Tay Ninh city.</p>

<h3 class="mountaintitle">Climbing Ba Den mountain</h3>
<p>There are two routes for tourists to climb to the top of Ba Den mountain: the trail behind Ba Pagoda. This road is said to be quite steep and short but contains many dangers such as falling rocks, slippery slopes and poisonous snakes. Along the way there are 4 food and food supply stations. Two other trails start from the Martyrs' monument and follow the electric poles to the top of the mountain. This road is easy to follow, but is quite long, sunny and has no aid station. <br> <br>

However, on May 14, 2021, Mr. Pham Van Hai, Deputy Head of the Management Board of Ba Den Mountain National Tourist Area, under the People's Committee of Tay Ninh Province, announced a request to temporarily stop conquering the peak of Ba Den Mountain. By road such as the road from Ba Pagoda to the top, electric pole road and trail in Ma Thien Lanh area. The reason given by the Management Board is due to the impact of the rainy and stormy season, causing erosion, landslides, dangerous for backpackers and at the same time, investors are building a road project to the top of Ba Den mountain.</p>
@include('client.home.createtour', ['id' => $mountain->id])
@endif
@endif

@endforeach
</div>



@endsection