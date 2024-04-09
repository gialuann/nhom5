@extends('admin.master')

@section('module', 'Memberjoin')
@section('action', 'Create')

@section('content')
<form method="post" action="{{ route('admin.memberjoin.update',['id'=>$id] ) }}" enctype="multipart/form-data">
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
                        <label>Mountain</label>
                        <select class="form-control" name="mountain_id">
                          <option value="0" {{old('mountain_id')==0?'selected' : ''}}>----- Root -----</option>
                          @foreach ($mountains as $mountain)
                          <option value="{{$mountain->id}}" {{old('mountain_id',$mountain->id)==$mountain->id?'selected' : ''}}>{{$mountain->name}}</option>
                          @endforeach  
                        </select>
                    </div>
                    <div class="form-group">
                        <label>User</label>
                        <select class="form-control" name="user_id">
                          <option value="0" {{old('user_id')==0?'selected' : ''}}>----- Root -----</option>
                          @foreach ($users as $user)
                          <option value="{{$user->id}}" {{old('user_id',$user->id)==$user->id?'selected' : ''}}>{{$user->fullname}}</option>
                          @endforeach  
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select class="form-control" name="status">
                            <option value="1" {{old('status',$memberjoins->status)==1?'selected':''}}>Waiting</option>
                            <option value="2" {{old('status',$memberjoins->status)==2?'selected':''}}>Validated</option>
                            <option value="3" {{old('status',$memberjoins->status)==3?'selected':''}}>Rejected</option>
                        </select>
                    </div>
                    
                </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">update</button>
        </div>
    </div>
    <!-- /.card -->
</form>
@endsection