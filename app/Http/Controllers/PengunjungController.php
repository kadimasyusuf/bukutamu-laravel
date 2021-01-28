<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengunjungController extends Controller
{
    public function index()
    {
    	return view('admin.v_pengunjung');
    }
    public function form($aksi='add')
    {
        if($aksi == 'add'){
            $data['aksi'] = 'Tambah Data Pengunjung';
            $data['url_post'] = url('pengunjung/act-add');
        }elseif($aksi == 'edit'){
            $data['aksi'] = 'Edit Data Pengunjung';
            $data['url_post'] = url('pengunjung/act-update');
        }else{
            abort(403, 'Unauthorized action.');
        }
        return view('admin.v_form_pengunjung',$data);
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
