@extends('layouts.app')

@section('content')
    <div class="max-w-lg mx-auto mt-10 px-4">
        <h1 class="text-2xl font-bold mb-4 text-center">Profil Pengguna</h1>

        <div class="bg-white border rounded-lg shadow-sm overflow-hidden">
            <table class="w-full text-left">
                <tbody class="divide-y">
                    <tr>
                        <th class="p-3 w-1/3 bg-gray-50 text-gray-600 font-medium">Username</th>
                        <td class="p-3">{{ $username }}</td>
                    </tr>
                    <tr>
                        <th class="p-3 bg-gray-50 text-gray-600 font-medium">Peran</th>
                        <td class="p-3">{{ $peran }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection