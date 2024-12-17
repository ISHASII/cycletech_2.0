@extends('Admin.layout.app')

@section('title', 'Rewards')

@section('content')
    <!-- Container for content -->
    <div class="bg-white p-4 sm:p-6 rounded-md shadow-md max-w-full mx-auto">
        <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold m-4 sm:m-6 text-center md:text-left">Data Rewards</h1>

        <!-- Alert Notifikasi -->
        @if(session('success'))
            <div class="bg-green-100 border-l-4 border-hulk text-green-700 p-4 mb-4" role="alert">
                <p>{{ session('success') }}</p>
            </div>
        @endif

        <!-- Tombol Tambah -->
        <div class="text-right mb-4">
            <a href="{{ route('admin.rewards.create') }}" class="px-4 py-2 bg-hulk text-white rounded-lg hover:bg-old-hulk">
                Tambah Reward
            </a>
        </div>

        <!-- Tabel Rewards -->
        <div class="overflow-x-auto">
            <table class="min-w-full border border-gray-300 text-sm sm:text-base">
                <thead>
                    <tr class="bg-hulk text-white">
                        <th class="px-4 py-2 border">ID</th>
                        <th class="px-4 py-2 border">Nama Reward</th>
                        <th class="px-4 py-2 border">Poin Dibutuhkan</th>
                        <th class="px-4 py-2 border">Foto</th>
                        <th class="px-4 py-2 border">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($rewards as $reward)
                        <tr class="hover:bg-gray-100">
                            <td class="px-4 py-2 border text-center">{{ $reward->id }}</td>
                            <td class="px-4 py-2 border">{{ $reward->name }}</td>
                            <td class="px-4 py-2 border text-center">{{ $reward->points_required }}</td>
                            <td class="px-4 py-2 border text-center">
                                @if ($reward->foto)
                                    <img src="{{ asset('storage/' . $reward->foto) }}" alt="Foto Reward" class="w-16 h-16 object-cover rounded mx-auto">
                                @else
                                    <span class="text-gray-500">Tidak ada foto</span>
                                @endif
                            </td>
                            <td class="px-4 py-2 border text-center">
                                <div class="flex justify-center gap-2">
                                    <!-- Edit Button -->
                                    <a href="{{ route('admin.rewards.edit', $reward->id) }}" class="bg-hulk text-white px-3 py-1 rounded hover:bg-old-hulk">
                                        Edit
                                    </a>
                                    <!-- Hapus Button -->
                                    <button onclick="openOverlay({{ $reward->id }})" class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700">
                                        Hapus
                                    </button>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                    @if ($rewards->isEmpty())
                        <tr>
                            <td colspan="5" class="px-4 py-3 text-center text-gray-500">
                                Tidak ada data reward tersedia.
                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>

        <!-- Navigasi Pagination -->
        <div class="mt-4">
            {{ $rewards->links('pagination::tailwind') }}
        </div>
    </div>

    <!-- Overlay for Delete Confirmation -->
    <div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
        <div class="bg-white p-6 rounded-md shadow-md text-center w-11/12 sm:w-80">
            <h2 class="text-lg sm:text-xl font-semibold mb-4">Yakin Menghapus Reward ini?</h2>
            <form id="deleteForm" method="POST">
                @csrf
                @method('DELETE')
                <div class="flex justify-center space-x-4">
                    <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700">
                        Ya
                    </button>
                    <button type="button" onclick="closeOverlay()" class="px-4 py-2 bg-gray-300 text-gray-800 rounded hover:bg-gray-400">
                        Tidak
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Script for Overlay -->
    <script>
        function openOverlay(id) {
            const overlay = document.getElementById('overlay');
            const deleteForm = document.getElementById('deleteForm');
            deleteForm.action = `/admin/rewards/${id}`;
            overlay.classList.remove('hidden');
        }

        function closeOverlay() {
            const overlay = document.getElementById('overlay');
            overlay.classList.add('hidden');
        }
    </script>
@endsection
