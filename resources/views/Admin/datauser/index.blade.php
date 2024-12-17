@extends('Admin.layout.app')

@section('title', 'Data Pengguna')

@section('content')
    <!-- Container for content -->
    <div class="bg-white p-4 sm:p-6 rounded-md shadow-md max-w-full mx-auto flex flex-col">
        <h1 class="text-3xl sm:text-4xl md:text-5xl font-bold m-4 sm:m-6 text-center md:text-left">Data Pengguna</h1>

        <div class="flex justify-center md:justify-end mb-4">
            <!-- Form untuk pencarian -->
            <form method="GET" action="{{ route('admin.datauser.index') }}" class="flex border border-hulk focus-within:border-old-hulk max-w-full sm:max-w-xs rounded-full">
                <input type="text" name="search" placeholder="Cari data nasabah" value="{{ request('search') }}" class="pl-4 py-2 rounded-l-full focus:outline-none w-full sm:w-auto">
                <button type="submit" class="text-hulk hover:text-old-hulk pr-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M12.9 14.32a8 8 0 111.414-1.414l4.387 4.387a1 1 0 01-1.414 1.414l-4.387-4.387zM8 14a6 6 0 100-12 6 6 0 000 12z" clip-rule="evenodd" />
                    </svg>
                </button>
            </form>
        </div>

        <!-- Table -->
        <div class="overflow-x-auto">
            <table class="min-w-full border border-hulk text-xs sm:text-sm md:text-base">
                <thead>
                    <tr class="bg-green-100 text-left">
                        <th class="px-2 sm:px-4 py-2 border border-hulk">ID</th>
                        <th class="px-2 sm:px-4 py-2 border border-hulk">Nama</th>
                        <th class="px-2 sm:px-4 py-2 border border-hulk">Email</th>
                        <th class="px-2 sm:px-4 py-2 border border-hulk">Telepon</th>
                        <th class="px-2 sm:px-4 py-2 border border-hulk">Tanggal Daftar</th>
                        <th class="px-2 sm:px-4 py-2 border border-hulk">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($nasabah as $user)
                        <tr>
                            <td class="px-2 sm:px-4 py-2 border border-hulk">{{ $user->id }}</td>
                            <td class="px-2 sm:px-4 py-2 border border-hulk">{{ $user->name }}</td>
                            <td class="px-2 sm:px-4 py-2 border border-hulk">{{ $user->email }}</td>
                            <td class="px-2 sm:px-4 py-2 border border-hulk">{{ $user->phone }}</td>
                            <td class="px-2 sm:px-4 py-2 border border-hulk">{{ $user->created_at->format('d-m-Y') }}</td>

                            <td class="px-2 sm:px-4 py-2 border border-hulk flex flex-col sm:flex-row space-y-2 sm:space-y-0 sm:space-x-2 items-center">
                                <button onclick="openOverlay({{ $user->id }})" class="bg-red-600 text-white px-3 py-1 rounded hover:bg-red-700 w-full sm:w-auto">
                                    Hapus
                                </button>
                                <form id="delete-form-{{ $user->id }}" action="{{ route('admin.datauser.destroy', $user->id) }}" method="POST" class="hidden">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="mt-4">
                {{ $nasabah->appends(['search' => request('search')])->links() }}
            </div>
        </div>
    </div>

    <!-- Overlay -->
    <div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center hidden">
        <!-- Dialog Box -->
        <div class="bg-white p-6 rounded-md shadow-md text-center w-11/12 sm:w-80">
            <h2 class="text-lg sm:text-xl font-semibold mb-4">Yakin Menghapus Pengguna ini?</h2>
            <!-- Buttons -->
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
        let deleteUserId = null;

        function openOverlay(userId) {
            deleteUserId = userId;
            document.getElementById('overlay').classList.remove('hidden');
        }

        function closeOverlay() {
            document.getElementById('overlay').classList.add('hidden');
            deleteUserId = null;
        }

        document.getElementById('confirm-delete-button').addEventListener('click', function () {
            if (deleteUserId) {
                document.getElementById(`delete-form-${deleteUserId}`).submit();
            }
        });
    </script>
@endsection
