@extends('layout.master')

@section('judul')
Halaman Jenis Vaksin
@endsection

<script src="{{asset('/DataTables/js/datatables.min.js')}}"></script>

<script>$(document).ready( function () {
  $('#myTable').DataTable();
} );</script>



@section('content')
<a href="/jenisvaksin/create" class="btn btn-primary my-3">Add</a>
<table class="table table-hover" id="myTable">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Jenis Vaksin</th>
        <th scope="col">Action</th>
        
      </tr>
    </thead>
    <tbody>
      @forelse($jenisvaksin as $key=>$val)
      <tr>
        <th scope="row">{{$key+1}}</th>
        <td>{{$val->nama_vaksin}}</td>
        <td>
          <form action="/jenisvaksin/{{$val->id}}" method ="POST">
            @csrf
            @method('delete')
            <a href="/jenisvaksin/{{$val->id}}/edit" class ="btn btn-warning btn-sm">Edit</a>
            <input type="submit" class="btn btn-danger btn-sm" value="Delete">
          </form>

        </td>
      </tr>
      @empty
      <tr>
        <td>Tidak Ada Data</td>
        
      </tr>
      @endforelse
    </tbody>
  </table>
  @endsection