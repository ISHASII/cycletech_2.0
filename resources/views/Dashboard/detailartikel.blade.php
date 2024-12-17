@extends('Layout.dashboardapp')

@section('content')
    <!-- Artikel Section -->
    <section class="container mx-auto px-4 lg:px-20 py-24 bg-white shadow-lg mt-16 rounded-lg">
        <!-- Breadcrumb -->
        <nav class="text-sm text-gray-600 mb-4">
            <a href="{{ route('dashboard.nasabah') }}" class="hover:underline">Beranda</a> >
            <span class="font-semibold text-gray-800">{{ $article->judul_artikel }}</span>
        </nav>

        <div class="bg-white border border-hulk rounded-lg shadow-lg overflow-hidden px-4 lg:px-8">
            <!-- Artikel Image -->
            <div class="my-8 flex justify-center">
                <img src="{{ asset('storage/' . $article->foto) }}" alt="{{ $article->judul_artikel }}" class="rounded-lg shadow-md max-w-full">
            </div>

            <!-- Artikel Header -->
            <div class="text-left">
                <p class="text-gray-500 text-sm mb-2">{{ \Carbon\Carbon::parse($article->created_at)->format('H:i, j F Y') }}</p>
                <h1 class="text-3xl font-bold text-gray-800">{{ $article->judul_artikel }}</h1>
            </div>

            <!-- Artikel Content -->
            <div class="text-gray-700 space-y-4 leading-relaxed text-justify mb-4">
                {!! nl2br(e($article->isi)) !!}
            </div>
        </div>
    </section>
@endsection

  