<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PeriodeController extends Controller
{
    public function index()
    {
        // mengambil data dari table donaturs
        $periode = DB::table('periode')->get();

        // mengirim data pegawai ke view v_donatur
        return view('admin.periode',['periode' => $periode]);
    }

    public function tambah()
    {
        // memanggil view tambah
	    return view('admin.periode_tambah');
    }
}
