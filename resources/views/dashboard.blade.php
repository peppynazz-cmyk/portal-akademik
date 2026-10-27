
@extends('layouts.portal')

@section('title', 'Dashboard')
@section('heading', 'Dashboard')

@section('content')

<div class="mb-8 rounded-2xl bg-gradient-to-r from-blue-700 to-indigo-600 p-8 text-white shadow-sm">
    <p class="text-blue-100">Selamat datang di Portal Akademik</p>
    <h3 class="mt-2 text-3xl font-bold">
        Halo, {{ auth()->user()->name }}!
    </h3>
    <p class="mt-3 text-sm text-blue-100">
        Kamu login sebagai {{ ucfirst(auth()->user()->role) }}.
    </p>
</div>

@if (auth()->user()->role === 'mahasiswa')

    <h3 class="mb-4 text-lg font-bold">Menu Akademik</h3>
    <div class="grid gap-5 md:grid-cols-2">
        <a href="/mahasiswa/profil"
           class="rounded-xl bg-white p-6 shadow-sm ring-1 ring-slate-200 hover:shadow-md">
            <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-blue-100 text-xl">👤</div>
            <h4 class="font-bold">Profil Mahasiswa</h4>
            <p class="mt-2 text-sm text-slate-500">Lihat informasi akun kamu.</p>
            <p class="mt-4 font-semibold text-blue-600">Buka halaman →</p>
        </a>

        <a href="/mahasiswa/jadwal"
           class="rounded-xl bg-white p-6 shadow-sm ring-1 ring-slate-200 hover:shadow-md">
            <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-indigo-100 text-xl">📅</div>
            <h4 class="font-bold">Jadwal Kuliah</h4>
            <p class="mt-2 text-sm text-slate-500">Lihat jadwal perkuliahan.</p>
            <p class="mt-4 font-semibold text-blue-600">Buka halaman →</p>
        </a>
    </div>

@elseif (auth()->user()->role === 'dosen')

    <h3 class="mb-4 text-lg font-bold">Menu Pengajaran</h3>
    <div class="grid gap-5 md:grid-cols-2">
        <a href="/dosen/kelas"
           class="rounded-xl bg-white p-6 shadow-sm ring-1 ring-slate-200 hover:shadow-md">
            <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-blue-100 text-xl">📚</div>
            <h4 class="font-bold">Daftar Kelas</h4>
            <p class="mt-2 text-sm text-slate-500">Lihat kelas yang diampu.</p>
            <p class="mt-4 font-semibold text-blue-600">Buka halaman →</p>
        </a>

        <a href="/dosen/nilai"
           class="rounded-xl bg-white p-6 shadow-sm ring-1 ring-slate-200 hover:shadow-md">
            <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-emerald-100 text-xl">📝</div>
            <h4 class="font-bold">Pengelolaan Nilai</h4>
            <p class="mt-2 text-sm text-slate-500">Lihat menu pengelolaan nilai.</p>
            <p class="mt-4 font-semibold text-blue-600">Buka halaman →</p>
        </a>
    </div>

@elseif (auth()->user()->role === 'admin')

    <h3 class="mb-4 text-lg font-bold">Menu Administrator</h3>
    <div class="rounded-xl bg-white p-6 shadow-sm ring-1 ring-slate-200">
        <div class="mb-4 flex h-12 w-12 items-center justify-center rounded-xl bg-purple-100 text-xl">👥</div>
        <h4 class="font-bold">Data Pengguna</h4>
        <p class="mt-2 text-sm text-slate-500">
            Lihat informasi pengguna dan role akun.
        </p>
        <a href="/admin/pengguna"
           class="mt-4 inline-block font-semibold text-blue-600">
            Buka halaman →
        </a>
    </div>

@endif

@endsection
