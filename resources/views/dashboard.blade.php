@extends('layouts.app')

@section('content')
    <div class="max-w-5xl mx-auto p-6">
        <h1 class="text-2xl font-bold">Halo, {{ $username }}</h1>
        <p class="text-gray-500 mb-6">Selamat datang di dashboard I-Gudang. Kelola gudang dan data barang anda di sini.</p>

        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-8">
            @foreach ($ringkasan as $item)
                <div class="bg-white border rounded-lg shadow-sm p-5">
                    <p class="text-sm text-gray-500">{{ $item['label'] }}</p>
                    <p class="text-3xl font-bold mt-1">{{ $item['nilai'] }}</p>
                </div>
            @endforeach
        </div>

        <div class="flex flex-wrap gap-3">
            <a href="/pengelolaan?username={{ $username }}"
               class="px-4 py-2 rounded-lg bg-blue-400 text-blue-50 font-medium transition-colors hover:bg-blue-800">
                Kelola Data Barang
            </a>
            <a href="/profile?username={{ $username }}"
               class="px-4 py-2 rounded-lg bg-white border hover:bg-gray-300">
                Lihat Profil
            </a>
        </div>
    </div>
@endsection