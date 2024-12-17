@extends('Admin.layout.app')

@section('content')
<div class="container mx-auto py-8 px-4 lg:px-8">
    <!-- Header -->
    <div class="mb-6 flex justify-between items-center">
        <h1 class="text-3xl font-bold text-gray-800">Edit Reward</h1>
        <!-- Tombol Kembali -->
        <a href="{{ route('admin.rewards.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">
            Kembali
        </a>
    </div>

    <!-- Form -->
    <div class="bg-white shadow-md rounded-lg p-6">
        <form action="{{ route('admin.rewards.update', $reward->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Nama Reward -->
            <div class="mb-4">
                <label for="name" class="block mb-2 font-semibold">Nama Reward</label>
                <input type="text" name="name" value="{{ old('name', $reward->name) }}"
                       class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>

            <!-- Poin Dibutuhkan -->
            <div class="mb-4">
                <label for="points_required" class="block mb-2 font-semibold">Poin Dibutuhkan</label>
                <input type="number" name="points_required" value="{{ old('points_required', $reward->points_required) }}"
                       class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-green-500" min="0">
            </div>

            <!-- Foto Reward -->
            <div class="mb-4">
                <label for="foto" class="block mb-2 font-semibold">Foto Reward</label>
                <input type="file" name="foto" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-green-500">

                @if ($reward->foto)
                    <div class="mt-4">
                        <p class="text-sm text-gray-600 mb-2">Foto Saat Ini:</p>
                        <img src="{{ asset('storage/' . $reward->foto) }}" alt="Foto Reward" class="w-24 h-24 object-cover rounded-lg">
                    </div>
                @endif
            </div>

            <!-- Tombol Submit -->
            <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
                Update
            </button>
        </form>
    </div>
</div>
@endsection
