
@extends('layouts.portal')

@section('title', 'Jadwal Kuliah')
@section('heading', 'Jadwal Kuliah')

@section('content')

<div class="mb-6">
    <p class="text-sm text-slate-500">Akademik / Jadwal Kuliah</p>
    <h3 class="mt-2 text-2xl font-bold">Jadwal Perkuliahan</h3>
    <p class="mt-2 text-slate-500">
        Berikut contoh jadwal perkuliahan mahasiswa.
    </p>
</div>

<div class="mb-6 rounded-xl bg-gradient-to-r from-blue-700 to-indigo-600 p-6 text-white shadow-sm">
    <p class="text-sm text-blue-100">Semester Akademik</p>
    <h4 class="mt-2 text-2xl font-bold">Ganjil 2026/2027</h4>
    <p class="mt-2 text-sm text-blue-100">
        Pastikan jadwal kuliah diperiksa sebelum kegiatan perkuliahan.
    </p>
</div>

<div class="overflow-hidden rounded-xl bg-white shadow-sm ring-1 ring-slate-200">
    <div class="overflow-x-auto">
        <table class="w-full text-left text-sm">
            <thead class="bg-slate-50 text-slate-600">
                <tr>
                    <th class="px-5 py-4">No.</th>
                    <th class="px-5 py-4">Hari</th>
                    <th class="px-5 py-4">Mata Kuliah</th>
                    <th class="px-5 py-4">Waktu</th>
                    <th class="px-5 py-4">Ruangan</th>
                </tr>
            </thead>

            <tbody class="divide-y divide-slate-100">
                <tr>
                    <td class="px-5 py-4">1</td>
                    <td class="px-5 py-4">Senin</td>
                    <td class="px-5 py-4 font-medium">Pemrograman Web</td>
                    <td class="px-5 py-4">08.00–10.30</td>
                    <td class="px-5 py-4">Lab Komputer</td>
                </tr>

                <tr>
                    <td class="px-5 py-4">2</td>
                    <td class="px-5 py-4">Selasa</td>
                    <td class="px-5 py-4 font-medium">Basis Data</td>
                    <td class="px-5 py-4">10.00–12.30</td>
                    <td class="px-5 py-4">Ruang 203</td>
                </tr>

                <tr>
                    <td class="px-5 py-4">3</td>
                    <td class="px-5 py-4">Rabu</td>
                    <td class="px-5 py-4 font-medium">Rekayasa Perangkat Lunak</td>
                    <td class="px-5 py-4">13.00–15.30</td>
                    <td class="px-5 py-4">Ruang 204</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection
