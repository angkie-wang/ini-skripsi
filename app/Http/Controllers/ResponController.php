<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

// Models
use App\Models\Respon;


class ResponController extends Controller
{
    public function index()
    {
        // mengambil data dari table donaturs
        $respon_donatur = DB::table('respon_donatur')->get();

        // mengirim data pegawai ke view v_donatur
        return view('admin.respon_donatur',['respon_donatur' => $respon_donatur]);
    }
    
    public function tambah()
    {
        // memanggil view tambah
	    return view('admin.respon_donatur_tambah');
    }

    public function store(Request $request)
    {
        DB::table('respon_donatur')->insert([
            'id_donatur'=>$request->iddonatur,
            'nama_donatur'=>$request->nama,
            'pertanyaan_satu'=>$request->persatu,
            'pertanyaan_dua'=>$request->perdua,
            'pesan'=>$request->pesan
        ]);

        return redirect('/respon');
    }
}
