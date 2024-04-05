
@extends('client.master')
@section('title' ,'blog về núi')

@section('content')

<div class="image-container">
    <img src="{{asset('blog/files/nui4.jpg')}}" class="img1">
    <div class="overlay">Avabledila Tour</div>
</div>
  




@if (Auth::check())
<section class="container">
    <table border="1px" class="tb1">
        <thead class="head1">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Creator</th>
                <th scope="col">Mountain</th>
                <th scope="col">Infomation</th>
                <th scope="col">Quantity</th>
                <th scope="col">Date</th>
                <th scope="col">Register Now</th>         
            </tr>
        </thead>
 @foreach ($joins as $join)
        @php
                $register = DB::table('memberjoins')->where([
                    ['join_id', $join->id],
                    ['status', 1]
                ])->count();
                $registerMember =DB::table('memberjoins')->where([
                    ['join_id', $join->id],
                    ['user_id', Auth::user()->id]
                ])->exists();
            @endphp    
        <tbody class="body1">
            <tr>      
                <td>{{$loop->iteration}}</td>
                <td>{{$join->user->fullname}}</td>
                <td>{{$join->mountain->name}}</td>
                <td>{{$join->infomation}}</td>
                <td>{{$join->quantity}}</td>
                <td>{{date('d/m/Y - H:m:i', strtotime($join->date))}}</td> 
                @if (!$registerMember && !($register >= $join->quantity)) 
                <form action="{{route('admin.memberjoin.store')}}" method="post">
                    @csrf
                <div id="hiddenElement" style="visibility: hidden;">
                <select name="join_id">
                    <option value="{{$join->id}}">{{$join->name}}</option>
                </select>
                <select name="user_id">
                    <option value="{{Auth::user()->id}}" >{{Auth::user()->fullname}} </option>
                </select>
                <label>Status</label>
                <select class="form-control" name="status">
                <option value="1" selected >validated</option>
                </select>
                </div>              
                <td><input type="submit" value="Register" class="btn1"></td>         
                </form>
                @endif 
            </tr>
        </tbody>
        @endforeach     
        <thead class="head1">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Creator</th>
                <th scope="col">Mountain</th>
                <th scope="col">Infomation</th>
                <th scope="col">Quantity</th>
                <th scope="col">Date</th>
                <th scope="col">Register Now</th>         
            </tr>
        </thead>
    </form>
    </table>        
</section>
@endif

@endsection