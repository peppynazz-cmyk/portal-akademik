
@extends('layouts.portal')

@section('title', 'Data Pengguna')
@section('heading', 'Data Pengguna')

@section('content')

<div class="mb-8">
    <p class="text-sm text-slate-500">Administrator / Data Pengguna</p>
    <h3 class="mt-2 text-2xl font-bold">Pengelolaan Pengguna</h3>
    <p class="mt-2 text-slate-500">
        Informasi akun yang terdaftar di Portal Akademik.
    </p>
</div>

<div class="mb-6 grid gap-5 md:grid-cols-3">
    <div class="rounded-xl bg-white p-6 shadow-sm ring-1 ring-slate-200">
        <p class="text-sm text-slate-500">Total Pengguna</p>
        <h4 class="mt-3 text-3xl font-bold text-blue-600">3</h4>
        <p class="mt-2 text-sm text-slate-400">Data contoh</p>
    </div>

    <div class="rounded-xl bg-white p-6 shadow-sm ring-1 ring-slate-200">
        <p class="text-sm text-slate-500">Mahasiswa</p>
        <h4 class="mt-3 text-3xl font-bold text-indigo-600">1</h4>
        <p class="mt-2 text-sm text-slate-400">Data contoh</p>
    </div>

    <div class="rounded-xl bg-white p-6 shadow-sm ring-1 ring-slate-200">
        <p class="text-sm text-slate-500">Dosen dan Admin</p>
        <h4 class="mt-3 text-3xl font-bold text-emerald-600">2</h4>
        <p class="mt-2 text-sm text-slate-400">Data contoh</p>
    </div>
</div>

<div class="overflow-hidden rounded-xl bg-white shadow-sm ring-1 ring-slate-200">
    <div class="border-b border-slate-200 p-5">
        <h4 class="font-bold">Daftar Pengguna</h4>
        <p class="mt-1 text-sm text-slate-500">
            Contoh tampilan data akun pengguna.
        </p>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-left text-sm">
            <thead class="bg-slate-50 text-slate-600">
                <tr>
                    <th class="px-5 py-4">No.</th>
                    <th class="px-5 py-4">Nama</th>
                    <th class="px-5 py-4">Email</th>
                    <th class="px-5 py-4">Role</th>
                </tr>
            </thead>

            <tbody class="divide-y divide-slate-100">
                <tr>
                    <td class="px-5 py-4">1</td>
                    <td class="px-5 py-4">Peppy</td>
                    <td class="px-5 py-4">peppy@gmail.com</td>
                    <td class="px-5 py-4">
                        <span class="rounded-full bg-blue-100 px-3 py-1 text-blue-700">
                            Mahasiswa
                        </span>
                    </td>
                </tr>

                <tr>
                    <td class="px-5 py-4">2</td>
                    <td class="px-5 py-4">Budi</td>
                    <td class="px-5 py-4">budi@gmail.com</td>
                    <td class="px-5 py-4">
                        <span class="rounded-full bg-indigo-100 px-3 py-1 text-indigo-700">
                            Dosen
                        </span>
                    </td>
                </tr>

                <tr>
                    <td class="px-5 py-4">3</td>
                    <td class="px-5 py-4">Citra</td>
                    <td class="px-5 py-4">citra@gmail.com</td>
                    <td class="px-5 py-4">
                        <span class="rounded-full bg-purple-100 px-3 py-1 text-purple-700">
                            Admin
                        </span>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection
