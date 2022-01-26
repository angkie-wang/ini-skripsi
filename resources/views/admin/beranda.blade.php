@extends('layout.template')
@section('title','Beranda')

@section('content')
    <h1>CATATAN</h1>

    <br>
    
    <div>
        <h2>2022 - 01 - 20</h2>
        <h5>* tambah & edit data donatur & respon jadi satu</h5>
        <br>
        <h5>* tiap menu hanya ada tombol untuk delete</h5>
    </div>

    <br>

    <div>
        <h2>2022 - 01 - 27</h2>
        <h5>* pada view(respon_donatur_tambah)</h5>
        <h5>  = [id_donatur] tidak terdeteksi otomatis</h5>
        <br>
        <h5>* pada view(donatur)</h5>
        <h5>  = tipe data boolean masih tampilan angka</h5>
    </div>

@endsection