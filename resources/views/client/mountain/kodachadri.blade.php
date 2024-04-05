@extends('client.master')
@section('title' ,'kodachadri')
@section('content')
<div class="image-container">
    <img src="{{asset('blog/files/hinhchitietnui.png')}}" class="img1">
    <div class="overlay">kodachadri Mountain</div>
</div>
<div class="introducing">
<h2>Conquer kodachadri Mountain</h2>
<p>
    Kodachadri is a mountain peak with dense forests (elevation - 1,343 metres above sea level) in the Western Ghats in South India (Shivamogga District, Karnataka), 78 km from Shimoga. Kodachadri is the highest peak in Shivamogga district. It is declared as natural heritage site by the Karnataka Government. and it is 13th highest peak of Karnataka.</p>
<div><img class="img6" src="{{asset('blog/files/Kodachadri.jpg')}}" alt="núi Kodachadri"></div>
<h3 class="mountaintitle">Etymology</h3>
<p>
    The name comes from native word "Kodacha" or "Kodashi", which means Kutaja flowers, and "Adri", a Sanskrit word for mountain, both combined to coin the word Kodachadri. "Kuţaja" in Sanskrit means Girimallika or Jasmine of the hill (Wrightia antidysenterica). The hilly region that is full of "Jasmine of the hills" plants is "Kutajagiri". It is also called "Kutachadri" and "Kodashi Parvatha".
</p>
<h3 class="mountaintitle">Location</h3>
<p>
    Kodachadri forms a background to the temple of Mookambika in Kollur. It is located at a distance of 21 km from Kollur and 15 km from Nagodi village, in Hosanagara taluk. 78 km and 42 km from Sagara, Karnataka via Hasirumakki Ferry from District Headquarters Shimoga and there are different routes to reach the Peak of Kodachadri and the difficulty varies highly with respect to the route chosen. However it is challenging to reach the peak in monsoon due to heavy rains that make the routes slippery. Kodachadri receives an annual rain fall of 500 cm to 750 cm and it rains for about eight months in a year.
</p>
@include('client.home.createtour')
</div>



@endsection