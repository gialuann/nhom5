@extends('client.master')
@section('title' ,'Qingcheng')
@section('content')
<div class="image-container">
    <img src="{{asset('blog/files/hinhchitietnui.png')}}" class="img1">
    <div class="overlay">Qingcheng Mountain</div>
</div>
<div class="introducing">
<h2>Conquer Qingcheng Mountain</h2>
<p>Qingcheng Mountain ( Chinese :青城山; pinyin : Qīngchéng Shān ) is a mountain located in Dujiangyan City , Sichuan , China . It is located 68 km east of Chengdu city , and 10 km southwest of Dujiangyan irrigation project. Its main peak is Lao Tieu Peak , 1600 meters above sea level. Qingcheng Mountain is one of the most famous mountains in Sichuan with a reputation similar to Sword Gate in Emei Mountain , or Kuimen in Chongqing, it is known as "Qingcheng under the sky". It is a historic mountain of China, a national scenic spot, a UNESCO World Heritage Site along with the Dujiangyan Irrigation Works . Qingcheng is one of the cradles of Taoism and one of the most important Taoist centers in China. The mountain was affected by the 2008 Sichuan Earthquake .</p>
<div><img class="img6" src="{{asset('blog/files/nui-thanh-thanh-4.jpg')}}" alt="núi thanh thành"></div>
<h3 class="mountaintitle">Description </h3>
<p>
    In 142 CE, Zhang Ling established the doctrine of Taoism at Qingcheng Mountain, and in the following year he went to practice there. During the years from 265 to 420, Qingcheng Mountain became the center of Taoist teachings that were widely spread throughout China, culminating in the Tang Dynasty, from Qingcheng Mountain, the most important figures In Chinese thought and science, Qingcheng Mountain was mentioned during this period.
    <br><br>
    The most difficult period of Taoism fell at the end of the Ming Dynasty, and recovery at the beginning of the Qing Dynasty in the 17th century. From then on, Qingcheng Mountain came to fulfill its role as the center of wisdom and spirituality. god of Taoism, which it has retained to this day. The main Taoist buildings on Qingcheng Mountain today include Kien Phuc Palace, Lao Quan Pavilion, Vien Minh Palace, Thuong Thanh Palace, and Thien Su Cave.
    <br><br>
    Some other notable locations here include:</p>
<div class="ul-li-mountain">
    <ul class="pac-details ">
        <li><p>Thai An ancient town: A place with many restaurants and hotels with old streets for tourists to rest.</p></li>
        <li><p>Ngu Long Cau: Is an ancient creek about 8 km long with the name taken from the legend of the five dragons appearing here. This is a place with beautiful scenery with Thanh Thanh Hau Son</p></li>
        <li><p>Bach Van cable car route from another village to Bach Van ancient camp.</p></li>
        <li><p>5Thuy Anh Lake: Is a lake located in Bach Van ancient camp.</p></li>
    </ul>
</div> <br>
<p>In addition, this is also home to the Dujiangyan Giant Panda Center which is also part of the World Heritage Site of the Giant Panda Sanctuary in Sichuan recognized by UNESCO in 2006.</p>

 
<h3 class="mountaintitle">Criteria </h3>
<div class="ul-li-mountain">
    <ul class="pac-details ">
        <li><p>Criterion (ii): The Dujiangyan irrigation system, begun in the 2nd century BC, was a major turning point in the development of water management and technology, and remains functional. perfectly.</p></li>
        <li><p>Criterion (iv): The great advances in science and technology achieved in ancient China are illustrated graphically by the Dujiangyan irrigation system.</p></li>
        <li><p>Criterion (vi): The temples of Qingcheng Mountain are closely linked to the foundations of Taoism, one of the most influential religions of East Asia for a long period of history.</p></li>
    </ul>
</div>
@include('client.home.createtour')
</div>



@endsection