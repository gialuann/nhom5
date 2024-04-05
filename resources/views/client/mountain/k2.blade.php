@extends('client.master')
@section('title' ,'K2')
@section('content')
<div class="image-container">
    <img src="{{asset('blog/files/hinhchitietnui.png')}}" class="img1">
    <div class="overlay">Mountain K2</div>
</div>
<div class="introducing">
<h2>Conquer K2 Mountain</h2>
    <p>K2 (also known as Godwin-Austen peak, Lambha Pahar, Chogori, Kechu or Dapsang), 8,611 m (28,251 ft) high is the second highest peak on the ground, located on the border between Taxkorgan district, Kashgar, Xinjiang, China and Pakistan, in the Karakoram Mountains. <br><br>

    K2 is known as the "Wild Mountain" because the journey to the top is fierce. With the second highest death rate among mountains over 8,000 meters high, one person dies for every four successful summiteers, the official number being 77 deaths in 300 successful conquests. Because reaching the summit from China is more dangerous and difficult, most climbers choose to go from Pakistan. Unlike Annapurna, the mountain with the highest death rate (191 ascents and 61 deaths), or any mountain higher than 8000 meters, no one has ever climbed K2 in winter.</p>

<div><img class="img6" src="{{asset('blog/files/nuik2.jpg')}}" alt="nuik2"></div>

<h3 class="mountaintitle">Name</h3>
    <p>The name K2 comes from the Great British Geographical Survey of India. Thomas Montgomerie made the first survey of the Karakoram range from Mount Haramukh, about 210 km (130 mi), and discovered the two highest mountains, naming them K1 and K2. <br><br>

    As the Great Survey's policy was to use local names for mountains as much as possible, K1 became known as Masherbrum. However, because K2 is so remote, it does not have any local name. The mountain is not visible from the village of Askole, the last village to the south, or from the nearest settlement to the north. K2 is only slightly visible from the end of the Baltoro Glacier, and is far beyond the reach of most people. The name Chogori, from the Balti words chhogo ("big") and ri ("mountain") (چھوغوری) has been suggested as a local name but there is no basis for this. The name Chogori is widely used. This name may come from Western explorers, or be a sarcastic answer to the question "What is the name of that mountain?". In addition, there are some other names such as: Dapsang, Lambha Pahar, etc. but they are not widely used. <br><br>
    Lacking a local name, the name Godwin-Austen was used, honoring Henry Godwin-Austen, one of the discoverers of the area. And although the name was rejected by the Royal Geographical Society, it was still used on some maps and continues to be mentioned today.<br><br>

    K2, as marked by the surveyor, continues to be widely used and known. And K2 is also used in Balti, translated into Kechu or Ketu (Urdu: کے ٹو). Italian climber Fosco Maraini believes that this mountain has a very appropriate name due to its remoteness and challenges for humans. He concluded that:<br><br>
    
    "...A literal name, containing rocks, snow, storms and abyss. It is not intended to be anthropomorphized at all. It contains the nakedness of this world before humans existed. people - or of a world that perishes after the disappearance of humans."</p>

<h3 class="mountaintitle">Geographic data</h3>
    <p>K2 is located in the northwest of the Karakoram Mountains. Located between the Baltistan part of the Gilgit-Baltistan region, Pakistan and the Kashgar region, Xinjiang, China. Bordered by the Tarim Basin to the north, and the Himalayas to the south. Water flows from extensive glaciers from the south and east of K2 provide irrigation for the surrounding valleys and make an important contribution to the region's freshwater supply. <br><br>

    K2 is ranked 22nd for elevation gain relative to its surroundings, as it is part of the surrounding plateau (which includes the Karakoram range, the Tibetan plateau, and the Himalayas), and there is a trail leading from K2 to Everest which is always above 4,594 meters at Mustang Lo.</p>


    @include('client.home.createtour')
</div>
@endsection