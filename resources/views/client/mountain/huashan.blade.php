@extends('client.master')
@section('title' ,'Huashan')
@section('content')
<div class="image-container">
    <img src="{{asset('blog/files/hinhchitietnui.png')}}" class="img1">
    <div class="overlay">Mountain Huashan</div>
</div>
<div class="introducing">
    <h2>Conquer Huashan Mountain</h2>
    <p>Hoa Son (simplified Chinese: 华山, traditional Chinese: 華山; pronunciation: Huà Shān) is one of the five mountains in the Five Mountains of China. The mountain carries with it great historical and religious significance.[citation needed] In 1990, Hoa Son was recognized by UNESCO as a world natural heritage.</p>
<h3 class="mountaintitle">Geography and characteristics</h3>
    <p>Huashan is a mountain in the eastern section of the Qinling range in southern Shaanxi province, about 100 km east of Xi'an city. Hoa Son has five main peaks, of which the highest peak Nam Phong (in the south) named Lac Nhan ("落雁") is 2,154.9 m high. The mountain is surrounded by granite, from a distance, the mountain shape stands up like a flower and is therefore called "Hoa Son" (in ancient Chinese, "flower" and "ho" are related to together). The main peak is 2,083m high, called Thai Hoa Son or Tay Nhac. Hoa Son is famous as a dangerous place, testing the skills of brave mountain climbers. <br>

    Known as the pinnacle of Taoism, Huashan's four main peaks are surrounded by ancient temples that have been places of prayer and worship since at least the time of Qin Shi Huang in the 200s BC. The trails leading to the top of the mountain seem to still be as pristine as they were thousands of years ago.</p>


<h3 class="mountaintitle">The most dangerous trail in the world</h3>
    <p>Hoa Son is famous worldwide with many nicknames such as "Stairway to heaven, hell is just one step away", "The most dangerous trail on the planet", "Wooden plank road in the sky". Everyone was impressed with the rugged wooden planks pinned directly to the cliff halfway up a mountain more than 2,000 meters high, without any protective fence while right below was the abyss. <br>

    Although all visitors are fastened with seat belts before climbing over the cliff, and there is a securely attached chain for everyone to hold on to, many people still do not dare to try it.</p>
    <img class="img6" src="{{asset('blog/files/duongmonhoason.jpg')}}" alt="hoason">

<h3 class="mountaintitle">Life on Hua Shan</h3>
    <p>Said to be the former residence of Lao Tzu - China's most famous philosopher, Hoa Son is of great importance to China's Taoist community with a number of temples that have been preserved for many generations. . While most modern visitors come here for tourism reasons, monastic life still exists in the mountains. Gatekeepers transported food and household items up the stone stairs from the town below to Hoa Son to supply the monasteries as well as the tourist services that had been built to serve visitors. <br>

    Even non-religious people can stay in small guest houses next to some temples, but if you do not want to experience asceticism, you can choose some standard hotels. However, no matter where you stay, you should bring snacks and drinks to ensure you don't have to pay a lot of money to buy them in the mountains. All goods at the top of Hoa Son are brought from the valleys, it is very difficult to avoid the fact that restaurants, hotels or some small stalls have sky-high prices.</p>

<h3 class="mountaintitle">In Five Music Famous Mountains</h3>
    <p>The appearance of these five famous mountains is also very diverse and does not overlap or overlap. Thai Son is like sitting (sitting), Hanh Son is like phi (flying), Tung Son is like crouching (lying), Hang Son is like practicing (walking), Hoa Son is like lap (standing).</p>
    @include('client.home.createtour')
</div>



@endsection