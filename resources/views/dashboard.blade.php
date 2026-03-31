@extends('layouts.app')

@section('content')
<h1 class="text-2xl font-bold mb-6">Dashboard</h1>

<div class="bg-white p-6 rounded shadow mb-6">
    <h2 class="text-xl font-semibold mb-3">Pengalaman Belajar Saya selama liburan</h2>

    <p class="mb-3">
        Awal gw belajar Laravel itu lumayan bingung bro, apalagi pas pertama kali lihat routing dan blade.
        Tapi setelah sering latihan, gw mulai ngerti alurnya.
    </p>

    <p class="mb-3">
        Tantangan terbesar gw ada di database dan relasi antar tabel.
        Tapi setelah paham konsepnya, Laravel jadi enak banget dipakai.
    </p>

    <p>
        Sekarang gw udah bisa bikin website sederhana dan pengen terus ningkatin skill gw.
    </p>
</div>

<!-- Tombol -->
<div class="flex gap-4 flex-wrap">
    <a href="/tentang" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
        Tentang Gw
    </a>

    <a href="/sosmed" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600">
        Sosial Media
    </a>

    <button onclick="alert('Jangan nyerah belajar coding bro 🔥')"
        class="bg-purple-500 text-white px-4 py-2 rounded hover:bg-purple-600">
        Motivasi
    </button>

    <button onclick="alert('Lu pasti bisa jadi web developer!')"
        class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">
        Semangat
    </button>
</div>
@endsection