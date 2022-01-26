@extends('layout.template')
@section('title','Donatur Tambah')

@section('content')
    <form action="/donaturstore" method="post">
		{{ csrf_field() }}

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
            <label>Email </label>
            <input type="email" name="email" class="form-control" placeholder="Email donatur ..">

            @if($errors->has('email'))
                <div class="text-danger">
                    {{ $errors->first('email')}}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label>Anonim </label>
            <input type="text" name="anonim" class="form-control" placeholder="Anonim ..">

            @if($errors->has('anonim'))
                <div class="text-danger">
                    {{ $errors->first('anonim')}}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label>Alumni </label>
            <input type="text" name="alumni" class="form-control" placeholder="Alumni ..">

            @if($errors->has('alumni'))
                <div class="text-danger">
                    {{ $errors->first('alumni')}}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label>Fakultas </label>
            <input type="text" name="fakultas" class="form-control" placeholder="Fakultas ..">

            @if($errors->has('fakultas'))
                <div class="text-danger">
                    {{ $errors->first('fakultas')}}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label>Usia </label>
            <input type="number" name="usia" class="form-control" placeholder="Usia ..">

            @if($errors->has('usia'))
                <div class="text-danger">
                    {{ $errors->first('usia')}}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label>Nomor WhatsApp</label>
            <input type="number" name="nomor" class="form-control" placeholder="Nomor Whatsapp Anda">

            @if($errors->has('nomor'))
                <div class="text-danger">
                    {{ $errors->first('nomor')}}
                </div>
            @endif
        </div>

        <div class="form-group">
            <label>Instagram </label>
            <input type="text" name="instagram" class="form-control" placeholder="Instagram ..">

            @if($errors->has('instagram'))
                <div class="text-danger">
                    {{ $errors->first('instagram')}}
                </div>
            @endif
        </div>

		<input type="submit" value="Simpan Data">
	</form>
@endsection