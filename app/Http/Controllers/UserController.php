<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Inventaris;

class CustomersController extends Controller
{
    public function index()
    {
        return view('user.index');
    }
    public function about()
    {
        return view('user.about');
    }
    public function visi()
    {
        return view('user.visi');
    }
    public function dashboard()
    {
        return view('customer.dashboard');
    }
    public function inventaris(Request $request)
    {
        $keyword = $request->get('keyword');
        $inventariss = Inventaris::all();
        if($keyword){
            $inventariss = Inventaris::where("judul_skripsi","LIKE","%$keyword%")->get();
        }
      
        return view('user/inventaris',compact('inventariss'));
    }
        public function show($id)
    {
        $inventaris = Inventaris::find($id);
        return view('user.detail', compact('inventaris'));
    }
  

      
    public function cari(Request $request){ 
        $cari = $request->cari;
        $inventariss = Inventaris::where('kategori',$cari)->latest()->paginate(5);
        return view('user/inventaris',compact('inventariss'));
    }
  }
