@extends('layout.template')
@section('title','Periode')

@section('content')
    <h1>ini periode</h1>

    <div class="card-body">
        <a href="/periodetambah" class="btn btn-primary">Tambah Baru</a>
    </div>

    <table class = "table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Periode</th>
                <th>Nominal Donasi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($periode as $per)
                <tr>
                    <td>{{ $per->id }}</td>
                    <td>{{ $per->nama_periode }}</td>
                    <td>{{ $per->nominal_donasi }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection