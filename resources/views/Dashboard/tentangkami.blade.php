@extends('Layout.tentangkamiapp')

@section('content')
    <!-- Hero Section -->
    <div class="relative bg-gray-50 py-12 px-6 md:px-10">
        <div class="relative md:bg-[url('/public/images/tentangkami.webp')] bg-no-repeat bg-cover bg-center h-[400px] rounded-lg lg:overflow-show mt-12 shadow-xl">
            <div class="absolute top-32 left-4 md:top-44 md:left-6 bg-white bg-opacity-100 rounded-lg p-6 max-w-full w-[412px]">
                <div class="bg-white-200 flex items-center">
                    <img src="{{ asset('images/logo 2.webp') }}" alt="Logo" class="w-12 h-12 rounded-full mr-4">
                    <h2 class="text-2xl font-bold text-hulk">Cycle Tech</h2>
                </div>
                <p class="mt-8 text-gray-600">
                    Cycle Tech adalah platform inovatif untuk pengelolaan sampah yang cerdas dan berkelanjutan. Dengan fitur-fitur canggih, kami membantu Anda memilah, mengelola, dan mendaur ulang sampah dengan lebih mudah dan efektif, sambil berkontribusi pada lingkungan yang lebih bersih.
                </p>
            </div>
        </div>
    </div>

    <div class="max-w-6xl mx-auto text-justify text-gray-700 lg:px-10 md:px-12 md:mt-10 px-16 mb-10">
        <p class="text-lg leading-relaxed">
            Cycle Tech adalah solusi cerdas untuk pengelolaan sampah Anda. Kami menyediakan platform lengkap yang tidak hanya mengedukasi, tetapi juga menginspirasi pengelolaan sampah secara kreatif. Dengan fitur deteksi jenis sampah otomatis, Anda dapat mengunggah gambar sampah dan mendapatkan rekomendasi kreasi menarik yang dapat dibuat dari limbah tersebut.
        </p>
        <p class="mt-4 text-lg leading-relaxed">
            Selain itu, kami juga menghadirkan galeri inspirasi daur ulang untuk membantu Anda mengubah sampah menjadi barang bernilai guna, serta artikel terkini yang membahas isu-isu penting seputar pengelolaan dan teknologi daur ulang. Cycle Tech hadir untuk mempermudah pengelolaan sampah Anda sekaligus berkontribusi pada lingkungan yang lebih bersih dan berkelanjutan.
        </p>
  </div>


    <!-- Visi dan Misi -->
    <section class="bg-gradient-to-t from-krem to-birumuda py-16">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold text-gray-800 mb-8">Visi dan Misi</h2>
            <div class="flex flex-col items-center space-y-8 md:space-y-0 justify-center">
                <div class="flex flex-col items-center px-8">
                    <h3 class="text-2xl font-semibold text-hulk mb-4">Visi Kami</h3>
                    <p class="text-gray-700 text-justify w-full max-w-4xl">Menjadi platform digital terdepan yang menginspirasi dan memberdayakan masyarakat untuk mengelola sampah secara kreatif dan inovatif, demi menciptakan lingkungan yang bersih, sehat, dan berkelanjutan.</p>
                </div>
                <div class="flex flex-col items-center px-8">
                    <h3 class="text-2xl font-semibold text-hulk mb-4 mt-4">Misi Kami</h3>
                    <ul class="text-gray-700 space-y-2 list-decimal w-full max-w-4xl text-left">
                        <li>Meningkatkan kesadaran dan edukasi masyarakat tentang pentingnya pengelolaan sampah yang ramah lingkungan dan berkelanjutan.</li>
                        <li>Mengembangkan fitur-fitur inovatif yang mendukung daur ulang dan pemanfaatan kembali sampah dengan cara yang kreatif.</li>
                        <li>Memberikan informasi terkini tentang manfaat, peluang, dan nilai ekonomi dari pengelolaan sampah yang baik.</li>
                        <li>Mendorong partisipasi aktif masyarakat dalam pengelolaan sampah melalui platform yang inklusif dan mudah diakses.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <!-- Section: Tim Kami -->
    <section class="bg-white py-10">
        <div class="container mx-auto text-center px-6 md:px-32">
            <h2 class="text-3xl font-bold text-gray-800">Tentang Tim Kami</h2>
            <p class="text-gray-600 mt-4">Berikut adalah tim hebat yang bekerja di balik layar Cycle Tech.</p>
            <div class="grid grid-cols-2 lg:grid-cols-5 gap-8 mt-12">
                <a href="http://www.linkedin.com/in/salma-salsabila-568243269" target="_blank">
                <div class="flex flex-col items-center h-[300px] bg-gradient-to-b from-krem to-birumuda border-none shadow-lg p-3 rounded hover:shadow-2xl">
                    <img src="{{ asset('images/salma.webp') }}" alt="Member" class="w-36 h-36 rounded-lg object-cover">
                    <h3 class="mt-4 text-xl font-semibold text-gray-800">Salma Salsabila</h3>
                    <p class="text-gray-600">Product Manager</p>
                    <p class="text-gray-600 font-semibold">Universitas Singaperbangsa Karawang</p>
                </div>
                </a>
                <a href="https://www.linkedin.com/in/mutiazahrausma/">
                <div class="flex flex-col items-center h-[300px] bg-gradient-to-b from-krem to-birumuda border-none shadow-lg p-3 rounded hover:shadow-2xl">
                    <img src="{{ asset('images/mutia.webp') }}" alt="Member" class="w-36 h-36 rounded-lg object-cover">
                    <h3 class="mt-4 text-xl font-semibold text-gray-800">Mutia Zahra Usma</h3>
                    <p class="text-gray-600">UI/UX Designer</p>
                    <p class="text-gray-600 font-semibold">UPN "Veteran" Jakarta</p>
                </div>
                </a>
                <a href="https://www.linkedin.com/in/harrybonardo" target="_blank">
                <div class="flex flex-col items-center h-[300px] bg-gradient-to-b from-krem to-birumuda border-none shadow-lg p-3 rounded hover:shadow-2xl">
                    <img src="{{ asset('images/harry.webp') }}" alt="Member" class="w-36 h-36 rounded-lg object-cover">
                    <h3 class="mt-4 text-xl font-semibold text-gray-800">Harry Bonardo</h3>
                    <p class="text-gray-600">UI/UX Designer</p>
                    <p class="text-gray-600 font-semibold">Universitas Lampung</p>
                </div>
                </a>
                <a href="https://www.linkedin.com/in/ivan-herdianto/" target="_blank">
                <div class="flex flex-col items-center h-[300px] bg-gradient-to-b from-krem to-birumuda border-none shadow-lg p-3 rounded hover:shadow-2xl">
                    <img src="{{ asset('images/ivan.webp') }}" alt="Member" class="w-36 h-36 rounded-lg object-cover">
                    <h3 class="mt-4 text-xl font-semibold text-gray-800">Ivan Herdianto</h3>
                    <p class="text-gray-600">Front-End Developer</p>
                    <p class="text-gray-600 font-semibold">UPN "Veteran" Jawa Timur</p>
                </div>
                </a>
                <a href="https://www.linkedin.com/in/aprinia-salsabila-roiqoh-5789b31b8/" target="_blank">
                <div class="flex flex-col items-center h-[300px] bg-gradient-to-b from-krem to-birumuda border-none shadow-lg p-3 rounded hover:shadow-2xl">
                    <img src="{{ asset('images/aprin.webp') }}" alt="Member" class="w-36 h-36 rounded-lg object-cover">
                    <h3 class="mt-4 text-xl font-semibold text-gray-800">Aprinia Salsabila</h3>
                    <p class="text-gray-600">Front-End Developer</p>
                    <p class="text-gray-600 font-semibold">UPN "Veteran" Jawa Timur</p>
                </div>
                </a>
                <a href="https://www.linkedin.com/in/ilham-saputra26" target="_blank">
                <div class="flex flex-col items-center h-[300px] bg-gradient-to-b from-krem to-birumuda border-none shadow-lg p-3 rounded hover:shadow-2xl">
                    <img src="{{ asset('images/ilham.webp') }}" alt="Member" class="w-36 h-36 rounded-lg object-cover">
                    <h3 class="mt-4 text-xl font-semibold text-gray-800">Ilham Saputra</h3>
                    <p class="text-gray-600">Back-End Developer</p>
                    <p class="text-gray-600 font-semibold">Universitas Singaperbangsa Karawang</p>
                </div>
                </a>
                <a href="https://www.linkedin.com/in/anggitaardilianzfaticha" target="_blank">
                <div class="flex flex-col items-center h-[300px] bg-gradient-to-b from-krem to-birumuda border-none shadow-lg p-3 rounded hover:shadow-2xl">
                    <img src="{{ asset('images/anggita.webp') }}" alt="Member" class="w-36 h-36 rounded-lg object-cover">
                    <h3 class="mt-4 text-xl font-semibold text-gray-800">Anggita Ardilianz</h3>
                    <p class="text-gray-600">Back-End Developer</p>
                    <p class="text-gray-600 font-semibold">Institut Teknologi dan Bisnis PalComTech </p>
                </div>
                </a>
                <a href="https://www.linkedin.com/in/rizmaagustin" target="_blank">
                <div class="flex flex-col items-center h-[300px] bg-gradient-to-b from-krem to-birumuda border-none shadow-lg p-3 rounded hover:shadow-2xl">
                    <img src="{{ asset('images/rizma.webp') }}" alt="Member" class="w-36 h-36 rounded-lg object-cover">
                    <h3 class="mt-4 text-xl font-semibold text-gray-800">Rizma Agustin</h3>
                    <p class="text-gray-600">Back-End Developer</p>
                    <p class="text-gray-600 font-semibold">Universitas Nusantara PGRI Kediri</p>
                </div>
                </a>
                <a href="https://id.linkedin.com/in/velizhasandy" target="_blank">
                <div class="flex flex-col items-center h-[300px] bg-gradient-to-b from-krem to-birumuda border-none shadow-lg p-3 rounded hover:shadow-2xl">
                    <img src="{{ asset('images/velizha.webp') }}" alt="Member" class="w-36 h-36 rounded-lg object-cover">
                    <h3 class="mt-4 text-xl font-semibold text-gray-800">Velizha Sandy Kusuma</h3>
                    <p class="text-gray-600">Data Science</p>
                    <p class="text-gray-600 font-semibold">Universitas Amikom Purwokerto</p>
                </div>
                </a>
                <a href="https://id.linkedin.com/in/muhammad-danu-erlangga" target="_blank">
                <div class="flex flex-col items-center h-[300px] bg-gradient-to-b from-krem to-birumuda border-none shadow-lg p-3 rounded hover:shadow-2xl">
                    <img src="{{ asset('images/danu.webp') }}" alt="Member" class="w-36 h-36 rounded-lg object-cover">
                    <h3 class="mt-4 text-xl font-semibold text-gray-800">Muhammad Danu</h3>
                    <p class="text-gray-600">Data Science</p>
                    <p class="text-gray-600 font-semibold">Universitas Negeri Surabaya</p>
                </div>
                </a>
            </div>
        </div>
    </section>
@endsection
   
