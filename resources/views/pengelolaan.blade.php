@extends('layouts.app')

@section('content')
    <div class="max-w-5xl mx-auto p-6">
        <h1 class="text-2xl font-bold mb-1">Data Barang Dalam Gudang</h1>
        <p class="text-gray-500 mb-6">Daftar stok barang beserta lokasi raknya.</p>

        <div class="overflow-x-auto border">
            <table class="w-full text-left">
                <thead class="bg-white text-gray-700">
                    <tr>
                        <th class="p-3">No</th>
                        <th class="p-3">Nama</th>
                        <th class="p-3">Kategori</th>
                        <th class="p-3">Stok</th>
                        <th class="p-3">Rak</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($barang as $item)
                        <tr class="bg-white border-t hover:bg-gray-50">
                            <td class="p-3">{{ $loop->iteration }}</td>
                            <td class="p-3">{{ $item['nama'] }}</td>
                            <td class="p-3">{{ $item['kategori'] }}</td>
                            <td class="p-3">{{ $item['stok'] }}</td>
                            <td class="p-3">{{ $item['rak'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection