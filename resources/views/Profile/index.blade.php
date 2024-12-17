@extends('Layout.profileapp')

@section('content')
<section class="p-8 flex flex-col lg:flex-row gap-8 mt-16">
    <!-- Sidebar -->
    <div class="w-full h-64 lg:w-1/4 bg-white border border-hulk rounded-lg p-4">
        <h2 class="font-semibold text-xl mb-4">Profil</h2>
        <ul class="space-y-4">
            <li>
                <a href="#" class="text-hulk font-semibold">Profil Saya</a>
            </li>
            <li>
                <a href="{{ route('profile.keamanan') }}" class="text-black hover:text-old-hulk">Keamanan</a>
            </li>
            <li>
                <div class="mt-20">
                    <a href="javascript:void(0)" onclick="openOverlay()" class="text-red-600 hover:font-medium hover:text-red-700">Hapus Akun</a>
                </div>
            </li>
        </ul>
    </div>

    <!-- Profile Content -->
    <div class="w-full lg:w-3/4 bg-white border border-gray-300 rounded-lg p-6">
        <!-- Profile Image Section -->
        <div class="flex flex-col items-center lg:items-start lg:flex-row gap-4">
            <div class="flex justify-center w-24 h-24 rounded-full border overflow-hidden">
                <!-- Gambar Profil -->
                <img id="profilePreview"
                    src="{{ $user->photo ? asset('storage/' . $user->photo) : asset('images/default-profile.png') }}"
                    alt="Profile Picture"
                    class="
                    w-full h-full object-cover overflow-hidden">

            </div>

            <div class="flex space-x-4 my-9">
                <!-- Form untuk Mengupdate Foto -->
                <form action="{{ route('profile.updatePhoto') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <label class="px-4 py-2 border-2 font-semibold border-old-hulk text-hulk rounded-full hover:bg-old-hulk hover:text-white cursor-pointer">
                        <input type="file" name="photo" class="hidden" onchange="previewProfileImage(this); this.form.submit();">
                        Foto Baru
                    </label>
                </form>

            </div>
        </div>

        <!-- Divider -->
        <hr class="my-6 border-gray-300">

        <!-- Personal Information Section -->
        <div>
            <h3 class="font-semibold text-lg mb-4">Informasi Pribadi</h3>
            <div class="mb-4">
                <label class="block text-gray-700">Nama Lengkap</label>
                <input type="text" class="w-full border border-hulk rounded-lg p-2 mt-2" value="{{ $user->name }}" disabled>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Alamat Email</label>
                <input type="email" class="w-full border border-hulk rounded-lg p-2 mt-2" value="{{ $user->email }}" disabled>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700">Nomor Handphone</label>
                <input type="text" class="w-full border border-hulk rounded-lg p-2 mt-2" value="{{ $user->phone }}" disabled>
            </div>
        </div>
    </div>


        <div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 items-center justify-center flex hidden">
            <div class="bg-white p-6 rounded-md shadow-md text-center w-11/12 sm:w-80">
                <h2 class="text-lg sm:text-xl font-semibold mb-4">Yakin Menghapus Akun ini?</h2>
                <form id="delete-account-form" action="{{ route('profile.deleteAccount') }}" method="POST">
                    @csrf
                    <div class="flex justify-center space-x-4">
                        <button type="submit" class="px-4 py-2 border-2 border-hulk text-hulk rounded hover:bg-red-100">
                            Ya
                        </button>
                        <button type="button" onclick="closeOverlay()" class="px-4 py-2 border-2 border-red-600 text-red-600 rounded hover:bg-green-100">
                            Tidak
                        </button>
                    </div>
                </form>
            </div>
        </div>
</section>

<script>
    function openOverlay() {
        const overlay = document.getElementById('overlay');
        overlay.classList.remove('hidden');
    }

    function closeOverlay() {
        const overlay = document.getElementById('overlay');
        overlay.classList.add('hidden');
    }

    function previewProfileImage(input) {
        var file = input.files[0];
        if (file) {
            var reader = new FileReader();
            reader.onload = function (e) {
                // Update gambar pratinjau dengan gambar yang dipilih
                document.getElementById('profilePreview').src = e.target.result;
            };
            reader.readAsDataURL(file);
        }
    }
</script>
@endsection
