@extends('layout_admin.v_boiler')
@section('title','Admin Pegawai')
@section('page_title',$aksi)
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h3 class="card-title">Form Pegawai</h3>

                <div class="card-tools">
                    <a href="{{ url('pegawai') }}" class="btn btn-warning btn-sm">
                        <i class="fas fa-arrow-left"></i> Kembali
                    </a>
                </div>
                <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="{{ $url_post }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="">Nama Pegawai</label>
                            <input type="text" class="form-control" name="nama_pegawai" required>
                        </div>
                        <div class="col-md-6">
                            <label for="">NIP Pegawai</label>
                            <input type="text" class="form-control" name="nip_pegawai">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="">Jabatan Pegawai</label>
                            <input type="text" class="form-control" name="jabatan_pegawai" required>
                        </div>
                        <div class="col-md-6">
                            <label for="">Pangkat Pegawai</label>
                            <input type="text" class="form-control" name="pangkat_pegawai">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="">Status</label>
                            <select name="status" class="custom-select" required>
                                <option>Aktif</option>
                                <option>Nonaktif</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="">Foto Pegawai</label>
                            <input type="file" name="foto_pegawai" class="form-control">
                        </div>

                    </div>
                    <div class="form-group">
                        <button class="btn btn-success">Simpan</button>
                    </div>

                </form>
            </div>
            <!-- /.card-body -->
        </div>
    </div>
</div>

@endsection