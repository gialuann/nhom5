@extends('admin.master')

@section('module', 'joins')
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
          <h3 class="card-title">Tourlist</h3>
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
                    <th>Mountain</th>
                    <th>Name</th>
                    <th>Infomation</th>
                    <th>Quantity</th>
                    <th>Date</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    <th>List</th>
                    
                </tr>
            </thead>
            @foreach ($joins as $join)
            <tbody>
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$join->mountain->name}}</td>
                    <td>{{$join->name}}</td>
                    <td>{{$join->infomation}}</td>
                    <td>{{$join->quantity}}</td>
                    <td>{{date('d/m/Y - H:m:i', strtotime($join->date))}}</td>
                    <td><a href="{{route('admin.join.edit',['id'=>$join->id])}}">Edit</a></td>
                    <td><a onclick="return confirmDelete ()" href="{{route('admin.join.destroy',['id'=>$join->id])}}">Delete</a></td>
                    <td><button><a href="{{route('admin.memberjoin.index')}}" >Infomation</a></button></td>
                </tr>
            </tbody>
            @endforeach
            <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Mountain</th>
                    <th>Name</th>
                    <th>Infomation</th>
                    <th>Quantity</th>
                    <th>Date</th>
                    <th>Edit</th>
                    <th>Delete</th>
                    <th>List</th>
                </tr>
            </tfoot>
            
        </table>
    </div>
</div>
<!-- /.card -->


@endsection