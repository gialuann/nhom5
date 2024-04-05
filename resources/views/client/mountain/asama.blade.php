@extends('client.master')
@section('title' ,'Asama')
@section('content')
@foreach ($mountains as $mountain)
@if ($mountain->country->name == "Japan")
@if ($mountain->name=="Asahi")
<div class="image-container">
    <img src="{{asset('blog/files/hinhchitietnui.png')}}" class="img1">
    <div class="overlay">{{$mountain->name}} Mountain</div>
</div>
<div class="introducing">
<h2>Conquer {{$mountain->name}} Mountain</h2>
<p>{{$mountain->content}}</p>

<div><img class="img6" src="{{asset('blog/files/Mount_Asama.JPG')}}" alt="Asama"></div>


<h3 class="mountaintitle">Geological</h3>
<p>Mount Asama is located at the junction of the Izu-Bonin-Mariana Arc and the Northeast Japan Arc. The mountain was formed from non-alkaline mafic rocks and volcanic lava dating from the Late Pleistocene to the Holocene. The main rock types are andesite and dacite. <br>
Scientists from the University of Tokyo and Nagoya University completed their first successful visualization of a volcano's interior in April 2007. br By detecting subatomic particles called muyons passing through the mountain After the fire arrived from space, scientists were able to gradually visualize the interior of the volcano, creating images of the holes through which lava penetrated deep into the volcano. <br>

The eastern slope of the mountain has a volcano monitoring station operated by the University of Tokyo.</p>

<h3 class="mountaintitle">Eruption history</h3>
<p>The volcano's geological features are closely monitored using seismometers and strategically placed video cameras. Scientists have documented a variety of textures in volcanic ash deposited in the area during a series of eruptions since the Tennin eruption of 1108. <br><br>

    Mount Asama erupted in early February 2009, sending ash up to 2 km (1.2 mi) high, and blowing rocks up to 1 km (0.62 mi) high from the crater. Ash falls were recorded in Tokyo, 145 km (90 mi) southeast of the crater. On February 16, 13 volcanic earthquakes were recorded and spewed smoke and ash into a cloud 400 m (1,300 ft) high.<br><br>
    
    Mount Asama continued to have small, seismic eruptions in February and maintained a level 3 alert (danger zone within 4 km (2.5 mi) of the crater).<br><br>
    
    There were small ash eruptions at Asama volcano in August 2008. This was the first activity at the volcano since 2004.<br><br>
    
    A single vulcanian eruption occurred at Mount Asama at 11:02 UT on September 1, 2004. Incandescent masses were ejected from the summit and caused several fires. The eruption sent ash and rock up to 200 km (120 mi).<br><br>
    
    In April 1995, over 1,000 earthquakes were detected at the volcano.<br><br>
    
    An explosive eruption occurred on April 8, 1983, incandescent tephra was spewed, and ash fell 250 km (160 mi) from the volcano.<br><br>
    Explosive eruptions occurred at the summit of Mount Asama on April 26, 1982, and fine ash fell in Tokyo for the first time in 23 years.</p>
<h4 class="mountaintitlee">Tenmei eruption</h4>
    <p>Mount Asama erupted in 1783 (Third Tenmei 3), causing widespread damage. The plinian eruption lasted for three months, beginning on May 9, 1783, causing andesite pumice showers, pyroclastic flows, lava flows, and expansion of the volcanic cone. The extreme eruption began on August 4 and lasted for 15 hours, with falling pumice and pyroclastic flows.The complex character of this eruption is explained by the rapid deposition of coarse pyroclastic ash near the vent and subsequent lava flows; and these events go poorly with high spray columns causing the pumice to be pushed further into the atmosphere. <br><br>

    Isaac Titsingh's description of the eruption of Mount Asama was published posthumously in French, in Paris in 1820; and an English translation was published in London in 1822. These books are based on Japanese sources; and this is the first work of this genre to be popular in Europe and the West. <br><br>
    
    The volcanic devastation exacerbated the "Great Tenmei Famine". Much of the arable land in the Shinano and Kōzuke areas was abandoned or under-produced over the next 4-5 years. The impact of the earthquake was terrible because after many years of near or actual starvation, the authorities and people had no reserves left. The eruption on August 4 killed 1,400 people, adding another 20,000 deaths due to famine.</p>
<h4 class="mountaintitlee">Tennin eruption</h4>
    <p>Mount Asama had an eruption in 1108 (Tennin 1), which is a topic studied by modern science. Records show that the intensity of this plinian-type eruption was twice that of the Tenmei disaster in 1783.</p>
<h3 class="mountaintitle">Historical eruptions</h3>
    <p>Mount Asama is recorded in Japanese records as having erupted in the following years: 2009, 2008, 2004, 2003, 1995, 1990, 1983, 1982, 1973, 1965, 1961, 1958–59, 1953–55, 1952, 1952, 1950 –51, 1949, 1947, 1946, 1944–45, 1938–42, 1935–37, 1934, 1934, 1933, 1931–32, 1930, 1929, 1929, 1927–28, 1924, 1922, 1920–21, 1919 , 1918?, 1917, 1916, 1915, 1914, 1909–14, 1908, 1908, 1907, 1907, 1906, 1905?, 1904, 1903, 1902, 1902, 1900–01, 1899, 1899, 1894, 1889, 1879 , 1878?, 1875, 1869, 1815, 1803, 1803, 1783, 1779?, 1777, 1776, 1769, 1762, 1755, 1754, 1733, 1732, 1731, 1729, 1729, 1728, 1723, 1723, 1722, 1721 , 1720, 1719, 1718, 1717, 1711, 1710, 1708–09, 1706, 1704, 1703, 1669, 1661, 1661, 1660, 1659, 1658, 1657, 1656, 1655, 1653 , 1652, 1651, 1650?, 1649, 1648, 1648, 1647, 1645, 1644, 1609, 1605, 1604, 1600, 1598, 1597, 1596, 1596, 1595?, 1591, 1590, 1532, 1528, 1527, 15 18, 1427?, 1281, 1108, 887, 685.</p>
    @include('client.home.createtour', ['id' => $mountain->id])
    @endif
    @endif
    
    @endforeach
</div>



@endsection