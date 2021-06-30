<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Idarah;
use App\Idarahkeluar;
use App\Imarah;
use App\Imarahkeluar;
use App\Inventaris;
use App\Riayah;
use App\Riayahkeluar;
use App\User;


class AdminController extends Controller
{

    public function home()
    {
        $jumlah_user = User::all()->count();
        $t_skripsi = Inventaris::all()->count();
        return view('admin1/home')
        
        ->with('t_skripsi',$t_skripsi)
        ->with('jumlah_user',$jumlah_user);
    }
    
}
