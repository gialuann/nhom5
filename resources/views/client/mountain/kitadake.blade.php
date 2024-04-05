@extends('client.master')
@section('title' ,'Asahi')
@section('content')
<div class="image-container">
    <img src="{{asset('uploads/1712195278-kitadake.jpg')}}" class="img1">
    <div class="overlay">Kitadake Mountain</div>
</div>
<div class="introducing">
<h3 class="mountaintitle">Conquer Kitadake  Mountain</h3>
<p>Mount Kita (北岳, Kita-dake) is a mountain of the Akaishi Mountains−"Southern Alps" (南アルプス Minami-Arupusu), in Yamanashi Prefecture, Japan.
It is the second tallest mountain in Japan, after Mount Fuji, and is known as "the Leader of the Southern Alps".[3] It is included in the 100 Famous Japanese Mountains. It is located in Minami Alps National Park, near the city of Minami-Alps,which in Yamanashi Prefecture.
</p>

<h3 class="mountaintitle">Geological</h3>
<p>The Kitadake Buttress (北岳バットレス, Kita-dake Battoresu) is a 600 m (1,969 ft) tall rock face on the eastern side of the mountain.
Alpine plants grow abundantly, especially on the mountain's southeastern slope along the route to Mount Nakashirane (中白峰山, Nakashirane-san) and along the Kusasuberi (草すべり, kusasuberi) and Migimata (右俣, migimata) courses along Shiraneo Pond (白根御池, Shiraneo-ike) on the mountain's northern side. Large clusters of plants can be seen from huts near the top. The species Callianthemum hondoense (キタダケソウ, kitadakesō) is endemic to this mountain.</p>
<div><img class="img6" src="{{asset('uploads/1712195278-kitadake.jpg')}}" alt="fujisan"></div>
@include('client.home.createtour')
</div>



@endsection