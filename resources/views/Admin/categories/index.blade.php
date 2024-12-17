@extends('Admin.layout.app')

@section('title', 'Daftar Kategori Sampah')

@section('content')
    <div class="bg-white p-4 lg:p-6 rounded-md shadow-md w-full lg:w-xl">
        <h1 class="text-3xl lg:text-5xl font-bold mb-6">Kategori Sampah</h1>

        <!-- Tombol Tambah -->
        <div class="flex justify-end mb-4">
            <a href="{{ route('admin.categories.create') }}" class="bg-hulk text-white px-3 py-2 rounded hover:bg-old-hulk">
                Tambah Kategori
            </a>
        </div>

        <!-- Tabel Kategori -->
        <div class="overflow-x-auto">
            <table class="min-w-full border border-gray-300">
                <thead>
                    <tr class="bg-gray-100 text-left">
                        <th class="px-4 py-2 border">ID</th>
                        <th class="px-4 py-2 border">Kategori Sampah</th>
                        <th class="px-4 py-2 border">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($categories as $category)
                        <tr>
                            <td class="px-4 py-2 border">{{ $category->id }}</td>
                            <td class="px-4 py-2 border">{{ $category->kategori }}</td>
                            <td class="px-4 py-2 border flex space-x-2">
                                <!-- Tombol Edit -->
                                <a href="{{ route('admin.categories.edit', $category->id) }}" class="bg-hulk text-white px-3 py-1 rounded hover:bg-old-hulk text-center">
                                    Edit
                                </a>

                                <!-- Tombol Hapus -->
                                <button onclick="openOverlay({{ $category->id }})" class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700 text-center">
                                    Hapus
                                </button>
                                <!-- Form untuk Hapus -->
                                <form id="delete-form-{{ $category->id }}" action="{{ route('admin.categories.destroy', $category->id) }}" method="POST">

                                    @csrf
                                    @method('DELETE')
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="text-center py-4">Belum ada kategori.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="mt-4">
            {{ $categories->links() }}
        </div>
    </div>

    <!-- Overlay untuk Konfirmasi Hapus -->
    <div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
        <div class="bg-white p-6 rounded-md shadow-md text-center w-11/12 sm:w-80">
            <h2 class="text-lg sm:text-xl font-semibold mb-4">Yakin Menghapus Kategori ini?</h2>
            <div class="flex justify-center space-x-4">
                <button id="confirm-delete-button" class="px-4 py-2 border border-hulk text-hulk rounded hover:bg-red-100">
                    Ya
                </button>
                <button onclick="closeOverlay()" class="px-4 py-2 border border-red-600 text-red-600 rounded hover:bg-green-100">
                    Tidak
                </button>
            </div>
        </div>
    </div>

    <script>
        let deleteCategoryId = null;

        // Buka Overlay
        function openOverlay(categoryId) {
            deleteCategoryId = categoryId;
            document.getElementById('overlay').classList.remove('hidden');
        }

        // Tutup Overlay
        function closeOverlay() {
            document.getElementById('overlay').classList.add('hidden');
            deleteCategoryId = null;
        }

        // Konfirmasi Hapus
      	document.getElementById('confirm-delete-button').addEventListener('click', function () {
    		if (deleteCategoryId) {
        		document.getElementById(`delete-form-${deleteCategoryId}`).submit();
   			}
		});
    </script>
@endsection
