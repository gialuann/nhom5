@extends('client.master')
@section('title' ,'Kabru')
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
<p>
    {{$mountain->content}}</p>
<div><img class="img6" src="{{asset('blog/files/Kabru.jpg')}}" alt="núi Kabru"></div>
<h3 class="mountaintitle">Climbing</h3>
<p>
    The peak of Mount Kabru is 7,338 m high. The year 1885 (or 1903) was the time when the mountain's height was recorded. British lawyer William Graham, Swiss hotelier Emil Boss and Swiss mountain guide Ulrich Kaufmann reported reaching 30–40 feet below the summit, Graham describing it as "lower than an icicle ", at 2 pm on October 8, 1883. This report was questioned by members of the Alpine Club and the Survey of India, which was later dismissed. Recent analysis suggests the climbers may be right in their assessment. [1] If Graham, Boss and Kaufmann climbed to about 7,325 m on Kabru, this height was notable at the time, breaking the current altitude record of only 360 m (according to pre-Columbian Aconcagua ) and still holding this altitude for 26 years (until in 1909 an expedition led by Luigi Amedeo Duke of Abruzzi reached about 7500 m on Chogolisa ). <br><br>

    If their altitude reports are invalidated, the summit's undisputed record for altitude was on October 20, 1907, when Norwegians Carl W. Rubenson and Monrad Aas came within 50m of the climb. go up. Notably, Rubenson and Aas believe that Kauffmann, Boss and Graham reached the same point 34 years ago. <br><br>

    Kabru North was approached by CRCooke on 18 November 1935. It remained the highest climb until 1953. <br><br>

    According to the 1996 edition of Himalaya Magazine (page 29 row 36), members of an Indian army expedition reached the summit of Kabru IV in May 1994. Kabru South was also climbed by an Indian party. in 1994.
    <br><br>
    In 2004, a group of Serbian climbers unsuccessfully attempted to ascend the mountain. A series of avalanches forces the group to abandon their goal.
</p>

@include('client.home.createtour',['id' => $mountain->id])
@endif
@endif
@endforeach
</div>

@endsection