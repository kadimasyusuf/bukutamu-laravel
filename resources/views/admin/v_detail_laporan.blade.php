@extends('layout_admin.v_boiler')
@section('title','Admin Laporan')
@section('page_title','Detail Laporan Kunjungan')
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h3 class="card-title">Detail Laporan Konsultasi</h3>

                <div class="card-tools">
                    <a href="{{ url('laporan') }}" class="btn btn-warning btn-sm">
                        <i class="fas fa-arrow-left"></i> Kembali
                    </a>
                </div>
                <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <form action="{{ url('laporan/balas') }}" method="post">
                    <div class="form-group row">
                        <label for="" class="col-md-3">Hari/Tanggal Konsultasi</label>
                        <label for="" class="col-md-3">: </label>
                    </div>
                    <div class="form-group row">
                        <label for="" class="col-md-3">Waktu</label>
                        <label for="" class="col-md-3">: </label>
                    </div>
                    <div class="form-row">
                        <label class="col-1">A.</label>
                        <label class="col-11">IDENTITAS PENGGUNA SPSE</label>

                    </div>
                    <div class="form-row">
                        <label class="offset-1 col-md-3">a. Nama</label>
                        <label class="col-md-8">:</label>
                    </div>
                    <div class="form-row">
                        <label class="offset-1 col-md-3">b. Nama Instansi/Perusahaan</label>
                        <label class="col-md-8">:</label>
                    </div>
                    <div class="form-row">
                        <label class="offset-1 col-md-3">c. Alamat</label>
                        <label class="col-md-8">:</label>
                    </div>
                    <div class="form-row">
                        <label class="offset-1 col-md-3">d. Nomor Telepon/HP</label>
                        <label class="col-md-8">:</label>
                    </div>
                    <div class="form-row">
                        <label class="offset-1 col-md-3">e. E-Mail</label>
                        <label class="col-md-8">:</label>
                    </div>
                    <hr>
                    <div class="form-row">
                        <label class="col-1">B.</label>
                        <label class="col-11">PERMASALAHAN</label>

                    </div>
                    <div class="form-group">
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Neque aliquam, dolore placeat aut a facere quaerat dignissimos quos eius possimus consequatur non? Commodi aliquid esse quaerat nesciunt voluptatem adipisci a!</p>
                    </div>
                    <hr>
                    <div class="form-row">
                        <label class="col-1">C.</label>
                        <label class="col-11">JAWABAN/SOLUSI PERMASALAHAN</label>

                    </div>

                    <div class="form-group">
                        <textarea name="solusi" class="form-control" rows="10"></textarea>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6 text-center">
                            <label for="">Pemberi Penjelasan</label>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <strong>Achmad Teguh</strong>
                        </div>
                        <div class="form-group col-md-6 text-center">
                            <label for="">Nama Pengunjung</label>
                            <textarea name="ttd" rows="2" class="form-control"></textarea>
                            <strong>Achmad Teguh</strong>
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