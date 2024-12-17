@extends('Admin.layout.app')

@section('title', 'Tambah Artikel')

@section('content')
<div class="bg-white p-6 rounded-md shadow-md w-full">
    <h1 class="text-2xl font-semibold mb-4 text-center">Tambah Data Artikel</h1>

    <form action="{{ route('admin.artikel.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-700 font-semibold mb-2" for="judul">Judul Artikel</label>
            <input type="text" id="judul" name="judul" class="pl-2 w-full border border-hulk p-2 rounded focus:outline-none focus:border-old-hulk" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-semibold mb-2" for="isi">Isi</label>
            <textarea id="isi" name="isi" rows="6" class="pl-2 w-full border border-hulk rounded focus:outline-none focus:border-old-hulk" required></textarea>
        </div>

        <div class="mb-6">
            <label class="block text-black font-semibold mb-2" for="foto">Foto Artikel</label>
            <input type="file" id="foto" name="foto" class="block w-full text-gray border border-gray-300 rounded p-2">
        </div>

        <div class="flex justify-between">
            <a href="{{ route('admin.artikel.index') }}" class="bg-gray text-white px-4 py-2 rounded hover:bg-gray-600">Kembali</a>
            <button type="submit" class="bg-hulk text-white px-4 py-2 rounded hover:bg-old-hulk">Unggah</button>
        </div>
    </form>
</div>
@endsection
