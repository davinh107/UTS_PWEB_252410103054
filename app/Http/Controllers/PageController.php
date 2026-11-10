<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function dashboard(Request $request)
    {
        $username = $request->input('username');
        if (!$username) 
        {
        return redirect('/');
        }
        $ringkasan = 
        [
            ['label' => 'Jenis barang', 'nilai' => 24],
            ['label' => 'Total Stok', 'nilai' => 239],
            ['label' => 'Kategori', 'nilai' => 4],
        ];
        return view('dashboard', ['username' => $username, 'ringkasan' => $ringkasan]);
    }
    public function profile(Request $request)
    {
        $username = $request->query('username');
        if (!$username) 
        {
        return redirect('/');
        }
        $peran = 'Admin Gudang';
        return view('profile', ['username' => $username, 'peran' => $peran]);
    }
    public function pengelolaan(Request $request)
    {
        $username = $request->input('username');
        if (!$username) 
        {
        return redirect('/');
        }
        $barang = 
        [
        ['nama' => 'Telur', 'kategori' => 'Sembako', 'stok' => 10, 'rak' => '5A'],
        ['nama' => 'Beras', 'kategori' => 'Sembako', 'stok' => 20, 'rak' => '5B'],
        ['nama' => 'Minyak Goreng', 'kategori' => 'Sembako', 'stok' => 15, 'rak' => '5C'],
        ['nama' => 'Gula', 'kategori' => 'Sembako', 'stok' => 8, 'rak' => '5D'],
        ['nama' => 'Tepung Terigu', 'kategori' => 'Sembako', 'stok' => 12, 'rak' => '5E'],

        ['nama' => 'Es Krim WLS', 'kategori' => 'Es', 'stok' => 12, 'rak' => 'F1'],
        ['nama' => 'Es Krim Magnum', 'kategori' => 'Es', 'stok' => 12, 'rak' => 'F1'],
        ['nama' => 'Es Krim Walls', 'kategori' => 'Es', 'stok' => 12, 'rak' => 'F1'],
        ['nama' => 'Es Krim Campina', 'kategori' => 'Es', 'stok' => 12, 'rak' => 'F1'],

        ['nama' => 'Bangbang', 'kategori' => 'jajan', 'stok' => 5, 'rak' => '3A'],
        ['nama' => 'Chitato', 'kategori' => 'jajan', 'stok' => 10, 'rak' => '3B'],
        ['nama' => 'Cheetos', 'kategori' => 'jajan', 'stok' => 8, 'rak' => '3C'],
        ['nama' => 'Tango', 'kategori' => 'jajan', 'stok' => 12, 'rak' => '3D'],
        ['nama' => 'Chiki', 'kategori' => 'jajan', 'stok' => 15, 'rak' => '3E'],

        ['nama' => 'Sosis Premium', 'kategori' => 'mkn beku', 'stok' => 5, 'rak' => 'F2'],
        ['nama' => 'Bakso Sapi', 'kategori' => 'mkn beku', 'stok' => 10, 'rak' => 'F2'],
        ['nama' => 'Nugget Ayam', 'kategori' => 'mkn beku', 'stok' => 8, 'rak' => 'F2'],
        ['nama' => 'Dimsum Udang', 'kategori' => 'mkn beku', 'stok' => 12, 'rak' => 'F2'],
        ['nama' => 'Pangsit Ayam', 'kategori' => 'mkn beku', 'stok' => 15, 'rak' => 'F2'],

        ['nama' => 'Indomie Goreng', 'kategori' => 'Sembako', 'stok' => 8, 'rak' => '2A'],
        ['nama' => 'Indomie Kuah', 'kategori' => 'Sembako', 'stok' => 4, 'rak' => '2B'],
        ['nama' => 'Mie Sedaap Goreng', 'kategori' => 'Sembako', 'stok' => 6, 'rak' => '2C'],
        ['nama' => 'Mie Sedaap Kuah', 'kategori' => 'Sembako', 'stok' => 3, 'rak' => '2D'],
        ['nama' => 'Supermi Goreng', 'kategori' => 'Sembako', 'stok' => 5, 'rak' => '2E']
        ];
        
    return view('pengelolaan', ['barang' => $barang, 'username' => $username]);
    }
}
