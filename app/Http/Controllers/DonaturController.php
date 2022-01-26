<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

// Models
use App\Models\Donatur;

class DonaturController extends Controller
{
    public function index()
    {
        // mengambil data dari table donaturs
        $donatur = DB::table('donatur')->get();

        // mengirim data pegawai ke view v_donatur
        return view('admin.donatur',['donatur' => $donatur]);
    }
    
    public function tambah()
    {
        // memanggil view tambah
	    return view('admin.donatur_tambah');
    }

    public function store(Request $request)
    {
        DB::table('donatur')->insert([
            'nama_donatur'=>$request->nama,
            'email_donatur'=>$request->email,
            'anonim'=>$request->anonim,
            'alumni'=>$request->alumni,
            'fakultas'=>$request->fakultas,
            'usia'=>$request->usia,
            'nomor_wa'=>$request->nomor,
            'instagram'=>$request->instagram
        ]);

        return redirect('/donatur');
    }


}
