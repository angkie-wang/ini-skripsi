@extends('layout.template')
@section('title','Ulang Tambah')

@section('content')
    <form action="/donatur/store" method="post">
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
            <label>Tanggal Lahir</label>
            <input type="date" name="tgl_lahir" class="form-control" placeholder="Tanggal Lahir Donatur ..">

            @if($errors->has('tgl_lahir'))
                <div class="text-danger">
                    {{ $errors->first('tgl_lahir')}}
                </div>
            @endif
 
        </div>


		<div class="form-group">
            <label>Gender</label>
            <input type="text" name="gender" class="form-control" placeholder="Gender donatur ..">

            @if($errors->has('gender'))
                <div class="text-danger">
                    {{ $errors->first('gender')}}
                </div>
            @endif

        </div>

		<div class="form-group">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control" placeholder="Alamat donatur .."></textarea>

            @if($errors->has('alamat'))
                <div class="text-danger">
                    {{ $errors->first('alamat')}}
                </div>
            @endif 
		</div>
		
		
		<div class="form-group">
            <label>WhatsApp Number</label>
            <input type="number" name="WA" class="form-control" placeholder="Nomor Whatsapp Anda">

            @if($errors->has('WA'))
                <div class="text-danger">
                    {{ $errors->first('WA')}}
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
            <label>Nomor Rekening Donatur</label>
            <input type="number" name="rekening" class="form-control" placeholder="Nomor Rekening donatur ..">

            @if($errors->has('rekening'))
                <div class="text-danger">
                    {{ $errors->first('rekening')}}
                </div>
            @endif

        </div>
		<input type="submit" value="Simpan Data">
	</form>
@endsection