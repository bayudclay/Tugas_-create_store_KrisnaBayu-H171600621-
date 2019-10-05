@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Kategori Artikel</div>
                <div class="card-body">
                    
                <table class="table table-bordered">
                    <thead class="bg-success">
                        <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nama</th>
                        <th scope="col">User_id</th>
                        <th scope="col">Create</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach( $listKategoriArtikel as $item)
                        <tr>
                        <td>{!! $item->id !!}</td>
                        <td>{!! $item->nama !!}</td>
                        <td>{!! $item->users_id !!}</td>
                        <td>{!! $item->created_at->format('d/m/Y H:i:s')!!}</td>
                        <td>
                         <a href="{!! route('kategori_artikel.show',[$item->id]) !!}">Detail</a><br></br>
						 <a href="{!! route('kategori_artikel.show',[$item->id]) !!}">Hapus</a>
                        </td>
                        </tr>
                       @endforeach
                    </tbody>
                </table>
                    <td>
                        <a href="{!! route('kategori_artikel.create') !!}" class="btn btn-primary">Tambah Data</a>
                    </td>
            </div>
        </div>
    </div>
</div>
</div>
@endsection