@extends('layout.template')
@section('title','Invoice')

@section('content')
    <h1>ini invoice</h1>

    <div class="card-body">
        <a href="/invoicetambah" class="btn btn-primary">Tambah Baru</a>
    </div>

    <table class = "table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Id Periode</th>
                <th>Id Donatur</th>
                <th>Nama Periode</th>
                <th>Nominal Donasi</th>
                <th>Nama Donatur</th>
                <th>Nomor Rekening</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($invoice as $inv)
                <tr>
                    <td>{{ $inv->id }}</td>
                    <td>{{ $inv->id_periode }}</td>
                    <td>{{ $inv->id_donatur }}</td>
                    <td>{{ $inv->nama_periode }}</td>
                    <td>{{ $inv->nominal_donasi }}</td>
                    <td>{{ $inv->nama_donatur }}</td>
                    <td>{{ $inv->nomor_rekening }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection