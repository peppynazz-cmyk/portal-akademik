
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Portal Akademik')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-slate-100 text-slate-800">

<div class="min-h-screen md:flex">

    <aside class="bg-slate-900 p-5 text-white md:w-64">
        <h1 class="text-2xl font-bold">Portal Akademik</h1>
        <p class="mt-1 text-sm text-slate-400">Universitas Cendekia</p>

        <nav class="mt-8 space-y-2">
            <a href="{{ route('dashboard') }}"
               class="block rounded-lg px-4 py-3 hover:bg-slate-700">
                Dashboard
            </a>

            @if(auth()->user()->role === 'mahasiswa')
                <a href="/mahasiswa/profil"
                   class="block rounded-lg px-4 py-3 hover:bg-slate-700">
                    Profil Mahasiswa
                </a>
                <a href="/mahasiswa/jadwal"
                   class="block rounded-lg px-4 py-3 hover:bg-slate-700">
                    Jadwal Kuliah
                </a>
            @elseif(auth()->user()->role === 'dosen')
                <a href="/dosen/kelas"
                   class="block rounded-lg px-4 py-3 hover:bg-slate-700">
                    Daftar Kelas
                </a>
                <a href="/dosen/nilai"
                   class="block rounded-lg px-4 py-3 hover:bg-slate-700">
                    Pengelolaan Nilai
                </a>
            @elseif(auth()->user()->role === 'admin')
                <a href="/admin/pengguna"
                   class="block rounded-lg px-4 py-3 hover:bg-slate-700">
                    Data Pengguna
                </a>
            @endif
        </nav>

        <div class="mt-8 border-t border-slate-700 pt-5">
            <p class="font-semibold">{{ auth()->user()->name }}</p>
            <p class="mb-4 text-sm text-slate-400">
                {{ ucfirst(auth()->user()->role) }}
            </p>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit"
                    class="w-full rounded-lg bg-red-600 px-4 py-2 hover:bg-red-700">
                    Logout
                </button>
            </form>
        </div>
    </aside>

    <main class="min-w-0 flex-1">
        <header class="border-b bg-white px-6 py-5">
            <p class="text-sm text-slate-500">
                Sistem Informasi Akademik Terintegrasi
            </p>
            <h2 class="mt-1 text-2xl font-bold">
                @yield('heading', 'Dashboard')
            </h2>
        </header>

        <section class="p-6 md:p-8">
            @yield('content')
        </section>

        <footer class="px-6 py-5 text-center text-sm text-slate-500">
            &copy; {{ date('Y') }} Universitas Cendekia
        </footer>
    </main>

</div>
</body>
</html>
