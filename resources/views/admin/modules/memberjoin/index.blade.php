@extends('admin.master')

@section('module', 'Memberjoins')
@section('action', 'List')

@push('css')
<link rel="stylesheet" href="{{asset('administrator/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('administrator/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('administrator/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
@endpush
@push('js')
<script src="{{asset('administrator/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('administrator/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('administrator/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('administrator/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('administrator/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('administrator/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('administrator/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('administrator/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('administrator/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('administrator/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('administrator/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('administrator/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
@endpush
@push('handlejs')
<script>
$(function () {
    $("#example1").DataTable({
    "responsive": true, "lengthChange": false, "autoWidth": false,
    "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
    function confirmDelete(){
        return confirm('do you want to delete it ?');
    }
</script>
@endpush
@section('content')
    <!-- Default box -->
    <div class="card">
        <div class="card-header">
          <h3 class="card-title">MemberJoinList</h3>
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
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>TourName</th>
                    <th>MemberName</th>
                    <th>Status</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            @foreach ($memberjoins as $memberjoin)
            <tbody>
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$memberjoin->join->name}}</td>
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
                    <td><a href="{{route('admin.memberjoin.edit',['id'=>$memberjoin->id])}}">Edit</a></td>
                    <td><a onclick="return confirmDelete ()" href="{{route('admin.memberjoin.destroy',['id'=>$memberjoin->id])}}">Delete</a></td>
                </tr>
            </tbody>
            @endforeach
            <tfoot>
                <tr>
                    <th>ID</th>
                    <th>TourName</th>
                    <th>MemberName</th>
                    <th><S></S>tatus</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </tfoot>
        </table>

    </div>
</div>
<!-- /.card -->


@endsection