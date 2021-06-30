@extends('layouts/admin')

@section('title','edit')
@section('container')

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Edit</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
    <div class="container">
        <div class=" form-row">
            <div class="col-lg-12">
                
                <h3>Edit Data</h3>
            </div>
        </div>
        <br>

        @if ($errors->all())
            <div class="alert alert-danger">
                <strong>Whoops! </strong> Ada permasalahan inputanmu.<br>
                <ul>
                    @foreach ($errors as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <form action="{{route('inventaris.update',$inventaris->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group row">
                <label for="nama_mahasiswa" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" name="nama_mahasiswa" class="form-control" id="nama_mahasiswa" value="{{$inventaris->nama_mahasiswa}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="judul_skripsi" class="col-sm-2 col-form-label">Judul Skripsi</label>
                <div class="col-sm-10">
                    <input type="text" name="judul_skripsi" class="form-control" id="judul_skripsi" value="{{$inventaris->judul_skripsi}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="thun_yudisium" class="col-sm-2 col-form-label">Tahun Yudisium</label>
                <div class="col-sm-10">
                    <input type="text" name="thun_yudisium" class="form-control" value="{{$inventaris->thun_yudisium}}" id="thun_yudisium">
                </div>
            </div>
            <div class="form-group row">
                <label for="angkatan" class="col-sm-2 col-form-label">Angkatan</label>
                <div class="col-sm-10">
                    <input type="text" name="angkatan" class="form-control" value="{{$inventaris->angkatan}}" id="angkatan">
                </div>
            </div>
            <div class="form-group row">
                <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                <div class="col-sm-10">
                    <select class="custom-select" name="kategori">
                      <option selected>Choose...</option>
                      <option value="Web">Web</option>
                      <option value="Android">Android</option>
                    </select>
                  </div>
            </div>
            <div class="form-group row">
                <label for="file" class="col-sm-2 col-form-label">File</label>
                <div class="col-sm-10">
                    <input type="file" name="file" class="form-control" value="{{$inventaris->file}}" id="file">
                </div>
            </div>
             <hr>
                <div class="form-group">
                    <a href="{{route('inventaris.index')}}" class="btn btn-success">Kembali</a>
                    <button type="submit" class="btn btn-primary">Edit</button>
                </div>
        </form>
    </div>
    </body>
</html>
    
@endsection