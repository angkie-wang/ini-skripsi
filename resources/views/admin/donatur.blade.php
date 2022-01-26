@extends('layout.template')
@section('title','Donatur')

@section('content')
    
    <div class="card-body">
        <a href="/donaturtambah" class="btn btn-primary">Tambah Baru</a>
    </div> 

    <!-- Body -->
    <table class = "table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Anonim</th>
                <th>Alumni</th>
                <th>Fakultas</th>
                <th>Usia</th>
                <th>Nomor WA</th>
                <th>Instagram</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($donatur as $d)
                <tr>
                    <td>{{ $d->id }}</td>
                    <td>{{ $d->nama_donatur }}</td>
                    <td>{{ $d->email_donatur }}</td>
                    <td>{{ $d->anonim }}</td>
                    <td>{{ $d->alumni }}</td>
                    <td>{{ $d->fakultas }}</td>
                    <td>{{ $d->usia }}</td>
                    <td>{{ $d->nomor_wa }}</td>
                    <td>{{ $d->instagram }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection