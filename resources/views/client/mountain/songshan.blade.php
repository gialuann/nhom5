@extends('client.master')
@section('title' ,'Dōngshān')
@section('content')
<div class="image-container">
    <img src="{{asset('blog/files/hinhchitietnui.png')}}" class="img1">
    <div class="overlay">Mountain Dōngshān</div>
</div>
<div class="introducing">
<h2>Conquer Héngshān Mountain</h2>
<p>Songshan (simplified Chinese: 嵩山; pinyin: Sōngshān), is one of the five sacred mountains of China, located in Dengfeng, Zhengzhou, Henan, on the banks of the Yellow River. On February 13, 2004, it was recognized by UNESCO as a World Geopark.</p>
<img class="img6" src="{{asset('blog/files/tungson.jpg')}}" alt="núiTung Sơn">
<h3 class="mountaintitle">Geography</h3>
    <p>Tung Son is located in the Central Plains, in the past called Trung Nhac, the north overlooks the Yellow River and Lac Thuy, the south overlooks Dinh Thuy and Co Son, the east connects to the capital Bien Luong of the 5 dynasties, the west is adjacent to with the ancient capital of Luoyang of 9 dynasties. That's why it is called "Bien Lac Bi Kinh, Ky Noi Nam Mountain", the number one famous mountain in the Central Plains. <br><br>

    More than 30 emperors and more than 150 famous writers have visited Tung Son, making Tung Son a gathering place for gods. In the Book of Poetry, there is a saying "Tung Son high Duy Nhac, Tuan Cuc Vu Thien" (mountains are only Tung Son and Tuan Cuc higher than the sky).<br><br>
    
    The peak of the mountain is Tuan Cuc peak, 1,491.7 m [1] above sea level. The nearby Shaolin Temple is the birthplace of Zen Buddhism, and its collection of stupas containing remains is considered the largest in China today. Zhongye Temple was built during the Qin Dynasty and is one of the most ancient architectural works in China.</p>
</div>
@include('client.home.createtour')
</div>
@endsection