@extends('layout_admin.v_boiler')
 @section('title','Admin Pegawai')
 @section('page_title','Data Pegawai')
 @section('content')
 <!-- DataTables -->
 <link rel="stylesheet" href="{{ asset('layout') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{ asset('layout') }}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="{{ asset('layout') }}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

<div class="row">
    <div class="col-md-12">
    <div class="card card-outline card-primary">
              <div class="card-header">
                <h3 class="card-title">Daftar Pegawai</h3>

                <div class="card-tools">
                  <a href="{{ url('pegawai/form/add') }}" class="btn btn-success btn-sm">
                    <i class="fas fa-plus"></i> Tambah Baru
</a>
                </div>
                <!-- /.card-tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-striped table-bordered table-hover" id="example1">
                    <thead>
                        <tr class="text-center">
                            <th>No</th>
                            <th>Foto</th>
                            <th>Nama</th>
                            <th>NIP</th>
                            <th>Jabatan</th>
                            <th>Pangkat</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>
                                <a href="{{ url('pegawai/form/edit') }}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                <a onclick="hapus()" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>

                            </td>
                        </tr>
                    </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
    </div>
</div>
<!-- DataTables  & Plugins -->
<script src="{{ asset('layout') }}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{ asset('layout') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ asset('layout') }}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{ asset('layout') }}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{ asset('layout') }}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{ asset('layout') }}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{ asset('layout') }}/plugins/jszip/jszip.min.js"></script>
<script src="{{ asset('layout') }}/plugins/pdfmake/pdfmake.min.js"></script>
<script src="{{ asset('layout') }}/plugins/pdfmake/vfs_fonts.js"></script>
<script src="{{ asset('layout') }}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{ asset('layout') }}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{ asset('layout') }}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    
  });
  function hapus(id=''){
    if(confirm('Hapus ?')){
      window.location='{{ url("pegawai/hapus") }}'+'/'+id;
    }else{
      return false;
    }
  }
</script>
@endsection