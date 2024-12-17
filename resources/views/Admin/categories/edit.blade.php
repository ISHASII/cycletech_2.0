@extends('Admin.layout.app')

@section('title', 'Categories')

@section('content')
    <!-- Container for content -->
    <div class="bg-white p-6 rounded-md shadow-md w-xl">
        <h1 class="text-5xl font-bold m-6 mb-7 text-center">Edit Data Kategori Sampah</h1>

        <!-- Form -->
        <form action="{{ route('admin.categories.update', $category->id) }}" method="post" enctype="multipart/form-data">
            @csrf <!-- Token CSRF wajib untuk keamanan -->
            @method('PUT') <!-- Metode PUT untuk update -->

            <!-- Input Nama Kategori -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2" for="judul">Nama Kategori</label>

                <input type="text" id="judul" name="kategori"
                    value="{{ old('kategori', $category->kategori) }}"
                    class="pl-2 w-full border border-hulk p-2 rounded focus:outline-none focus:border-old-hulk"
                    placeholder="Masukkan nama kategori">


                @error('name')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>

            <!-- Tombol Aksi -->
            <div class="flex justify-between">
                <a href="{{ route('admin.categories.index') }}"
                   class="bg-gray-500 bg-gray text-white px-4 py-2 rounded hover:bg-gray-600">
                    Kembali
                </a>
                <button type="submit"
                        class="bg-hulk text-white px-4 py-2 rounded hover:bg-green-700">
                    Simpan Perubahan
                </button>
            </div>
        </form>
    </div>
@endsection
