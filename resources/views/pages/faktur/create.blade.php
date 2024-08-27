@extends('layouts.main')

@section('title', 'Home')

@section('content')

    <article class="bg-light">
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title text-center mb-4">FAKTUR BARU</h2>
                            
    <form action="{{ route('faktur.store') }}" method="POST">
        @csrf
        <p>ID Faktur <span>: {{ $lastId }}</span></p>
        <div class="form-group">
            <label for="id_pesan">Id Pesan</label>
            <select name="id_pesan" id="id_pesan" class="form-control" required>
                <option value="">Pilih id pesan</option>
                @foreach ($datapesan as $item)
                    <option value="{{ $item->id }}">{{ $item->id }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="tgl_faktur">Tanggal faktur</label>
            <input type="date" name="tgl_faktur" id="tgl_faktur" class="form-control" value="{{ $dateNow }}" required>
        </div>
        <button class="btn btn-primary" type="submit"> save</button>
    </form>
</div>
@endsection