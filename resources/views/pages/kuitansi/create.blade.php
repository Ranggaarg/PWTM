@extends('layouts.main')

@section('title', 'Home')

@section('content')

    <article class="bg-light">
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title text-center mb-4">KUITANSI BARU</h2>
                             <form action="{{ route('kuitansi.store') }}" method="POST">
        @csrf
        <p>ID Kuitansi <span>: {{ $lastId }}</span></p>
        <div class="form-group">
            <label for="id_faktur">Id Pesan</label>
            <select name="id_faktur" id="id_faktur" class="form-control" required>
                <option value="">Pilih id faktur</option>
                @foreach ($datafaktur as $item)
                    <option value="{{ $item->id }}">{{ $item->id }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="tgl_kuitansi">Tanggal kuitansi</label>
            <input type="date" name="tgl_kuitansi" id="tgl_kuitansi" class="form-control" value="{{ $dateNow }}" required>
        </div>
        <button class="btn btn-primary" type="submit"> save</button>
    </form>
</div>
@endsection