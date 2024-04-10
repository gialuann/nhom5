@extends('client.master')
@section('title' ,'Contactus')
@section('content')
<section class="container">
    <div class="image-container">
        <img src="{{asset('blog/files/vietnam.jpg')}}" class="img1">
        <div class="overlay">Contact Us</div>
    </div>
    <div class="text">
            <table>
            <tr>
                <td class="td1"><img src="{{asset('blog/files/hinhnui2.jpg')}}" class="img2"></td>
                <td class="td2"><p >Please visit our Staff Guide profile page to read about the amazing consultants on the Madison Climbing team. We are a group of passionate climbers, guides and climbing enthusiasts. If you share our passion for climbing, exploring and reaching new heights, we invite you to contact us about one of our upcoming adventures!</p>
                    <p >Please call, email or use the contact form below to contact us. We are excited to hear from you!</p>
                       <table>
                    <tr>
                        <td class="td3">
                        <div>
                        <h3 style="color: #F3B63C">Madison Mountaineering</h3>
                        <p> P.O. Box 1045 <br>
                        Jackson, WY  83001
                        </p>
                        </div>
                    </td>
                    <td class="td4">
                    <div  >
                        <i class="fa-solid fa-phone"></i><a href="" style="color: #F3B63C"> +1 206-494-5799</a><br>
                        <i class="fa-solid fa-print"> </i><a href="" style="color: #F3B63C">+1 206-494-5799</a><br>
                        <i class="fa-solid fa-envelope"> </i><a href="" style="color: #F3B63C">+info@madisonmountaineering.com</a><br>
                        <i class="fa-solid fa-wifi"> </i><a href="" style="color: #F3B63C">+info@madisonmountaineering.com</a>
                    </div>
                </td>
                </tr>
            </table> 
                </td>
            </tr>
        </table>
            
            
    </div>
    {{-- <form method="post" action="{{ route('admin.memberjoin.store') }}" enctype="multipart/form-data">
        @csrf
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Sign up for the tour</h3>
            <div class="card-body">
                        <div class="form-group">
                            <label>Join-ID</label>
                            <select class="form-control" name="join_id">
                              <option value="0" {{old('join_id')==0?'selected' : ''}}>----- Root -----</option>
                              @foreach ($joins as $join)
                              <option value="{{$join->id}}" {{old('join_id')==$join->id?'selected' : ''}}>{{$join->name}}</option>
                              @endforeach  
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Validated</label>
                            <input type="datetime-local" class="form-control" name="validated"/>
                        </div>
                        <div class="form-group">
                            <label>Rejected</label>
                            <input type="datetime-local" class="form-control" name="rejected"/>
                        </div>
                        
                    </div>
    
                        
                
    
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
        </div>
        <!-- /.card -->
    </form> --}}
</section>
@endsection