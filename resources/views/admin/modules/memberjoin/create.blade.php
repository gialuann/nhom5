@extends('admin.master')

@section('module', 'Memberjoin')
@section('action', 'Create')

@section('content')
<form method="post" action="{{ route('admin.memberjoin.store') }}" enctype="multipart/form-data">
    @csrf
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">MemberJoinCreate</h3>

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
                        <label>Tour Name</label>
                        <select class="form-control" name="join_id">
                          <option value="0" {{old('join_id')==0?'selected' : ''}}>----- Root -----</option>
                          @foreach ($joins as $join)
                          <option value="{{$join->id}}" {{old('join_id')==$join->id?'selected' : ''}}>{{$join->name}}</option>
                          @endforeach  
                        </select>
                    </div>
                    <div class="form-group">
                        <label>User</label>
                        <select class="form-control" name="user_id">
                          <option value="0" {{old('user_id')==0?'selected' : ''}}>----- Root -----</option>
                          @foreach ($users as $user)
                          <option value="{{$user->id}}" {{old('user_id')==$user->id?'selected' : ''}}>{{$user->fullname}}</option>
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
</form>
@endsection