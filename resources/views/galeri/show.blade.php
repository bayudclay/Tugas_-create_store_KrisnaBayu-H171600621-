@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Galeri</div>
                
                <div class="card-body">
                        <div class="form-group row">
                         <label  class="col-md-4 col-form-label text-md-right">ID</label>
                         <label  class="col-md-8 col-form-label text-md-left">{!! $Galeri->id !!}</label>
                    </div>

                    <div class="form-group row">
                         <label  class="col-md-4 col-form-label text-md-right">Judul</label>
                         <label  class="col-md-8 col-form-label text-md-left">{!! $Galeri->judul !!}</label>
                    </div>

                    <div class="form-group row">
                         <label  class="col-md-4 col-form-label text-md-right">Isi</label>
                         <label  class="col-md-8 col-form-label text-md-left">{!! $Galeri->isi !!}</label>
                    </div>

                    <div class="form-group row">
                         <label  class="col-md-4 col-form-label text-md-right">Kategori Artikel</label>
                         <label  class="col-md-8 col-form-label text-md-left">{!! $Galeri->kategori_galeri_id !!}</label>
                    </div>

                     <div class="form-group row">
                         <label  class="col-md-4 col-form-label text-md-right">User_id</label>
                         <label  class="col-md-8 col-form-label text-md-left">{!! $Galeri->users_id !!}
                         </label>
                    </div>

                    <div class="form-group row">
                         <label  class="col-md-4 col-form-label text-md-right">Create</label>
                         <label  class="col-md-8 col-form-label text-md-left">{!! $Galeri->created_at->format('d/m/Y H:i') !!}</label>
                    </div>

                    <div class="form-group row">
                         <label  class="col-md-4 col-form-label text-md-right">Update</label>
                         <label  class="col-md-8 col-form-label text-md-left">{!! $Galeri->updated_at->format('d/m/Y H:i') !!}</label>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <a href="{!! route('galeri.index')!!}" class="btn btn-primary">
                                Back
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>