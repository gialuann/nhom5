@extends('client.master')
@section('title' ,'pakistan')
@section('action', 'List Mountains')

<link rel="stylesheet" href="{{ asset('admin/mountrains/style.css')}}">

@section('content')

<section class="package" id="package">
    <div class="image-container">
        <img src="{{asset('blog/files/pakistan.jpg')}}" class="img1">
        <div class="overlay">Pakistan Mountains</div>
    </div>

    <div class="package-content">
        
        <div class="box">
            <div class="image">
                <a href="{{route('client.mountain.nangaparbat')}}"><img src="{{asset('blog/files/nanga-parbat.jpg')}}" alt="">
                <h3>Nanga Parbat</h3>
            </div>
            <div class="stars">
                <a href="#"><i class='bx bxs-star'></i></a>
                <a href="#"><i class='bx bxs-star'></i></a>
                <a href="#"><i class='bx bxs-star'></i></a>
                <a href="#"><i class='bx bxs-star'></i></a>
                <a href="#"><i class='bx bxs-star'></i></a>
            </div>
            <div class="dest-content">
                <div class="location">
                    <li><h4>Nanga Parbat</h4></li>
                <ul class="pac-details">
                    <li>Height 8.126m</li>
                    <li>Nanga Parbat (Naked Mountain), Urdu: نانگا پربت [nəŋɡaː pərbət̪] with a Height of 8,126 meters (26,660 ft), is the 9th highest mountain in the world. The mountain is located on the western slope of the Himalayas in the Gilgit-Baltistan region of Pakistan.
                        <br>
                    This mountain is also known as "The Cannibal" or "Devil Mountain". This mountain is the scene of many climbing accidents buried in snow. Here there are many of the highest cliffs in the world, especially in the south, a 4,600 m high wall rises. The first recorded attempt to summit a peak above 8000 meters was during the expedition of Albert F. Mummery and J. Norman Collie, who attempted to reach Mount Nanga Parbat in Kashmir (now Gilgit-Baltistan, Pakistan). in 1895; but this attempt failed when Mummery and two other Gurkhas, Ragobir and Goman Singh, died in an avalanche.</li>
                </ul>
                </div>
            </div>
        </div>
        
        <div class="box">
            <div class="image">
                <a href="{{route('client.mountain.k2')}}"><img src="{{asset('blog/files/k2.png')}}" alt="">
                <h3>K2</h3>
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
                    <h4>K2</h4>
                    <ul class="pac-details">
                        <li>Height  8,611m</li>
                        <li>K2 (also known as Godwin-Austen peak, Lambha Pahar, Chogori, Kechu or Dapsang), 8,611 m (28,251 ft) high is the second highest peak on the ground, located on the border between Taxkorgan district, Kashgar, Xinjiang, China and Pakistan, in the Karakoram Mountains.</br>

                        K2 is known as the "Wild Mountain" because the journey to the top is fierce. With the second highest death rate among mountains over 8000 meters high, one person dies for every four successful summiteers, the official number being 77 deaths in 300 successful conquests. Because reaching the summit from China is more dangerous and difficult, most climbers choose to go from Pakistan. Unlike Annapurna, the mountain with the highest death rate (191 ascents and 61 deaths), or any mountain higher than 8000 meters, no one has ever climbed K2 in winter.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

        

</section>

@endsection