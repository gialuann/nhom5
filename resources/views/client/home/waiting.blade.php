@extends('client.master')
@section('title' ,'blog về núi')
@section('content')

<div class="image-container">
    <img src="{{asset('blog/files/nui4.jpg')}}" class="img1">
    <div class="overlay">Rejected Tour</div>
</div>

@if (Auth::check())
<section class="container">
    <table name="created" border="1px" class="tb1">
        <thead class="head1">
            <tr>
                <th>ID</th>
                <th>Mountain</th>
                <th>Name</th>
                <th>Infomation</th>
                <th>Quantity</th>
                <th>Status</th>         
            </tr>
        </thead>
        
        @foreach ($memberjoins as $memberjoin) 
        <tbody class="body1">
            <tr>@if ($memberjoin->status==1)    
                <td>{{$loop->iteration}}</td>
                <td>{{$memberjoin->join->mountain->name}}</td>
                <td>{{$memberjoin->join->name}}</td>
                <td>{{$memberjoin->join->infomation}}</td>
                <td>{{$memberjoin->join->quantity}}</td> 
                
                @if ($memberjoin->status == 1)
                <td><span class="right badge badge-{{$memberjoin->status == 1 ?'dark':'success'}}">Waiting</td>
            @endif
            @if ($memberjoin->status == 2)
            <td><span class="right badge badge-{{$memberjoin->status == 2 ?'success':'dark'}}">Validated</td>
            @endif
            @if ($memberjoin->status == 3)
            <td><span class="right badge badge-{{$memberjoin->status == 3 ?'dark':'success'}}">Rejected</td>
            @endif
                @endif  
                
            </tr>
        </tbody>
       
        @endforeach
        <thead class="head1">
            <tr>
                <th>ID</th>
                <th>Mountain</th>
                <th>Name</th>
                <th>Infomation</th>
                <th>Quantity</th>
                <th>Status</th>         
            </tr>
        </thead>
    </form>
    </table>        
</section>
@endif

@endsection