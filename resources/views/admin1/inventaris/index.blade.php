@extends('layouts/admin')
@section('title','Inventaris Skripsi')
@section('container')
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Inventaris Skripsi HMJTI</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h3> Inventaris Skripsi HMJTI</h3>
            </div>
            <div class="col-sm-2">
                <a class="btn btn-success"  href="{{route('inventaris.create')}}"><i class="fas fa-plus fa-sm fa-fw mr-2 text-gray-400"></i>Tambah Skripsi </a>
            </div>
        </div> 
        <br>
<div class= "table-responsive">
    <table class="table table-striped">
      <thead>
        <tr>
            <th width="40px"><b>No.</b></th>
            <th width="180px">Nama Mahasiswa</th>
            <th width="180px">Judul Skripsi</th>
            <th width="180px">Tahun</th>
            <th width="180px">Angkatan</th>
            <th width="180px">Kategori</th>
            <th width="180px">Action</th>
        </tr>
      </thead>
    @php
      $i=1;
      $x=1;
  @endphp

        @foreach ($inventariss as $inventaris) 
            <tr>
                <td><b>{{$i++}}<b></td>
                <td>{{$inventaris->nama_mahasiswa}}</td>
                <td>{{$inventaris->judul_skripsi}}</td>
                <td>{{$inventaris->thun_yudisium}}</td>
                <td>{{$inventaris->angkatan}}</td>
                <td>{{$inventaris->kategori}}</td>
                <td>
                    <form action="{{ route('inventaris.destroy',$inventaris->id) }}" method="post">
                    <a class="btn btn-sm btn-warning" href="{{route('inventaris.edit', $inventaris->id)}}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>    
                </td>
            </tr>
        @endforeach    
    </table>
</div>
    {!! $inventariss->links() !!} 
    </div>
    @include('sweetalert::alert')
    </body>
</html>
@endsection