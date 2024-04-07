@extends('client.master')
@section('title' ,'blog về núi')
@section('content')
<section class="locations" id="locations">
   <div>
              <div><h3>Email</h3>
                <p>{{Auth::user()->email}}</p>
            </div> 
            <div><h3>Full Name</h3>
              <p>{{Auth::user()->fullname}}</p>
          
          <div><h3>Level</h3>
                <td><span class="right badge badge-{{Auth::user()->level == 1 ?'success':'dark'}}">{{Auth::user()->level ==1? 'Admin' :'Member'}}</span></td>  
              </div>   
              <div><h3>Phone</h3>
                <p>{{Auth::user()->phone}}</p>
              </div> 
     </div>    
</section>
@endsection