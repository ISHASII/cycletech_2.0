@extends('Layout.rewardapp')

@section('content')
<div class="container mx-auto py-8 px-4 lg:px-8">
    <!-- Notifikasi -->
    @if (session('success'))
        <div class="bg-green-100 border-l-4 border-hulk text-green-700 p-4 mb-6" role="alert">
            <p class="font-bold">Berhasil</p>
            <p>{{ session('success') }}</p>
        </div>
    @endif

    @if (session('error'))
        <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6" role="alert">
            <p class="font-bold">Gagal</p>
            <p>{{ session('error') }}</p>
        </div>
    @endif

    <!-- Header -->
    <div class="text-center mb-8 mt-10 pt-5">
        <h1 class="text-3xl font-bold text-gray-800 mb-2">Daftar Hadiah</h1>
        <p class="text-lg text-gray-600">Kumpulkan poin dan tukarkan dengan hadiah menarik!</p>
    </div>

    <!-- Poin Anda -->
    <div class="flex justify-center items-center bg-hulk text-white py-4 px-6 rounded-lg mb-6">
        <h2 class="text-xl font-semibold">Poin Anda: </h2>
        <span class="text-3xl font-bold ml-3">{{ $points }}</span>
    </div>

    <!-- Cards Hadiah -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($rewards as $reward)
        <div class="bg-gradient-to-b from-birumuda to-krem rounded-lg shadow-md overflow-hidden">
            <!-- Foto Hadiah -->
            @if ($reward->foto)
                <img src="{{ asset('storage/' . $reward->foto) }}" alt="Foto Reward" class="w-full h-40 object-cover">
            @else
                <div class="w-full h-40 bg-gray-200 flex items-center justify-center text-gray-500">
                    Tidak Ada Foto
                </div>
            @endif

            <!-- Detail Hadiah -->
            <div class="p-4">
                <h3 class="text-lg font-semibold text-gray-800">{{ $reward->name }}</h3>
                <p class="text-gray-600 text-sm mb-4">Poin Dibutuhkan: <span class="font-bold">{{ $reward->points_required }}</span></p>

                <!-- Tombol Tukar -->
                <form method="POST" action="{{ route('redeem.reward') }}">
                    @csrf
                    <input type="hidden" name="reward_id" value="{{ $reward->id }}">
                    <button type="submit"
                        class="w-full bg-hulk text-white py-2 px-4 rounded-lg hover:bg-oldhulk transition disabled:opacity-50"
                        {{ $points >= $reward->points_required ? '' : 'disabled' }}>
                        Tukar
                    </button>
                </form>
            </div>
        </div>
        @endforeach

        @if ($rewards->isEmpty())
        <div class="col-span-full text-center text-gray-500">
            <p>Belum ada hadiah yang tersedia.</p>
        </div>
        @endif
    </div>
</div>
@endsection
