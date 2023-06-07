@extends('layout.master')

@section('judul')
    Form Tambah Data Peserta
@endsection

@section('content')
<form action="/peserta" method="POST">
    @csrf


    <div class="form-group">
        <label>Nomor Induk Kependudukan</label>
        <input type="number" class="form-control @error('title') is-invalid @enderror " name="nik">
    </div>

    @error('nik')
    <div class="alert alert-danger" role="alert">
        {{ ($message) }}
    </div>
    @enderror


    

    <div class="form-group">
        <label>Nama Peserta</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror " name="nama">
    </div>

    @error('nama')
    <div class="alert alert-danger" role="alert">
        {{ ($message) }}
    </div>
    @enderror



    <div class="form-group">
        <label>Jenis Kelamin</label><br>
        <input type="radio" name="jk" value="Laki-Laki"> Laki-Laki <br>
        <input type="radio" name="jk" value="Perempuan"> Perempuan
        
        <!--<select name="jk" class="form-control col-3 ">-->
           <!-- <option value="">--Pilih Jenis Kelamin--</option>-->
            <!--<option value="Laki-Laki">Laki-Laki</option>-->
            <!--<option value="Perempuan">Perempuan</option>-->
        <!--</select>-->
    </div>

    @error('jk')
    <div class="alert alert-danger" role="alert">
        {{ ($message) }}
    </div>
    @enderror

    <div class="form-group">
        <label>Tempat Lahir</label>
        <input type="text" class="form-control col-2 @error('title') is-invalid @enderror " name="tempat_lahir">
    </div>

    @error('tempat_lahir')
    <div class="alert alert-danger" role="alert">
        {{ ($message) }}
    </div>
    @enderror

    <div class="form-group">
        <label>Tanggal Lahir</label>
        <input type="date" class="form-control col-2 @error('title') is-invalid @enderror " name="tgl_lahir">
    </div>

    @error('tgl_lahir')
    <div class="alert alert-danger" role="alert">
        {{ ($message) }}
    </div>
    @enderror

    <div class="form-group">
        <label>Alamat Lengkap</label>
        <textarea name="alamat" class="form-control @error('title') is-invalid @enderror " id=""></textarea>
    </div>


    @error('alamat')
    <div class="alert alert-danger" role="alert">
        {{ ($message) }}
    </div>
    @enderror


    <div class="form-group">
        <label>Nomor Telepon</label>
        <input type="number" class="form-control @error('title') is-invalid @enderror " name="no_hp">
    </div>

    @error('no_hp')
    <div class="alert alert-danger" role="alert">
        {{ ($message) }}
    </div>
    @enderror




























    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
