@extends('admin.master')

@section('module', 'Mountain')
@section('action', 'Create')

@push('handlejs')
<script src="{{asset('administrator/plugins/summernote/summernote-bs4.min.js')}}"></script>
    <script>
        $('#description').summernote()
    </script>
@endpush

@section('content')
<form method="post" action="{{ route('admin.mountain.store') }}" enctype="multipart/form-data">
    @csrf
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Mountain create</h3>

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
                            <label>Country</label>
                            <select class="form-control" name="country_id">
                              <option value="" {{old('country_id') == 0 ? 'selected' : ''}}>----- Root -----</option>
                              @foreach ($countries as $country)
                              <option value="{{$country->id}}" {{(old('country_id')==$country->id) ? 'selected' : ''}}>{{$country->name}}</option>
                              @endforeach  
                            </select>
                    </div>
                    <div class="form-group">
                        <label>Mountain name</label>
                        <input type="text" class="form-control" placeholder="Enter mountain name" name="name" value="{{old('name')}}">
                    </div>

                    <div class="form-group">
                        <label>Height</label>
                        <input type="text" class="form-control" placeholder="Enter mountain height" name="height"value="{{old('height')}}">
                    </div>
                    <div class="form-group">
                        <label>Content</label>
                        <textarea class="form-control" name="content">{{old('content')}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>description</label>
                        <textarea class="form-control" id="description" name="description">{{old('description')}}</textarea>
                    </div>
                    
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" class="form-control" name="image"/>
                    </div>
                </div>
                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Create</button>
                    </div>
    
    </div>
    <!-- /.card -->
</form>
@endsection