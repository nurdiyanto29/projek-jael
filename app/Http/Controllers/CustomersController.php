<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Inventaris;

class CustomersController extends Controller
{
    public function index()
    {
        return view('customer.index');
    }
    public function about()
    {
        return view('customer.about');
    }
    public function visi()
    {
        return view('customer.visi');
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
      
        return view('customer/inventaris',compact('inventariss'));
    }
        public function show($id)
    {
        $inventaris = Inventaris::find($id);
        return view('customer.detail', compact('inventaris'));
    }
  

      
    public function cari(Request $request){ 
        $cari = $request->cari;
        $inventariss = Inventaris::where('kategori',$cari)->latest()->paginate(5);
        return view('customer/inventaris',compact('inventariss'));
    }
  }
