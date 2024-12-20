@extends('Admin.layout.app')

@section('content')
<div class="container mx-auto py-8 px-4 lg:px-8">
    <h1 class="text-3xl font-bold mb-6">Validasi Klaim Hadiah</h1>

    @if(session('success'))
        <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6" role="alert">
            {{ session('success') }}
        </div>
    @endif

    @foreach ($claims as $claim)
        <div class="bg-gray-100 p-4 rounded mb-4 shadow-md">
            <h2 class="text-xl font-bold">Hadiah: {{ $claim->reward->name }}</h2>
            <p>Nasabah: {{ $claim->nasabah->name }}</p>
            <p>Nomor HP: {{ $claim->nasabah->phone }}</p>
            <p>Alamat: {{ $claim->address }}</p>
            <p>Status: <span class="font-bold capitalize">{{ $claim->status }}</span></p>

            <div class="flex space-x-2 mt-4">
                <!-- Form Setujui -->
                <form action="{{ route('admin.claim.approve', $claim->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
                        Setujui
                    </button>
                </form>

                <!-- Form Tolak -->
                <form action="{{ route('admin.claim.reject', $claim->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">
                        Tolak
                    </button>
                </form>
            </div>
        </div>
    @endforeach

    <!-- Pagination -->
    <div class="mt-6">
        {{ $claims->links() }}
    </div>
</div>
@endsection
