@extends('admin.master')
@section('module' ,'Country')
@section('action','Create')  


@section('content')
    <form action="{{route('admin.addcountry.update',['id' => $id])}}" method="post" enctype="multipart/form-data">
    <div class="card">
        <div class="card-header">
          <h3 class="card-title">Country Update</h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
            </div>
        </div>
        <div class="card-body">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">CountrName</label>
                    <input type="text" class="form-control" placeholder="Enter country name" name="name" value="{{old('name',$country->name)}}">
                  </div>
                  <div class="form-group">
                    <label>Image current</label>
                    <img src="{{asset('uploads/'. $country->image)}}" width="300px">
                </div>
                  <div class="form-group">
                    <label>Image</label>
                    <input type="file" class="form-control" name="image"/>
                </div>
                </div>
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                  </div> 
        
      </div>
    </form>
@endsection