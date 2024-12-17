@extends('Admin.layout.app')

@section('title', 'Tambah Kategori Sampah')

@section('content')
    <div class="bg-white p-4 lg:p-6 rounded-md shadow-md w-full lg:w-xl">
        <h1 class="text-3xl lg:text-5xl font-bold mb-6">Tambah Kategori Sampah</h1>

        <form action="{{ route('admin.categories.store') }}" method="POST">
            @csrf

            <!-- Nama Kategori -->
            <div class="mb-4">
                <label class="block text-gray-700 font-semibold mb-2" for="kategori">Nama Kategori</label>
                <input type="text" id="kategori" name="kategori" class="pl-2 w-full border border-hulk p-2 rounded focus:outline-none focus:border-old-hulk" required>
            </div>

            <!-- Buttons -->
            <div class="flex justify-between">
                <a href="{{ route('admin.categories.index') }}" type="button" class="bg-gray text-white px-4 py-2 rounded hover:bg-gray-600">
                    Kembali
                </a>
                <button type="submit" class="bg-hulk text-white px-4 py-2 rounded hover:bg-old-hulk">
                    Simpan
                </button>
            </div>
        </form>
</div>
@endsection
