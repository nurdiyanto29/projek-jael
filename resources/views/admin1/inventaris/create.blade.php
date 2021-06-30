@extends('layouts/admin')
@section('title','Tambah')
@section('container')
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
    <div class="container">
        <div class=" form-row">
            <div class="col-lg-12">
                <h3>Tambah Skripsi</h3>
            </div>
        </div>
        <br>
        
        <form action="{{ route('inventaris.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                <label for="nama_mahasiswa" class="col-sm-2 col-form-label">Nama Mahasiswa</label>
                <div class="col-sm-10">
                    <input type="text" name="nama_mahasiswa" class="form-control" id="nama_mahasiswa">
                </div>
            </div>
            <div class="form-group row">
                <label for="judul_skripsi" class="col-sm-2 col-form-label">Judul Skripsi</label>
                <div class="col-sm-10">
                    <input type="text" name="judul_skripsi" class="form-control" id="judul_skripsi">
                </div>
            </div>
            <div class="form-group row">
                <label for="thun_yudisium" class="col-sm-2 col-form-label">Tahun Yudisium</label>
                <div class="col-sm-10">
                    <input type="number" min="2000" max="2099" step="1" value="2017" name="thun_yudisium" class="form-control" id="thun_yudisium">
                </div>
            </div>
            <div class="form-group row">
                <label for="angkatan" class="col-sm-2 col-form-label">Angkatan</label>
                <div class="col-sm-10">
                    <input type="number" min="2000" max="2099" step="1" value="2017" name="angkatan" class="form-control" id="angkatan" >
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
                <label for="file" class="col-sm-2 col-form-label">Upload File</label>
                <div class="col-sm-10">
                    <input type="file" name="file" class="form-control" id="file" >
                </div>
            </div>
             <hr>
                <div class="form-group">
                    <a href="" class="btn btn-success">Kembali</a>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
        </form>

    </div>
    </body>
</html>
    
@endsection

