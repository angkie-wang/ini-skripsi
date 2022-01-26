@extends('layout.template')
@section('title','Ulang')

@section('content')
    <h1>ini ulang donasi</h1>

    <div class="card-body">
        <a href="/ulangtambah" class="btn btn-primary">Tambah Baru</a>
    </div>

    <table class = "table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Id Periode</th>
                <th>Id Donatur</th>
                <th>Nama Donatur</th>
                <th>Nama Periode</th>
                <th>Keterangan</th>
                <th>Nominal Donasi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ulang_donasi as $ula)
                <tr>
                    <td>{{ $ula->id }}</td>
                    <td>{{ $ula->id_periode }}</td>
                    <td>{{ $ula->id_donatur }}</td>
                    <td>{{ $ula->nama_donatur }}</td>
                    <td>{{ $ula->nama_periode }}</td>
                    <td>{{ $ula->keterangan_donatur }}</td>
                    <td>{{ $ula->nominal_donasi }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection