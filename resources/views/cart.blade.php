
@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Keranjang Belanja</h2>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if ($keranjang->isEmpty())
            <p>Keranjang belanja masih kosong.</p>
        @else
            <table class="table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Menu</th>
                        <th>Jumlah</th>
                        <th>Total Harga</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($keranjang as $keranjang)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $keranjang->menu->nama }}</td>
                            <td>{{ $keranjang->jumlah }}</td>
                            <td>{{ $keranjang->total_harga }}</td>
                            <td>
                                <form action="{{ route('keranjang.remove', $keranjang->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
