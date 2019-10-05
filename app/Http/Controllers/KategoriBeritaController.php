<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriBerita;

class KategoriBeritaController extends Controller
{
    public function index(){
    	
    	$listKategoriBerita=KategoriBerita::all(); 

    	return view ('kategori_berita.index',compact('listKategoriBerita'));
    	//return view ('kategori_artikel.index'->with('data',$listKategoriArtikel);
    }

    public function show($id) {

    	//$KategoriArtikel=KategoriArtikel::where('id',$id)->first();
    	$listKategoriBerita=KategoriBerita::find($id);

    	return view ('kategori_berita.show', compact('listKategoriBerita'));
    	
    }

    public function create(){

        return view ('kategori_berita.create');
        
    }

    public function store(Request $request){
        $input= $request->all();

        KategoriBerita::create($input);
        
        return redirect(route('kategori_berita.index'));
    }
}
