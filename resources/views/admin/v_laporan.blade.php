@extends('layout_admin.v_boiler')
@section('title','Admin Laporan')
@section('page_title','Data Laporan Kunjungan')
@section('content')
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('layout') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="{{ asset('layout') }}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="{{ asset('layout') }}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h3 class="card-title">Daftar Laporan Konsultasi</h3>


                <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <h5>Filter :</h5>
                <form>
                    <div class="form-row">
                        <div class="form-group col-md-2">
                            <label for="">Kategori Pengunjung</label>
                            <select name="kategori" class="custom-select">
                                <option>Semua</option>
                                <option>Perusahaan</option>
                                <option>Perangkat Daerah</option>

                            </select>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="">Penerima</label>
                            <select name="penerima" class="custom-select">
                                <option>Semua</option>


                            </select>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="">Dari</label>
                            <input type="text" class="form-control" name="dari">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="">Sampai</label>
                            <input type="text" class="form-control" name="sampai">
                        </div>
                        <div class="form-group col-md-2">
                            <br>
                            <button class="btn btn-primary mt-md-2"><i class="fas fa-search"></i> Cari</button>
                        </div>
                    </div>
                </form>
                <table class="table table-striped table-bordered table-hover" id="example1">
                    <thead>
                        <tr class="text-center">
                            <th>No</th>
                            <th>Nama</th>
                            <th>Nama Instansi/Perusahaan</th>
                            <th>Permasalahan</th>
                            <th>Penerima</th>
                            <th>Waktu</th>
                            <th>Status</th>
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
                            <td></td>
                            <td>
                                <a href="{{ url('laporan/detail') }}" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i></a>
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
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

    });

    function hapus(id = '') {
        if (confirm('Hapus ?')) {
            window.location = '{{ url("laporan/hapus") }}' + '/' + id;
        } else {
            return false;
        }
    }
</script>
@endsection