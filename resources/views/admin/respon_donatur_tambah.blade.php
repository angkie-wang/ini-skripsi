@extends('layout.template')
@section('title','Respon Tambah')

@section('content')
    <form action="/responstore" method="post">
		{{ csrf_field() }}

        <div class="form-group">
            <label>Id Donatur</label>
            <input type="text" name="iddonatur" class="form-control" placeholder="Id donatur ..">

            @if($errors->has('iddonatur'))
                <div class="text-danger">
                    {{ $errors->first('iddonatur')}}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" placeholder="Nama donatur ..">

            @if($errors->has('nama'))
                <div class="text-danger">
                    {{ $errors->first('nama')}}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label>Pertanyaan Satu</label>
            <input type="text" name="persatu" class="form-control" placeholder="Isi Jawaban Disini ..">

            @if($errors->has('persatu'))
                <div class="text-danger">
                    {{ $errors->first('persatu')}}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label>Pertanyaan Dua</label>
            <input type="text" name="perdua" class="form-control" placeholder="Isi Jawaban Disini ..">

            @if($errors->has('perdua'))
                <div class="text-danger">
                    {{ $errors->first('perdua')}}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label>Pesan</label>
            <input type="text" name="pesan" class="form-control" placeholder="Isi Pesan Disini ..">

            @if($errors->has('pesan'))
                <div class="text-danger">
                    {{ $errors->first('pesan')}}
                </div>
            @endif
        </div>

		<input type="submit" value="Simpan Data">
	</form>
@endsection