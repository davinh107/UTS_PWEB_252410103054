@extends('layouts.app')

@section('content')
    <div class="min-h-screen flex items-center justify-center bg-gray-100">
        <form action="/dashboard" method="POST" class="bg-white p-8 rounded-lg shadow w-full max-w-sm">
            @csrf
            <h1 class="text-2xl font-bold mb-6">Masuk ke I-Gudang</h1>

            <input type="text" name="username" placeholder="Username"
                   class="w-full border rounded px-3 py-2 mb-4">

            <input type="password" name="password" placeholder="Password"
                   class="w-full border rounded px-3 py-2 mb-6">

            <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded">
                Masuk
            </button>
        </form>
    </div>
@endsection