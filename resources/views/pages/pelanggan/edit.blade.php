@extends('layouts.main')

@section('title', 'Home')

@section('content')
    <article class="bg-light">
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title text-center mb-4">EDIT PELANGGAN</h2>
                           <form action="{{ route('pelanggan.update', $item->id) }}" method="POST">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="nm_pelanggan">Nama Pelanggan</label>
            <input type="text" name="nm_pelanggan" class="form-control" placeholder="masukan nama pelanggan" value="{{ $item->nm_pelanggan }}" required>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea class="form-control" name="alamat" id="alamat" cols="30" rows="10">{{ $item->alamat }}</textarea>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" placeholder="masukan email" value="{{ $item->email }}" required>
        </div>
        <div class="form-group">
            <label for="telepon">Telepon</label>
            <input type="number" name="telepon" class="form-control" placeholder="masukan telepon" value="{{ $item->telepon }}" required>
        </div>
        <button class="btn btn-primary" type="submit"> save</button>
    </form>
</div>
@endsection