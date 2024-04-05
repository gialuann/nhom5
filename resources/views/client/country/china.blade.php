@extends('client.master')
@section('title' ,'china')
@section('content')

<section class="package" id="package">
    <div class="image-container">
        <img src="{{asset('blog/files/trungquoc.jpg')}}" class="img1">
        <div class="overlay">China Mountains</div>
    </div>

    <div class="package-content">
        @foreach ($mountains as $mountain)
         @if ($mountain->country->name == "China")
        <div class="box">
            <div class="image">
                <a href="{{route('client.mountain.'.$mountain->name )}}"><img src="{{asset('uploads/')}}/{{$mountain->image}}" alt="">
                <h3>{{$mountain->name}}</h3>
            </div>
            <div class="stars">
                <a href="#"><i class='bx bxs-star'></i></a>
                <a href="#"><i class='bx bxs-star'></i></a>
                <a href="#"><i class='bx bxs-star'></i></a>
                <a href="#"><i class='bx bxs-star'></i></a>
                <a href="#"><i class='bx bxs-star-half'></i></a>
            </div>
            <div class="dest-content">
                <div class="location">
                    <li><h4>{{$mountain->name}} Mountain</h4></li>
                <ul class="pac-details">
                    <li>Height {{$mountain->height}}m</li>
                    <li><p>{{Str::words($mountain->content,15)}} <a href="{{route('client.mountain.'.$mountain->name )}}">Read More</a>
                </ul>
                </div>
            </div>
        </div>
        @endif  
        @endforeach

    </div> 

</section>

@endsection