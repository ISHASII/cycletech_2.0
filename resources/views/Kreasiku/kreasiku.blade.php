@extends('Layout.kreasiapp')

@section('content')
    <!-- Content -->
    <section class="bg-white mt-20 py-10 px-4 sm:px-8 md:px-16 lg:px-24 xl:px-32">
        <header class="mb-6">
            <h1 class="text-2xl font-semibold text-gray-800">Kreasiku</h1>
            <p class="text-gray-600">Ini adalah galeri pribadi yang berisi semua karya yang telah kamu unggah.</p>
        </header>
        <!-- Upload Button -->
        <a href="{{ route('unggah.kreasi') }}" class="flex my-8 w-44 py-1 border-2 font-semibold bg-hulk border-hulk text-white px-8 rounded-3xl hover:bg-gradient-to-r from-black to-old-hulk">
            Unggah Kreasi
        </a>
        <div class="container mx-auto text-center">
            @if($kreasiku->isEmpty())
                <p class="text-gray-500 mt-4">Belum ada kreasi yang diunggah. Yuk, unggah kreasi pertamamu!</p>
            @else
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 mt-6">
                    @foreach ($kreasiku as $kreasi)
                        <div class="kreasi bg-gradient-to-b from-birumuda to-krem p-6 rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300">
                            <img src="{{ asset('storage/' . $kreasi->foto_kreasi) }}" alt="{{ $kreasi->judul_kreasi }}" class="w-full h-48 object-cover">
                            <div class="p-4">
                                <h3 class="text-lg font-bold text-gray-800">{{ $kreasi->judul_kreasi }}</h3>
                                <p class="text-gray-600 mt-2">Kategori: {{ $kreasi->kategori_kreasi ?? 'Tidak ada kategori' }}</p>
                                <a href="{{ route('edit.kreasiku', $kreasi->id) }}" class="text-green-700 hover:underline mt-4 block">Lihat Selengkapnya</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </section>
@endsection
