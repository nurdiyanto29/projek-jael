
 @extends('layout2/app')
 @section('title','Riayah')
 @section('content')
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h3> Data Uang Masuk riayah</h3>
            </div>
        </div> 
        <br>
    <table class="table table-striped">
      <thead>
        <tr>
            <th width="40px"><b>No.</b></th>
            <th width="180px">Tanggal</th>
            <th width="180px">Kegiatan</th>
            <th width="100px">Sumber Pemasukan</th>
            <th width="100px">Jumlah Pemasukan</th>
        </tr>
      </thead>
      @php
          $i=1;
          $x=1;
      @endphp

        @foreach ($riayahs as $riayah) 
            <tr>
                <td><b>{{$i++}}<b></td>
                <td>{{$riayah->tgl}}</td>
                <td>{{$riayah->namaKegiatan}}</td>
                <td>{{$riayah->sumberPemasukan}}</td>
                <td>{{"Rp.".number_format($riayah->jumlahPemasukan,2,',','.')}}</td>
            </tr>
        @endforeach
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td>Sub Total </td>
            <td>{{"Rp.".number_format($total,2,',','.')}}</td>
        </tr>     
    </table>
    {!! $riayahs->links() !!}

    {{-- Pengeluaran --}}

    <div class="row">
        <div class="col-md-10">
            <h3> Data Uang Keluar riayah</h3>
        </div>
    </div> 
    <br>

    <table class="table table-striped">
        <thead>
          <tr>
              <th width="40px"><b>No.</b></th>
              <th width="180px">Tanggal</th>
              <th width="180px">Kegiatan</th>
              <th width="100px">Sumber Pengeluaran</th>
              <th width="100px">Jumlah Pengeluaran</th>
          </tr>
        </thead>
     @foreach ($riayahkeluars as $riayahkeluar) 
        <tr>
            <td><b>{{$x++}}<b></td>
            <td>{{$riayahkeluar->tgl}}</td>
            <td>{{$riayahkeluar->namaKegiatan}}</td>
            <td>{{$riayahkeluar->sumberPengeluaran}}</td>
            <td>{{"Rp.".number_format($riayahkeluar->jumlahPengeluaran,2,',','.')}}</td>
        </tr>
    @endforeach
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td>Sub Total </td>
        <td>{{"Rp.".number_format($totalkeluar,2,',','.')}}</td>
    </tr>   
    
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td>Total Uang Riayah </td>
        <td>{{"Rp.".number_format($total-$totalkeluar,2,',','.')}}</td>
    </tr>
    </table>
    {!! $riayahkeluars->links() !!}
    </div>
    </body>
</html>

@endsection