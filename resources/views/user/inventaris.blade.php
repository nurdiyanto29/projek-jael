@extends('layout2/appp')
@section('title','inventaris')
@section('content')
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Inventaris</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <style>
* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

 .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.search-container button {
  float: right;
  padding: 6px;
  margin-top: -2px;
  margin-right: -95px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

 .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
.search-container {
    float: none;
  }
.search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
</style>
    </head>
    <body>
        <br><br><br><br>
      <div class="container">
          <div class="row">
              <div class="col-md-10">
                  <h3> Inventaris Skripsi HMJTI</h3>
              </div>
          </div> 
          <br>
          <div class="col-md-10">
            <a  class="btn btn-info "data-toggle="modal" data-target="#btn-cari" href="#"><i class="fas fa-filter fa-sm fa-fw mr-2 text-gray-400"></i>Filter Sesuai Kategori </a>
            <a  class="btn btn-warning "href="{{route('customer.inventaris')}}"><i class="fas fa-sync fa-sm fa-fw mr-2 text-gray-400"></i>Refresh </a>
            <div class="search-container">
                <form action="{{route('customer.inventaris')}}" method="GET">
                  <input type="text" placeholder="Search By Judul Skripsi" name="keyword"><button>search</button></i>
                </form>
              </div>        
        </div>
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
                      <a class="btn btn-sm btn-warning" href="{{ route('show', $inventaris->id)}}">Show</a>
                  
            
                  </td>
              </tr>
          @endforeach    
      </table>
  </div>
      {{-- {!! $inventariss->links() !!}  --}}
      </div>
      @include('sweetalert::alert')
      
      </body>
      
  </html>
  <div class="modal fade" id="btn-cari" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Filter data sesuai kategori</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
              </button>
          </div>
          <div class="modal-body">
          <form role="form" action="{{url('/inventaris/{cari}')}}"method="get">
              <div class="box-body">
                <label for=""><strong>Kategori</strong></label>
                  <div class="input-group mb-3">
                      <select class="custom-select" name="cari">
                        <option selected>Choose...</option>
                        <option value="Web">Web</option>
                        <option value="Android">Android</option>
                      </select>
                    </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>     
      </div>
  </div>
  </div>
 
  @endsection