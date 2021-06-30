@extends('layouts/admin')
@section('title','USER')
@section('container')
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>USER</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h3>USER</h3>
            </div>
            <div class="col-sm-2">
                <a class="btn btn-success" href="{{ route('register')}}"> +Tambah User </a>
            </div>
        </div> 
        <br>

    <table class="table table-striped">
      <thead>
        <tr>
            <th width="40px"><b>No.</b></th>
            <th width="180px">Nama</th>
            <th width="180px">Username</th>
            <th width="180px">Role</th>
            <th width="210px">Action</th>
        </tr>
      </thead>
    @php
      $i=1;
      $x=1;
  @endphp

        @foreach ($users as $user) 
            <tr>
                <td><b>{{$i++}}<b></td>
                <td>{{$user->name}}</td>
                <td>{{$user->username}}</td>
                <td>{{$user->roles}}</td>
                <td>
                    <form action="{{ route('anggota.destroy',$user->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>    
                </td>
            </tr>
        @endforeach    
    </table>
    </div>
    @include('sweetalert::alert')
    </body>
</html>

@endsection