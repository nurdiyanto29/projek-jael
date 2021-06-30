<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response;

use App\Inventaris;
class InventarisController extends Controller
{
    public function index()
    {
   
        $inventariss = Inventaris::orderBy('id','asc')->paginate(10);
        return view('admin1/inventaris/index',compact('inventariss'));
    }
    public function create()
    {
        return view('admin1/inventaris/create');
    }
    public function store(Request $request)
    {
       
        $nm=$request->file;
        $imgName = $nm->getClientOriginalName();

        $upload = new Inventaris();
        $upload ->nama_mahasiswa = $request->nama_mahasiswa;
        $upload-> judul_skripsi = $request->judul_skripsi;
        $upload->thun_yudisium=$request->thun_yudisium;
        $upload->angkatan=$request->angkatan;
        $upload->kategori=$request->kategori;
        $upload-> file= $imgName;
        $request->file->storeAs('/public/storage', $imgName);
        $upload->save();
        return redirect()->route('inventaris.index')
                                ->with('success','Data berhasil ditambahkan');
            }
        
            
    public function edit($id)
    {
        $inventaris = Inventaris::find($id);
        return view('admin1.inventaris.edit', compact('inventaris'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_mahasiswa'=>'required',
            'judul_skripsi'=>'required',
            'thun_yudisium'=>'required',
            'angkatan' => 'required',
            'kategori' => 'required',
        ]);
        $nm=$request->file;
        $imgName = $nm->getClientOriginalName();
        $inventaris = Inventaris::find($id);
        $inventaris->nama_mahasiswa = $request->get('nama_mahasiswa');
        $inventaris->judul_skripsi = $request->get('judul_skripsi');
        $inventaris->thun_yudisium = $request->get('thun_yudisium');
        $inventaris->angkatan = $request->get('angkatan');
        $inventaris->kategori = $request->get('kategori');
        $inventaris-> file= $imgName;
        $request->file->storeAs('/public/storage', $imgName);
        $inventaris->save();
        return redirect()->route('inventaris.index')
                         ->with('success', 'Data berhasil diupdate');
    }
    public function destroy($id)
    {
        $inventaris =Inventaris::find($id);
        $inventaris->delete();
        return redirect()->route('inventaris.index')
                         ->with('success', 'Data berhasil dihapus');
    }
    public function download($file)
    {
        return Storage::download('/public/storage/'.$file);
    }


}
