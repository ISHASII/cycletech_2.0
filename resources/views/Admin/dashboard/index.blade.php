@extends('Admin.layout.app')

@section('title', 'Dashboard')

@section('content')
    <h1 class="text-3xl lg:text-5xl font-bold m-4 lg:m-6">Dashboard</h1>
    <div class="flex flex-col ">
        <!-- Stats -->
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 lg:gap-6 m-4 lg:m-0">
            <div class="bg-white p-4 shadow rounded-lg text-center border-solid border-2 border-hulk ">
                <h2 class="text-lg font-medium">Total Pengguna</h2>
                <p class="mt-2 text-xl font-bold">{{ $totalPengguna }}</p>
            </div>
            <div class="bg-white p-4 shadow rounded-lg text-center border-solid border-2 border-hulk">
                <h2 class="text-lg font-medium">Total Kreasi</h2>
                <p class="mt-2 text-xl font-bold">{{ $totalKreasi }}</p>
            </div>
        </div>
    </div>
@endsection