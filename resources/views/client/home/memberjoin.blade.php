@extends('client.master')
@section('title' ,'Validated')

@section('content')

<div class="image-container">
    <img src="{{asset('blog/files/nui4.jpg')}}" class="img1">
    <div class="overlay">MemberJoinList</div>
</div>
   
@if (Auth::check())
<section class="container">
        <table class="tb1"  border="1px">
            <thead class="head1">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Mountain</th>
                    <th scope="col">MemberName</th>
                    <th scope="col">Status</th>
                    <th scope="col">Chose</th>
                </tr>
            </thead>
            @foreach ($memberjoins as $memberjoin)
            @if($memberjoin->status == 1)
            @if (Auth::user()->id ==$memberjoin->join->user_id)
            <tbody class="body1">
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$memberjoin->join->mountain->name}} </td>
                    <td>{{$memberjoin->user->fullname}}</td>
                    @if ($memberjoin->status == 1)
                        <td><span class="right badge badge-{{$memberjoin->status == 1 ?'dark':'success'}}">Waiting</td>
                    @endif
                    @if ($memberjoin->status == 2)
                    <td><span class="right badge badge-{{$memberjoin->status == 2 ?'success':'dark'}}">Validated</td>
                    @endif
                    @if ($memberjoin->status == 3)
                    <td><span class="right badge badge-{{$memberjoin->status == 3 ?'dark':'success'}}">Rejected</td>
                    @endif
                    <td><a href="{{route('admin.memberjoin.edit',['id'=>$memberjoin->id])}}">Chose</a></td>
                </tr>
            </tbody>
            @endif
            @endif
            @endforeach
            <thead class="head1">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Mountain</th>
                    <th scope="col">MemberName</th>
                    <th scope="col">Status</th>
                    <th scope="col">Chose</th>
                </tr>
            </thead>
        </table>
        
@endif

@endsection