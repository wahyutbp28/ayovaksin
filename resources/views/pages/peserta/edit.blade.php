@extends('layout.master')

@section('judul')
    Form Edit Data Peserta
@endsection

@section('content')
<form action="/peserta/{{$peserta->nik}}" method="POST">
    @csrf
    @method('PUT')


    <div class="form-group">
        <label>Nomor Induk Kependudukan</label>
        <input type="number" class="form-control @error('title') is-invalid @enderror " name="nik" value="{{$peserta->nik}}">
    </div>

    @error('nik')
    <div class="alert alert-danger" role="alert">
        {{ ($message) }}
    </div>
    @enderror


    

    <div class="form-group">
        <label>Nama Peserta</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror " name="nama" value="{{$peserta->nama}}">
    </div>

    @error('nama')
    <div class="alert alert-danger" role="alert">
        {{ ($message) }}
    </div>
    @enderror



    <div class="form-group">
        <label>Jenis Kelamin</label><br>

        <input type="radio" name="jk" value="Laki-Laki" {{$peserta->jk == 'Laki-Laki' ? 'checked' : ''}}> Laki-Laki<br>
        <input type="radio" name="jk" value="Perempuan" {{$peserta->jk == 'Perempuan' ? 'checked' : ''}}> Perempuan
        <!--<select name="jk" class="form-control col-3 ">
            <option value="">--Pilih Jenis Kelamin--</option>
            <option value="Laki-Laki">Laki-Laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>-->
    </div>

    @error('jk')
    <div class="alert alert-danger" role="alert">
        {{ ($message) }}
    </div>
    @enderror

    <div class="form-group">
        <label>Tempat Lahir</label>
        <input type="text" class="form-control col-2 @error('title') is-invalid @enderror " name="tempat_lahir" value="{{$peserta->tempat_lahir}}">
    </div>

    @error('tempat_lahir')
    <div class="alert alert-danger" role="alert">
        {{ ($message) }}
    </div>
    @enderror

    <div class="form-group">
        <label>Tanggal Lahir</label>
        <input type="date" class="form-control col-2 @error('title') is-invalid @enderror " name="tgl_lahir" value="{{$peserta->tgl_lahir}}">
    </div>

    @error('tgl_lahir')
    <div class="alert alert-danger" role="alert">
        {{ ($message) }}
    </div>
    @enderror

    <div class="form-group">
        <label>Alamat Lengkap</label>
        <textarea name="alamat" class="form-control @error('title') is-invalid @enderror " >{{$peserta->alamat}}</textarea>
    </div>


    @error('alamat')
    <div class="alert alert-danger" role="alert">
        {{ ($message) }}
    </div>
    @enderror


    <div class="form-group">
        <label>Nomor Telepon</label>
        <input type="number" class="form-control @error('title') is-invalid @enderror " name="no_hp" value="{{$peserta->no_hp}}">
    </div>

    @error('no_hp')
    <div class="alert alert-danger" role="alert">
        {{ ($message) }}
    </div>
    @enderror













    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
