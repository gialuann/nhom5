@extends('client.master')
@section('title' ,'Pu-Si-Lung')
@section('content')
<div class="image-container">
    <img src="{{asset('blog/files/hinhchitietnui.png')}}" class="img1">
    <div class="overlay">Pu-Si-Lung Mountain</div>
</div>
<div class="introducing">
<h2>Conquer Pu Si Lung Mountain</h2>
    <p>The mountain is located on the Vietnam - China border to Muong Te town in the Northwest - Southeast direction. The part from Muong Te to Lai Chau city has a North-South direction. The average altitude is from 2000-3000m and the highest peak is Pu Si Lung peak at 3083m. This is the ideal height for those who want to conquer and discover new things. <br>
    Besides, the mountain peak is also in the top 3 highest peaks in Vietnam in the Northern region and is likened to a solid wall protecting the land and airspace of Lai Chau.</p>
<h3 class="mountaintitle">Milestone number 42</h3>
<p>This is probably the first purpose you want to conquer this mountain. The landmark is located at an altitude of 2800m and weighs up to 100kg and is made of marble. This height shows that if you want to conquer, you must overcome difficulties and make efforts.</p>
<img class="img6" src="{{asset('blog/files/nuipusilung.jpg')}}" alt="núi pusilung">
<h3 class="mountaintitle">Pu Si Lung sea of ​​clouds</h3>
<p>If you are a fan of cloud hunting, you should not miss it. With an altitude of over 300m, you will see beautiful clouds gently flying. However, you should check the weather in the sunny seasons, when the weather is cool you will see a cloudy sky and have sparkling virtual photos. </p>
<img class="img6" src="{{asset('blog/files/Pu-Si-Lung2.jpg')}}" alt="núi pusilung 2">
<h3 class="mountaintitle">Primeval forest</h3>
    <p>The forest in us is gold, silver, and the soul of people, so Pu Si Lung has been protected and preserved by the people in its original state without any impact or change from humans. The ancient trees have tall tops and reach out to block the sun. <br>

    Vegetation is clearly stratified from low shrubs to high shrubs. Besides, the forest has countless beautiful flowers: Orchids, Azalea flowers and especially Hoang Thao Ken species which is considered unique.</p>

<h3 class="mountaintitle">Ba Tieng Slope</h3>
    <p>
        As the name suggests, you have to overcome this slope within 3 hours. The road is craggy, mossy and slippery, and the cliffs are so dangerous that even conquerors have to brace themselves to hold on firmly. This is truly a challenge that requires you to persevere and have courage.
    </p>
    @include('client.home.createtour')

</div>



@endsection