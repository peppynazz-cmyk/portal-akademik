
@extends('layouts.portal')

@section('title', 'Daftar Kelas')
@section('heading', 'Daftar Kelas Dosen')

@section('content')

<div class="mb-6">
    <p class="text-sm text-slate-500">Akademik / Daftar Kelas</p>
    <h3 class="mt-2 text-2xl font-bold">Kelas yang Diampu</h3>
    <p class="mt-2 text-slate-500">
        Berikut contoh daftar kelas pada Portal Akademik.
    </p>
</div>

<div class="mb-6 grid gap-5 md:grid-cols-3">
    <div class="rounded-xl bg-white p-6 shadow-sm ring-1 ring-slate-200">
        <p class="text-sm text-slate-500">Total Kelas</p>
        <h4 class="mt-2 text-3xl font-bold text-blue-600">3</h4>
    </div>

    <div class="rounded-xl bg-white p-6 shadow-sm ring-1 ring-slate-200">
        <p class="text-sm text-slate-500">Mata Kuliah</p>
        <h4 class="mt-2 text-3xl font-bold text-indigo-600">3</h4>
    </div>

    <div class="rounded-xl bg-white p-6 shadow-sm ring-1 ring-slate-200">
        <p class="text-sm text-slate-500">Status</p>
        <h4 class="mt-2 text-3xl font-bold text-emerald-600">Aktif</h4>
    </div>
</div>

<div class="overflow-hidden rounded-xl bg-white shadow-sm ring-1 ring-slate-200">
    <div class="border-b border-slate-200 p-5">
        <h4 class="font-bold">Informasi Kelas</h4>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-left text-sm">
            <thead class="bg-slate-50 text-slate-600">
                <tr>
                    <th class="px-5 py-4">No.</th>
                    <th class="px-5 py-4">Kelas</th>
                    <th class="px-5 py-4">Mata Kuliah</th>
                    <th class="px-5 py-4">Status</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
                <tr>
                    <td class="px-5 py-4">1</td>
                    <td class="px-5 py-4">MI 3A</td>
                    <td class="px-5 py-4">Pemrograman Web</td>
                    <td class="px-5 py-4 text-emerald-600">Aktif</td>
                </tr>
                <tr>
                    <td class="px-5 py-4">2</td>
                    <td class="px-5 py-4">MI 3B</td>
                    <td class="px-5 py-4">Basis Data</td>
                    <td class="px-5 py-4 text-emerald-600">Aktif</td>
                </tr>
                <tr>
                    <td class="px-5 py-4">3</td>
                    <td class="px-5 py-4">MI 3C</td>
                    <td class="px-5 py-4">Rekayasa Perangkat Lunak</td>
                    <td class="px-5 py-4 text-emerald-600">Aktif</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection
