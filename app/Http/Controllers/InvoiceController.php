<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InvoiceController extends Controller
{
    public function index()
    {
        // mengambil data dari table donaturs
        $invoice = DB::table('invoice')->get();

        // mengirim data pegawai ke view v_donatur
        return view('admin.invoice',['invoice' => $invoice]);
    }

    public function tambah()
    {
        // memanggil view tambah
	    return view('admin.invoice_tambah');
    }
}
