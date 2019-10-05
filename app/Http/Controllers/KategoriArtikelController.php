<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriArtikel;

class KategoriArtikelController extends Controller
{
    public function index(){
    	
    	$listKategoriArtikel=KategoriArtikel::all(); 

    	return view ('kategori_artikel.index',compact('listKategoriArtikel'));
    	//return view ('kategori_artikel.index'->with('data',$listKategoriArtikel);
    }

    public function show($id) {

    	//$KategoriArtikel=KategoriArtikel::where('id',$id)->first();
    	$listKategoriArtikel=KategoriArtikel::find($id);

    	return view ('kategori_artikel.show', compact('listKategoriArtikel'));
    	
    }

    public function create(){

        return view ('kategori_artikel.create');
        
    }

    public function store(Request $request){
        $input= $request->all();

        KategoriArtikel::create($input);
        
        return redirect(route('kategori_artikel.index'));
    }
}
