<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UlangController extends Controller
{
    public function index()
    {
        // mengambil data dari table donaturs
        $ulang_donasi = DB::table('ulang_donasi')->get();

        // mengirim data pegawai ke view v_donatur
        return view('admin.ulang_donasi',['ulang_donasi' => $ulang_donasi]);
    }

    public function tambah()
    {
        // memanggil view tambah
	    return view('admin.ulang_donasi_tambah');
    }
}
