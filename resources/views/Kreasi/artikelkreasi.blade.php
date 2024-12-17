@extends('Layout.kreasiapp')

@section('content')
    <!-- artikel -->
    <div class="max-w-3xl mx-auto p-4 mt-24">
        <!-- Breadcrumb -->
        <nav class="text-lg text-gray-600 mb-4">
            <a href="{{ route('kreasi')}}" class="hover:underline">Kreasi</a> >
            <span class="text-gray-800">{{ $kreasi->judul_kreasi }}</span>
        </nav>
        <!-- Main Card -->
        <div class="max-w-4xl mx-auto p-6 bg-white border border-hulk rounded-lg shadow-lg ">

            <!-- Header Image -->
            <div class="flex justify-center mb-6">
                <img src="{{ asset('storage/' . $kreasi->foto_kreasi) }}" alt="{{ $kreasi->judul_kreasi }}" class="w-40 h-40 rounded-full border-4 border-hulk shadow-lg">
            </div>

            <!-- Content -->
            <div class="max-w-3xl mx-auto py-5">
                <!-- Judul -->
                <h1 class="text-2xl font-bold text-green-700 mb-4 text-center">{{ $kreasi->judul_kreasi }}</h1>

                <!-- Informasi Detail -->
                <div class="text-gray-600 space-y-2">
                    <!-- Penulis -->
                    <div>
                        <span class="font-semibold text-black">Penulis:</span> {{ $kreasi->author }}
                    </div>

                    <!-- Kategori -->
                    <div>
                        <span class="font-semibold text-black">Kategori:</span> {{ $kreasi->kategori_kreasi ?? 'Kategori tidak ditemukan' }}
                    </div>

                    <!-- Tanggal -->
                    <div>
                        <span class="font-semibold text-black">Diterbitkan:</span>
                        {{ \Carbon\Carbon::parse($kreasi->tanggal)->format('d M Y') }}
                    </div>
                </div>
            </div>

            <!-- Alat dan Bahan -->
            <h2 class="text-lg font-semibold text-hulk mb-3">Alat dan Bahan:</h2>
            <ul class="list-disc pl-6 text-gray-700 mb-6">
                {!! nl2br(e($kreasi->alat_bahan)) !!}
            </ul>

            <!-- Langkah-Langkah -->
            <h2 class="text-lg font-semibold text-hulk mb-3">Langkah-langkah:</h2>
            <ol class="list-decimal pl-6 text-gray-700">
                {!! nl2br(e($kreasi->langkah)) !!}
            </ol>
        </div>
    </div>

    <!-- Similar Creations Section -->
    <div class="px-40 mb-6">
    @if($kreasiSerupa->isNotEmpty())
        <h2 class="flex justify-center text-center text-2xl font-extrabold text-gray-800 mb-4 mt-8">Kreasi Serupa</h2>
        <div class="flex flex-col lg:flex-row justify-center items-center gap-8 mt-12 hover:outerline-old-hulk ">
            @foreach($kreasiSerupa->take(2) as $item)
                <div class="bg-gradient-to-b from-birumuda border hover:border-old-hulk to-krem p-6 rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300 w-[300px] h-[400px]">
                    <a href="{{ route('artikel.kreasi', $item->id) }}">
                        <h3 class="text-md lg:text-xl font-bold text-gray-800 mb-2">{{ $item->judul_kreasi }}</h3>
                        <img src="{{ asset('storage/' . $item->foto_kreasi) }}" alt="{{ $item->judul_kreasi }}" class="w-full h-48 object-cover rounded-t-lg overlay:hidden">
                        <p class="text-gray-600 mt-2">Oleh {{ $item->author }}</p>
                    </a>
                </div>
            @endforeach
        </div>
        @else
        <p class="text-center text-gray-600 mt-8">Tidak ada kreasi serupa ditemukan.</p>
    @endif
    </div>
@endsection
    