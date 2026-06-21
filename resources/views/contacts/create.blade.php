<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Kontak Baru') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                
                <form action="{{ route('contacts.store') }}" method="POST">
                    @csrf
    {{-- Tambahkan kode error di sini --}}
    @if ($errors->any())
        <div style="color: red; margin-bottom: 10px;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

                    <!-- Input Nama -->
                    <div class="mb-4">
                    <label for="nama" class="block text-gray-700 text-sm font-bold mb-2">Nama:</label>
                    <input type="text" name="nama" id="nama" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>

                    <!-- Input Nomor Telepon -->
                    <div class="mb-4">
                        <label for="nomor_telepon" class="block text-gray-700 text-sm font-bold mb-2">Nomor Telepon:</label>
                        <input type="text" name="nomor_telepon" id="nomor_telepon" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                    </div>

                    <!-- Input Biodata -->
                    <div class="mb-4">
                        <label for="biodata" class="block text-gray-700 text-sm font-bold mb-2">Biodata (Opsional):</label>
                        <textarea name="biodata" id="biodata" rows="4" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
                    </div>

                    <!-- Tombol Simpan -->
                    <div class="flex items-center justify-end mt-4">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                            Simpan Kontak
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>