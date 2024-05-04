@extends('layouts.app')

@section('content')
    <div class="container index-barang">
        <h2 class="pb-4">Daftar Barang</h2>
        <a class="btn btn-tambah" href="{{ route('barangs.create') }}">Tambah Barang</a>
        <table class="table table-bordered mt-2">
            <thead>
                <tr>
                    <th scope="col">Kode Barang</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Harga Barang</th>
                    <th scope="col">Satuan Barang</th>
                    <th scope="col">Deskripsi Barang</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data_barang as $barang)
                    <tr>
                        <td>{{ $barang->kode_barang }}</td>
                        <td>{{ $barang->nama_barang }}</td>
                        <td>{{ $barang->harga_barang }}</td>
                        <td>{{ $barang->satuan->kode_satuan }}</td>
                        <td>{{ $barang->deskripsi_barang }}</td>

                        <td>
                            <a class="btn btn-sm btn-success" href="{{ route('barangs.show', $barang->id) }}">Detail</a>
                            <a class="btn btn-sm btn-info" href="{{ route('barangs.edit', $barang->id) }}">Edit</a>
                            <form action="{{ route('barangs.destroy', $barang->id) }}" method="POST" type="button"
                                class="btn btn-danger p-0" onsubmit="return confirm('Hapus Data ?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger m-0 border-0">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
