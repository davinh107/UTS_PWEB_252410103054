<nav class="flex items-center justify-between bg-white border-b px-6 py-3">
    <div class="flex items-center gap-2">
        <a href="/dashboard?username={{ request('username') }}" title="Kembali ke halaman Dashboard" class="flex items-center gap-3 rounded-lg px-3 py-2 transition-colors hover:bg-gray-100">
            <img src="{{ asset('img/warehouse.jpg') }}" alt="Logo" class="h-9 w-9">
            <span class="font-semibold">I-Gudang</span>
        </a>
        <a href="/profile?username={{ request('username') }}" title="Lihat profil pengguna" class="rounded-lg px-3 py-2 text-gray-600 transition-colors hover:bg-gray-100 hover:text-gray-900">
            Lihat Profil
        </a>
        <a href="/pengelolaan?username={{ request('username') }}" title="Lihat dan kelola data barang" class="rounded-lg px-3 py-2 text-gray-600 transition-colors hover:bg-gray-100 hover:text-gray-900">
            Lihat Data Barang
        </a>
    </div>

    <a href="/" title="Keluar dari akun dan kembali ke halaman utama" class="px-4 py-2 rounded-lg bg-red-600 text-white hover:bg-red-700">
        Logout
    </a>    
</nav>