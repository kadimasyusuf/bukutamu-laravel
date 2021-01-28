<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index()
    {
    	return view('admin.v_pegawai');
    }
    public function form($aksi='add')
    {
        if($aksi == 'add'){
            $data['aksi'] = 'Tambah Data Pegawai';
            $data['url_post'] = url('pegawai/act-add');
        }elseif($aksi == 'edit'){
            $data['aksi'] = 'Edit Data Pegawai';
            $data['url_post'] = url('pegawai/act-update');
        }else{
            abort(403, 'Unauthorized action.');
        }
        return view('admin.v_form_pegawai',$data);
    }
    public function act_add()
    {
        
    }
    public function act_update()
    {
        
    }
    public function hapus($id='')
    {
        
    }
}
