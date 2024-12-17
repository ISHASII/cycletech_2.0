@extends('Admin.layout.app')

@section('content')
<div class="container mx-auto py-8 px-4 lg:px-8">
    <!-- Header -->
    <div class="mb-6 flex justify-between items-center">
        <h1 class="text-3xl font-bold text-gray-800">Tambah Reward</h1>
        <!-- Tombol Kembali -->
        <a href="{{ route('admin.rewards.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">
            Kembali
        </a>
    </div>

    <!-- Form -->
    <div class="bg-white shadow-md rounded-lg p-6">
        <form action="{{ route('admin.rewards.store') }}" method="POST" enctype="multipart/form-data"> <!-- Tambahkan enctype -->
            @csrf

            <!-- Nama Reward -->
            <div class="mb-4">
                <label for="name" class="block mb-2 font-semibold">Nama Reward</label>
                <input type="text" name="name" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-green-500" required>
            </div>

            <!-- Poin Dibutuhkan -->
            <div class="mb-4">
                <label for="points_required" class="block mb-2 font-semibold">Poin Dibutuhkan</label>
                <input type="number" name="points_required" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-green-500" min="0" required>
            </div>

            <!-- Foto Reward -->
            <div class="mb-4">
                <label for="foto" class="block mb-2 font-semibold">Foto Reward</label>
                <input type="file" name="foto" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-green-500" accept="image/*">
            </div>

            <!-- Tombol Simpan -->
            <div>
                <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
                    Simpan
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
