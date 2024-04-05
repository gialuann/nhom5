@extends('client.master')
@section('title' ,'Nanga Parbat')
@section('content')
<div class="image-container">
    <img src="{{asset('blog/files/hinhchitietnui.png')}}" class="img1">
    <div class="overlay">Mountain Nanga Parbat</div>
</div>
<div class="introducing">
<h2>Conquer Nanga Parbat Mountain</h2>
    <p>Nanga Parbat (Naked Mountain), Urdu: نانگا پربت [nəŋɡaː pərbət̪] with a height of 8,126 meters (26,660 ft), is the 9th highest mountain in the world. The mountain is located on the western slope of the Himalayas in the Gilgit-Baltistan region of Pakistan. <br><br>

    This mountain is also known as "The Cannibal" or "Devil Mountain". This mountain is the scene of many climbing accidents buried in snow. Here there are many of the highest cliffs in the world, especially in the south, a 4,600 m high wall rises. The first recorded attempt to summit a peak above 8,000 meters was during the expedition of Albert F. Mummery and J. Norman Collie, who attempted to reach Mount Nanga Parbat in Kashmir (now Gilgit-Baltistan, Pakistan). in 1895; but this attempt failed when Mummery and two other Gurkhas, Ragobir and Goman Singh, died in an avalanche.</p>

<div><img class="img6" src="{{asset('blog/files/Nanga-Parbat-1024x576.jpg')}}" alt="nuiba"></div>

<h3 class="mountaintitle">Nanga Parbat Geography</h3>
    <p>This mountain is also known for its vertical drop making it one of the most difficult peaks to climb. The area surrounding the mountain is home to several indigenous communities, including the Diamer and Kohistan tribes. <br>
    Nanga Parbat là một phần của dãy Himalaya và nằm ở Quận Diamer của Pakistan. Ngọn núi được bao quanh bởi 3 sông băng dài nhất thế giới, trong đó có sông băng Raikot dài 36 km.</p>
<h4 class="mountaintitlee">Raikot Glacier</h4>
<p>Raikot Glacier is the largest glacier south of Nanga Parbat, stretching over 40 km. It starts from the top of the mountain and flows into the Indus River. The glacier can be reached via the Raikot Face of Nanga Parbat, which is a popular trekking route for tourists.</p>
<h4 class="mountaintitlee">Diamir Glacier</h4>
<p>Diamir Glacier is located west of Nanga Parbat and is about 20 km long. It is the source of the Diamir River, which joins the lower Indus River. You can reach the river crossing via the Diamir Face of Nanga Parbat, which is also a popular trekking route.</p>
<h4 class="mountaintitlee">Rakhiot Glacier</h4>
<p>Rakhiot Glacier is the third longest glacier south of Nanga Parbat, stretching over 22 km. It is the source of the Rakhiot River which flows into the Indus River. The glacier can be accessed via the Rakhiot Face of Nanga Parbat.</p>

<h3 class="mountaintitle">Climbing challenge at Nanga Parbat</h3>
    <p>Climbing Nanga Parbat is not for the faint of heart. This mountain has claimed the lives of many experienced climbers and it requires high skill and experience to successfully conquer this mountain. <br>
    The climb involves crossing treacherous glaciers, scaling steep ice walls and scrambling over treacherous rock formations. The weather on the mountain is also unpredictable and can change quickly, making it even more challenging for climbers.</p>
<h3 class="mountaintitle">Climbing challenge at Nanga Parbat</h3>
    <p>There are several routes to climb Nanga Parbat, of which Diamir Face is the most popular. Diamir Face is known for its steepness and difficulty, and requires climbers to traverse treacherous ice and negotiate narrow crevices. <br>
    Other routes include the Rupal Face, which is the highest face of the mountain, and the Kinshofer Route, known for its steep ice walls and challenging rock formations.</p>
    @include('client.home.createtour',['id' => $mountain->id])
</div>



@endsection