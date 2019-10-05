<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Galeri;
use App\KategoriGaleri;

class GaleriController extends Controller
{
    public function index(){
    	
    	$listGaleri=Galeri::all(); 

    	return view ('galeri.index',compact('listGaleri'));
    	
    }

    public function show($id) {

    	$Galeri=Galeri::find($id);

    	return view ('Galeri.show', compact('Galeri'));
    	
    }

    public function create(){
    	$kategoriGaleri=KategoriGaleri::pluck('nama','id');

        return view ('galeri.create', compact('kategoriGaleri'));
        
    }

    public function store(Request $request){
    	$input=$request->all();

    	Galeri::create($input);

    	return redirect(route('galeri.index'));
    }
}
