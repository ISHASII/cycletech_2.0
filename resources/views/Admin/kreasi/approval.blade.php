@extends('Admin.layout.app')

@section('content')
<div class="container mx-auto py-8 px-4 lg:px-8">
    <h1 class="text-3xl font-bold mb-6">Validasi Kreasi</h1>

    @if (session('success'))
        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6">
            {{ session('success') }}
        </div>
    @endif

    <div class="overflow-x-auto bg-white shadow-md">
        <table class="min-w-full border border-hulk text-sm">
            <thead>
                <tr class="bg-green-100 text-left">
                    <th class="px-4 py-3 border border-hulk text-sm font-semibold">ID</th>
                    <th class="px-4 py-3 border border-hulk text-sm font-semibold">Judul Kreasi</th>
                    <th class="px-4 py-3 border border-hulk text-sm font-semibold">Author</th>
                    <th class="px-4 py-3 border border-hulk text-sm font-semibold">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pendingKreasis as $kreasi)
                    <tr class="hover:bg-gray-100 transition">
                        <td class="px-4 py-3 border border-hulk">{{ $kreasi->id }}</td>
                        <td class="px-4 py-3 border border-hulk">{{ $kreasi->judul_kreasi }}</td>
                        <td class="px-4 py-3 border border-hulk">{{ $kreasi->author }}</td>
                        <td class="px-4 py-3 border border-hulk flex gap-2">
                            <form action="{{ route('admin.kreasi.approve', $kreasi->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="px-4 py-2 bg-green-500 text-white hover:bg-green-600">
                                    Approve
                                </button>
                            </form>
                            <form action="{{ route('admin.kreasi.reject', $kreasi->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="px-4 py-2 bg-red-500 text-white hover:bg-red-600">
                                    Reject
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach

                @if ($pendingKreasis->isEmpty())
                    <tr>
                        <td colspan="4" class="px-4 py-3 text-center text-gray-500">
                            Tidak ada kreasi yang menunggu validasi.
                        </td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $pendingKreasis->links('pagination::tailwind') }}
    </div>
</div>
@endsection
