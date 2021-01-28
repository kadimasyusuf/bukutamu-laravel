@extends('layout_admin.v_boiler')
@section('title','Admin Pengunjung')
@section('page_title',$aksi)
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h3 class="card-title">Form Pengunjung</h3>

                <div class="card-tools">
                    <a href="{{ url('pengunjung') }}" class="btn btn-warning btn-sm">
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
                            <label for="">Nama</label>
                            <input type="text" class="form-control" name="nama_pengunjung" required>
                        </div>
                        <div class="col-md-6">
                            <label for="">Nama Instansi</label>
                            <input type="text" class="form-control" name="instansi_pengunjung" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="">Alamat</label>
                            <textarea name="alamat" class="form-control" required></textarea>
                        </div>
                        <div class="col-md-6">
                            <label for="">No. Telepon/HP</label>
                            <input type="text" class="form-control" name="notelp">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <label for="">Email</label>
                            <input type="email" class="form-control" name="email">
                            
                        </div>
                        <div class="col-md-6">
                            <label for="">Instansi / Perusahaan ?</label>
                            <select name="kategori_pengunjung" class="custom-select" required>
                                <option value="">Pilih</option>
                                <option>Perusahaan</option>
                                <option>Perangkat Daerah</option>
                            </select>
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