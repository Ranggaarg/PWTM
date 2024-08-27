@extends('layouts.main')

@section('title', 'Home')

@section('content')
    <h1>Laporan Perpelanggan</h1>

    <div class="my-3 d-flex justify-content-between">
            <a href="{{ route('pelanggan.create') }}" class="ms-auto"><button class="btn btn-primary">Add
                    pelanggan</button></a>
        </div>
        <div class="my-4">
            <form action="{{ route('lap-perpelanggan', $idpelanggan) }}" method="GET">
                @csrf
                <div class="form-group">
                    <label for="id_pelanggan">Pelanggan</label>
                    <select name="id_pelanggan" id="id_pelanggan" class="form-control">
                        <option value="">pilih pelanggan</option>
                        @foreach ($datapelanggan as $item)
                            <option value="{{ $item->id }}">{{ $item->nm_pelanggan }}</option>
                        @endforeach
                    </select>
                </div>
                <button class="btn btn-primary" type="submit">Cari</button>
            </form>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>ID pesan</th>
                    <th>Tanggal pesan</th>
                    <th>Pelanggan</th>
                    <th>Jumlah produk</th>
                    <th>Total harga</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>P{{ str_pad($item->id, 4, '0', STR_PAD_LEFT) }}</td>
                        <td>{{ $item->tgl_pesan }}</td>
                        <td>{{ $item->nm_pelanggan }}</td>
                        <td>{{ $item->jumlah }}</td>
                        <td>{{ $item->total_harga }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
