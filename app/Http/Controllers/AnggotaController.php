<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
  
    public function index()
    {
        
        $users = User::orderBy('id','asc')->paginate(10);
        return view('admin1/anggota/index',compact('users'));
    }

    public function destroy($id)
    {
        $users =User::find($id);
        $users->delete();
        return redirect()->route('anggota.index')
                         ->with('success', 'Data berhasil dihapus');
    }
}
