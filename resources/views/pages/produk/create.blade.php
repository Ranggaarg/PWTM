@extends('layouts.main')

@section('title', 'Home')

@section('content')

    <article class="bg-light">
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title text-center mb-4">TAMBAH PRODUK</h2>
                           
                             <form action="{{ route('produk.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nm_produk">Nama Produk</label>
            <input type="text" name="nm_produk" class="form-control" placeholder="masukan nama produk" required>
        </div>
        <div class="form-group">
            <label for="satuan">Satuan</label>
            <select name="satuan" id="satuan" class="form-control" required>
                <option value="">pilih satuan</option>
                <option value="kg">kg</option>
                <option value="liter">liter</option>
                <option value="buah">buah</option>
                <option value="box">box</option>
            </select>
        </div>
        <div class="form-group">
            <label for="harga">Harga Satuan</label>
            <input type="number" name="harga" class="form-control" placeholder="masukan harga satuan" required>
        </div>
        <div class="form-group">
            <label for="stock">Stock barang</label>
            <input type="number" name="stock" class="form-control" placeholder="Masukan stock barang" required>
        </div>
        <button class="btn btn-primary" type="submit"> save</button>
    </form>
</div>
@endsection