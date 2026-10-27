
@extends('layouts.portal')

@section('title', 'Profil Mahasiswa')
@section('heading', 'Profil Mahasiswa')

@section('content')

<div class="mb-6">
    <p class="text-sm text-slate-500">Akademik / Profil</p>
    <h3 class="mt-2 text-2xl font-bold">Informasi Akun Mahasiswa</h3>
    <p class="mt-2 text-slate-500">
        Informasi pengguna yang sedang login ke portal akademik.
    </p>
</div>

<div class="max-w-3xl rounded-2xl bg-white p-8 shadow-sm ring-1 ring-slate-200">
    <div class="mb-6 flex items-center gap-4">
        <div class="flex h-16 w-16 items-center justify-center rounded-full bg-blue-100 text-2xl font-bold text-blue-700">
            {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
        </div>

        <div>
            <h4 class="text-xl font-bold">{{ auth()->user()->name }}</h4>
            <p class="text-sm text-slate-500">Mahasiswa Aktif</p>
        </div>
    </div>

    <div class="divide-y divide-slate-100">
        <div class="py-4">
            <p class="text-sm text-slate-500">Nama Lengkap</p>
            <p class="mt-1 font-semibold">{{ auth()->user()->name }}</p>
        </div>

        <div class="py-4">
            <p class="text-sm text-slate-500">Email</p>
            <p class="mt-1 font-semibold">{{ auth()->user()->email }}</p>
        </div>

        <div class="py-4">
            <p class="text-sm text-slate-500">Role Pengguna</p>
            <span class="mt-2 inline-block rounded-full bg-blue-100 px-3 py-1 text-sm font-medium text-blue-700">
                {{ ucfirst(auth()->user()->role) }}
            </span>
        </div>
    </div>
</div>

@endsection
