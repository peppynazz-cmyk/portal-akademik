
@extends('layouts.portal')

@section('title', 'Pengelolaan Nilai')
@section('heading', 'Pengelolaan Nilai')

@section('content')
<div class="mb-6">
    <p class="text-sm text-slate-500">Akademik / Pengelolaan Nilai</p>
    <h3 class="mt-2 text-2xl font-bold">Daftar Nilai Mahasiswa</h3>
    <p class="mt-2 text-slate-500">
        Contoh tampilan data nilai mahasiswa.
    </p>
</div>

<div class="overflow-hidden rounded-xl bg-white shadow-sm ring-1 ring-slate-200">
    <div class="overflow-x-auto">
        <table class="w-full text-left text-sm">
            <thead class="bg-slate-50 text-slate-600">
                <tr>
                    <th class="px-5 py-4">No.</th>
                    <th class="px-5 py-4">Nama Mahasiswa</th>
                    <th class="px-5 py-4">Mata Kuliah</th>
                    <th class="px-5 py-4">Nilai</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-slate-100">
                <tr>
                    <td class="px-5 py-4">1</td>
                    <td class="px-5 py-4">Mahasiswa Contoh 1</td>
                    <td class="px-5 py-4">Pemrograman Web</td>
                    <td class="px-5 py-4 font-semibold text-blue-600">A</td>
                </tr>
                <tr>
                    <td class="px-5 py-4">2</td>
                    <td class="px-5 py-4">Mahasiswa Contoh 2</td>
                    <td class="px-5 py-4">Basis Data</td>
                    <td class="px-5 py-4 font-semibold text-blue-600">B</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
