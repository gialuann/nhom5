@extends('admin.master')

@section('module', 'Tour')
@section('action', 'Create')

@section('content')
<form method="post" action="{{ route('admin.join.store') }}" enctype="multipart/form-data">
    @csrf
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">TourCreate</h3>

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
                    <div class="form-group">
                        <label>Creator</label>
                        <input type="text" class="form-control" placeholder="Enter mountain name" name="user_id" value="{{ Auth::user()->id}}">
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" placeholder="Enter mountain name" name="name" value="{{old('name')}}">
                    </div>
                    <div class="form-group">
                        <label>Infomation</label>
                        <textarea class="form-control" name="infomation">{{old('infomation')}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Mountain</label>
                        <select class="form-control" name="mountain_id">
                          <option value="0" {{old('mountain_id')==0?'selected' : ''}}>----- Root -----</option>
                          @foreach ($mountains as $mountain)
                          <option value="{{$mountain->id}}" {{old('mountain_id')==$mountain->id?'selected' : ''}}>{{$mountain->name}}</option>
                          @endforeach  
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Quantity</label>
                        <input type="text" class="form-control" placeholder="Enter mountain height" name="quantity"value="{{old('quantity')}}">
                    </div>
                    <div class="form-group">
                        <label>Date</label>
                        <input type="datetime-local" class="form-control" name="date"/>
                    </div>            
                </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Create</button>
        </div>
    </div>
    <!-- /.card -->
</form>
@endsection