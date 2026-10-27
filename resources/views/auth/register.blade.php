
<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Nama -->
        <div>
            <x-input-label for="name" value="Nama" />

            <x-text-input
                id="name"
                class="block mt-1 w-full"
                type="text"
                name="name"
                :value="old('name')"
                required
                autofocus
                autocomplete="name"
            />

            <x-input-error
                :messages="$errors->get('name')"
                class="mt-2"
            />
        </div>

        <!-- Email -->
        <div class="mt-4">
            <x-input-label for="email" value="Email" />

            <x-text-input
                id="email"
                class="block mt-1 w-full"
                type="email"
                name="email"
                :value="old('email')"
                required
                autocomplete="username"
            />

            <x-input-error
                :messages="$errors->get('email')"
                class="mt-2"
            />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" value="Password" />

            <x-text-input
                id="password"
                class="block mt-1 w-full"
                type="password"
                name="password"
                required
                autocomplete="new-password"
            />

            <x-input-error
                :messages="$errors->get('password')"
                class="mt-2"
            />
        </div>

        <!-- Konfirmasi Password -->
        <div class="mt-4">
            <x-input-label
                for="password_confirmation"
                value="Konfirmasi Password"
            />

            <x-text-input
                id="password_confirmation"
                class="block mt-1 w-full"
                type="password"
                name="password_confirmation"
                required
                autocomplete="new-password"
            />

            <x-input-error
                :messages="$errors->get('password_confirmation')"
                class="mt-2"
            />
        </div>

        <!-- Pilihan Role -->
        <div class="mt-4">
            <x-input-label for="role" value="Daftar Sebagai" />

            <select
                id="role"
                name="role"
                class="block mt-1 w-full border-gray-300
                       focus:border-indigo-500 focus:ring-indigo-500
                       rounded-md shadow-sm"
                required
            >
                <option value="">-- Pilih Peran --</option>

                <option value="mahasiswa"
                    {{ old('role') == 'mahasiswa' ? 'selected' : '' }}>
                    Mahasiswa
                </option>

                <option value="dosen"
                    {{ old('role') == 'dosen' ? 'selected' : '' }}>
                    Dosen
                </option>

                <option value="admin"
                    {{ old('role') == 'admin' ? 'selected' : '' }}>
                    Admin
                </option>
            </select>

            <x-input-error
                :messages="$errors->get('role')"
                class="mt-2"
            />
        </div>

        <!-- Tombol Register -->
        <div class="flex items-center justify-end mt-4">
            <a
                class="underline text-sm text-gray-600
                       hover:text-gray-900 rounded-md"
                href="{{ route('login') }}"
            >
                Sudah punya akun?
            </a>

            <x-primary-button class="ms-4">
                Register
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
