@extends('Admin.layout.app')

@section('title', 'Edit Data Admin')

@section('content')
<div class="bg-white p-6 rounded-md shadow-md max-w-2xl mx-auto">
    <h1 class="text-3xl sm:text-4xl font-bold mb-4">Edit Data Admin</h1>

    <form action="{{ route('admin.dataadmin.update', $admin->id) }}" method="POST">
        @csrf
        @method('PUT')

        <!-- Nama Admin -->
        <div class="mb-4">
            <label for="name" class="block text-gray-700 font-semibold mb-2">Nama Admin</label>
            <input type="text" name="name" id="name" value="{{ old('name', $admin->name) }}" required
                class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:border-blue-500">
        </div>

        <!-- Email Admin -->
        <div class="mb-4">
            <label for="email" class="block text-gray-700 font-semibold mb-2">Email Admin</label>
            <input type="email" name="email" id="email" value="{{ old('email', $admin->email) }}" required
                class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:border-blue-500">
        </div>

        <!-- Password Baru -->
        <div class="mb-4">
            <label for="password" class="block text-gray-700 font-semibold mb-2">Password Baru</label>
            <input type="password" name="password" id="password"
                class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:border-blue-500">
        </div>

        <!-- Tombol Submit -->
        <div class="flex justify-end space-x-4">
            <a href="{{ route('admin.dataadmin.index') }}" class="px-4 py-2 bg-gray-400 text-white rounded hover:bg-gray-500">Batal</a>
            <button type="submit" class="px-4 py-2 bg-hulk text-white rounded hover:bg-old-hulk">Simpan</button>
        </div>
    </form>
</div>
@endsection
