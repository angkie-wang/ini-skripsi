@extends('layout.template')
@section('title','Respon')

@section('content')
    <h1>ini respon donatur</h1>

    <div class="card-body">
        <a href="/respontambah" class="btn btn-primary">Tambah Baru</a>
    </div>

    <table class = "table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Id Donatur</th>
                <th>Nama</th>
                <th>Pertanyaan 1</th>
                <th>Pertanyaan 2</th>
                <th>Pesan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($respon_donatur as $r)
                <tr>
                    <td>{{ $r->id }}</td>
                    <td>{{ $r->id_donatur }}</td>
                    <td>{{ $r->nama_donatur }}</td>
                    <td>{{ $r->pertanyaan_satu }}</td>
                    <td>{{ $r->pertanyaan_dua }}</td>
                    <td>{{ $r->pesan }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection