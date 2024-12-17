@extends('Admin.layout.app')

@section('title', 'Artikel')

@section('content')
    <!-- Container for content -->
    <div class="bg-white p-4 sm:p-6 rounded-md shadow-md max-w-full mx-auto flex flex-col">
        <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold mb-6 text-center md:text-left">Data Artikel</h1>

        <!-- Button to add new article -->
        <div class="flex justify-center md:justify-end mb-4">
            <a href="{{ route('admin.artikel.upload') }}" class="bg-hulk text-white px-4 py-2 rounded hover:bg-old-hulk">
                Tambah Artikel
            </a>
        </div>

        <!-- Table -->
        <div class="overflow-x-auto">
            <table class="min-w-full border border-hulk text-xs sm:text-sm md:text-base">
                <thead>
                    <tr class="bg-green-100 text-left">
                        <th class="px-2 sm:px-4 py-2 border border-hulk">ID</th>
                        <th class="px-2 sm:px-4 py-2 border border-hulk">Judul Artikel</th>
                        <th class="px-2 sm:px-4 py-2 border border-hulk">Foto</th>
                        <th class="px-2 sm:px-4 py-2 border border-hulk">Waktu Unggah</th>
                        <th class="px-2 sm:px-4 py-2 border border-hulk">Isi</th>
                        <th class="px-2 sm:px-4 py-2 border border-hulk">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($articles as $article)
                        <tr>
                            <td class="px-2 sm:px-4 py-2 border border-hulk">{{ $article->id }}</td>
                            <td class="px-2 sm:px-4 py-2 border border-hulk">{{ $article->judul_artikel }}</td>
                            <td class="px-2 sm:px-4 py-2 border border-hulk">
                                @if ($article->foto)
                                    <img src="{{ asset('storage/' . $article->foto) }}" alt="Foto Artikel" class="h-16 sm:h-20 rounded-md">
                                @else
                                    Tidak ada foto
                                @endif
                            </td>
                            <td class="px-2 sm:px-4 py-2 border border-hulk">{{ $article->created_at->format('d-m-Y') }}</td>
                            <td class="px-2 sm:px-4 py-2 border border-hulk">{{ Str::limit($article->isi, 50) }}</td>
                            <td class="px-2 sm:px-4 py-2 border-hulk flex flex-col sm:flex-row space-y-2 sm:space-y-0 sm:space-x-3 items-center">
                                <a href="{{ route('admin.artikel.edit', $article->id) }}" class="bg-hulk text-white px-3 py-1 rounded hover:bg-old-hulk w-full sm:w-auto text-center">Edit</a>
                                <button type="button" onclick="openOverlay({{ $article->id }})" class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700 w-full sm:w-auto text-center">
                                    Hapus
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- navigasi pagination -->
        <div class="mt-4">
            {{ $articles->links('pagination::tailwind') }}
        </div>
    </div>

    <!-- Overlay -->
    <div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
        <div class="bg-white p-6 rounded-md shadow-md text-center w-11/12 sm:w-80">
            <h2 class="text-lg sm:text-xl font-semibold mb-4">Yakin Menghapus Artikel ini?</h2>
            <input type="hidden" id="delete-article-id" />
            <div class="flex justify-center space-x-4">
                <button onclick="confirmDelete()" class="px-4 py-2 border border-hulk text-hulk rounded hover:bg-red-100">Ya</button>
                <button onclick="closeOverlay()" class="px-4 py-2 border border-red-600 text-red-600 rounded hover:bg-green-100">Tidak</button>
            </div>
        </div>
    </div>

    <script>
        function openOverlay(id) {
            document.getElementById('delete-article-id').value = id;
            document.getElementById('overlay').classList.remove('hidden');
        }

        function closeOverlay() {
            document.getElementById('overlay').classList.add('hidden');
        }

        function confirmDelete() {
            const articleId = document.getElementById('delete-article-id').value;

            fetch(`/admin/articles/${articleId}`, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                },
            })
                .then((response) => {
                    if (response.ok) {
                        alert('Artikel berhasil dihapus');
                        window.location.reload();
                    } else {
                        alert('Gagal menghapus artikel');
                    }
                })
                .catch((error) => {
                    console.error('Error:', error);
                    alert('Terjadi kesalahan saat menghapus artikel');
                });

            closeOverlay();
        }
    </script>
@endsection
