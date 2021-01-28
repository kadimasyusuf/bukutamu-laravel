<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index()
    {
    	return view('admin.v_laporan');
    }
    public function hapus($id='')
    {
        
    }
    public function detail($id='')
    {
    	return view('admin.v_detail_laporan');
        
    }
}
