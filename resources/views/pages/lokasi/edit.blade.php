@extends('layout.master')

@section('judul')
    Form Edit Data Lokasi Vaksin
@endsection

@section('content')
<form action="/lokasi/{{$lokasi->id}}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label>Lokasi Vaksin</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror " name="lokasi" value="{{$lokasi->lokasi}}">
    </div>

    @error('lokasi')
    <div class="alert alert-danger" role="alert">
        {{ ($message) }}
    </div>
    @enderror


    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
