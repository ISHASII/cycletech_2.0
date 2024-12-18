@extends('Layout.kelolasampahapp')

@section('content')
    <!-- Hero Section -->
    <section class="bg-white py-12 mt-12">
        <div class="container mx-auto flex flex-col md:flex-row items-center justify-center px-32">
            <div class="md:w-1/2 space-y-4 text-center md:text-left">
                <h1 class="text-xl lg:text-4xl font-bold text-gray-800">Kelola Sampahmu!</h1>
                <p class="text-gray-700 text-sm lg:text-xl">Menjadi lebih hijau bukan hanya tren, tetapi juga kebutuhan. Daur ulang lebih mudah dengan layanan kami.</p>
            </div>
            <div class="md:w-1/2 flex justify-center">
                <img src="{{ asset('images/kelolasampah 1.png') }}" alt="Hero Image" class="rounded-lg">
            </div>
        </div>
    </section>

    <!-- Keuntungan -->
    <section class="bg-white py-16 px-20 lg:px-52">
        <div class="container mx-auto text-center">
            <h2 class="text-3xl font-bold text-gray-800 mb-12">Keuntungan</h2>
            <div class="grid grid-cols-2 gap-2">
                <div class="bg-gradient-to-r from-birumuda to-krem text-right bg-blue-50 p-6 rounded-lg shadow">
                    <h3 class="text-md lg:text-xl font-semibold text-green-600">Sampah Terkelola</h3>
                    <p class="text-gray-700 mt-2 text-sm lg:text-md ">Sampah akan dikelola secara bertanggung jawab dan mengurangi jumlah sampah di TPA</p>
                </div>
                <div class="bg-gradient-to-r from-krem to-birumuda text-left bg-blue-50 p-6 rounded-lg shadow">
                    <h3 class="text-md lg:text-xl font-semibold text-green-600">Bangun Hubungan</h3>
                    <p class="text-gray-700 mt-2 text-sm lg:text-md">Jalin hubungan yang baik dengan Cycle Tech dan mitra lainnya.</p>
                </div>
                <div class="bg-gradient-to-r from-birumuda to-krem text-right bg-blue-50 p-6 rounded-lg shadow">
                    <h3 class="text-md lg:text-xl font-semibold text-green-600">Mudah</h3>
                    <p class="text-gray-700 mt-2 text-sm lg:text-md">Cukup pilah dan bersihkan sampah Anda dan setorkan ke mitra Cycle Tech terdekat.</p>
                </div>
                <div class="bg-gradient-to-r from-krem to-birumuda text-left bg-blue-50 p-6 rounded-lg shadow">
                    <h3 class="text-md lg:text-xl font-semibold text-green-600 ">Sejahterakan Pengelola Sampah</h3>
                    <p class="text-gray-700 mt-2 text-sm lg:text-md">Sampah yang dipilah dengan bijak akan memudahkan pekerjaan pengelola sampah</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Cara Mengirim -->
    <section class="bg-white py-16">
        <div class="container mx-auto text-center px-10">
            <h2 class="text-3xl font-bold text-gray-800 mb-12">Cara Mengirim</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="space-y-4">
                    <i class="bi bi-box-seam text-4xl text-green-600"></i>
                    <h3 class="font-semibold">Pilah dan Kemas</h3>
                    <p>Pilah dan pastikan sampah dalam keadaan bersih dan kering. Kemas sampah dengan baik dan aman.</p>
                </div>
                <div class="space-y-4">
                    <i class="bi bi-truck text-4xl text-green-600"></i>
                    <h3 class="font-semibold">Kirim Sampah</h3>
                    <p>Kirimkan sampah dengan datang langsung ke tempat pengelolaan sampah terdekat.</p>
                </div>
                <div class="space-y-4">
                    <i class="bi bi-recycle text-4xl text-green-600"></i>
                    <h3 class="font-semibold">Sampah Terkelola</h3>
                    <p>Sampah yang telah dikirimkan akan dikelola secara bertanggung jawab oleh tempat pengelola sampah tersebut</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Cara Menyiapkan Sampah -->
   <section class="bg-gradient-to-b from-birumuda to-krem py-16">
    <div class="mx-auto p-8 px-6 md:px-12 lg:px-32">
        <h1 class="text-2xl font-bold text-center mb-6">Cara Menyiapkan Sampah</h1>
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center">
            <!-- Left Section -->
            <div class="flex-1 mb-6 md:mb-0 md:mr-4">
                <div class="flex items-start text-right mb-4">
                    <div class="mb-8 mr-8">
                        <h2 class="font-bold">Bersihkan Sampah</h2>
                        <p>Pastikan sampah yang akan disetorkan dalam keadaan bersih untuk menghindari penyebaran kuman dan penyakit.</p>
                    </div>
                    <div class="text-black font-bold text-5xl w-12 h-12 flex items-center justify-center mr-4">
                        1
                    </div>
                </div>
                <div class="flex items-start mb-4 text-right">
                    <div class="mr-8">
                        <h2 class="font-bold">Pastikan Sampah Kering</h2>
                        <p>Sampah yang akan disetorkan harus dalam keadaan kering, tidak basah, maupun lembab.</p>
                    </div>
                    <div class="text-black font-bold text-5xl w-12 h-12 flex items-center justify-center mr-4">
                        2
                    </div>
                </div>
            </div>

            <!-- Center Image (only visible on large screens) -->
            <div class="justify-center mt-6 hidden lg:block">
                <img src="{{ asset('images/kelolasampah 2.png') }}" alt="Ilustrasi persiapan sampah" class="w-48 h-48">
            </div>

            <!-- Right Section -->
            <div class="flex-1 mb-6 md:mb-0 md:ml-4">
                <div class="flex items-end text-left mb-4">
                    <div class="text-black font-bold text-5xl w-12 h-12 flex items-center justify-center mb-8 ml-4">
                        3
                    </div>
                    <div class="ml-8">
                        <h2 class="font-bold">Remas dan Lipat</h2>
                        <p>Remas dan lipat sampah untuk memaksimalkan ruang dan volume paket.</p>
                    </div>
                </div>
                <div class="flex items-end mb-4 text-left">
                    <div class="text-black font-bold text-5xl w-12 h-12 flex items-center justify-center ml-4">
                        4
                    </div>
                    <div class="ml-8">
                        <h2 class="font-bold">Kemas Rapi</h2>
                        <p>Kemas sampah menggunakan kardus atau kemasan lain. Jangan lupa tulis kode SSA pada paket.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- Lokasi -->
    <div class="mx-auto bg-white-50 p-6 px-6 md:px-24 lg:px-32 text-center">
        <h1 class="text-2xl font-bold mb-4">Lokasi Pengelola Sampah</h1>
        <p class="mb-4">Lokasi mitra drop point yang bisa Anda jadikan sebagai titik pengiriman sampah</p>

        <!-- button -->
        <div class="flex flex-col items-center mb-6">
            <!-- Container for Buttons -->
            <div class="flex flex-wrap justify-center gap-4 mt-4">
                <button class="bg-hulk hover:bg-gradient-to-r from-black to-old-hulk text-white px-4 py-2 rounded-3xl w-24" onclick="toggleDetails('jakarta')">
                Jakarta
                </button>
                <button class="bg-hulk hover:bg-gradient-to-r from-black to-old-hulk text-white px-4 py-2 rounded-3xl w-24" onclick="toggleDetails('bogor')">
                Bogor
                </button>
                <button class="bg-hulk hover:bg-gradient-to-r from-black to-old-hulk text-white px-4 py-2 rounded-3xl w-24" onclick="toggleDetails('bekasi')">
                Bekasi
                </button>
                <button class="bg-hulk hover:bg-gradient-to-r from-black to-old-hulk text-white px-4 py-2 rounded-3xl w-24" onclick="toggleDetails('bandung')">
                Bandung
                </button>
                <button class="bg-hulk hover:bg-gradient-to-r from-black to-old-hulk text-white px-4 py-2 rounded-3xl w-24" onclick="toggleDetails('gresik')">
                Gresik
                </button>
                <button class="bg-hulk hover:bg-gradient-to-r from-black to-old-hulk text-white px-4 py-2 rounded-3xl w-24" onclick="toggleDetails('bali')">
                Bali
                </button>
                <button class="bg-hulk hover:bg-gradient-to-r from-black to-old-hulk text-white px-4 py-2 rounded-3xl w-24" onclick="toggleDetails('jambi')">
                Jambi
                </button>
            </div>
        </div>


        <!-- jakarta -->
        <div id="detailsjkt" class="space-y-4 text-left hidden">
            <div class="border p-4 rounded-lg">
                <div class="flex flex-col md:flex-row gap-6">
                    <div class="w-full md:w-1/3 flex justify-center items-center xl:px-24">
                        <img src="{{ asset('images/kelola apsi.png') }}" class="w-full h-48 object-contain">
                    </div>
                    <div class="w-full md:w-2/3">
                        <h2 class="text-xl font-bold mb-2">Asosiasi Pengusaha Sampah Indonesia (APSI)</h2>
                        <p>APSI merupakan perkumpulan para pengusaha yang bergerak dalam bidang persampahan diantaranya, pengumpul pengolah material daur ulang, operator jasa angkutan sampah, operator jasa pengolahan sampah, operator pengolah sampah residu waste to energy, operator transportasi L3S, konsultan pengelolaan sampah di yang tersebar diseluruh Indonesia.</p>
                        <p class="mt-6"><a href="https://apsiumkmsampah.id/" class="text-underline font-bold text-hulk hover:text-old-hulk mt-6" target="_blank">
                            Go To Site 
                            <i class="bi bi-arrow-right"></i>
                        </a></p>
                    </div>
                </div>
            </div>
            <div class="border p-4 rounded-lg">
                <div class="flex flex-col md:flex-row gap-6">
                    <div class="w-full md:w-1/3 flex justify-center items-center xl:px-24">
                        <img src="{{ asset('images/kelola adupi.png') }}" class="w-full h-48 object-contain">
                    </div>
                    <div class="w-full md:w-2/3">
                        <h2 class="text-xl font-bold mb-2">Asosiasi Daur Ulang Plastik Indonesia (ADUPI)</h2>
                        <p>ADUPI didirikan pada tahun 2015 dan terdaftar sebagai organisasi nirlaba dengan lebih dari 500 anggota, membentuk ekosistem rantai daur ulang plastik terbesar di Indonesia dari hulu ke hilir, seperti kelompok pengumpul plastik, bank sampah, hingga industri daur ulang. Organisasi ini juga melibatkan akademisi dan praktisi aktif daur ulang plastik di Indonesia.</p>
                        <p class="mt-6"><a href="https://www.adupi.org/" class="text-underline font-bold text-hulk hover:text-old-hulk mt-6" target="_blank">
                            Go To Site 
                            <i class="bi bi-arrow-right"></i>
                        </a></p>
                    </div>
                </div>
            </div>
            <div class="border p-4 rounded-lg">
                <div class="flex flex-col md:flex-row gap-6">
                    <div class="w-full md:w-1/3 flex justify-center items-center xl:px-24">
                        <img src="{{ asset('images/kelola ibcsd.png') }}" class="w-full h-48 object-contain">
                    </div>
                    <div class="w-full md:w-2/3">
                        <h2 class="text-xl font-bold mb-2">Indonesia Business Council for Sustainable Development (IBCSD)</h2>
                        <p>IBCSD (Indonesia Business Council for Sustainable Development) adalah asosiasi perusahaan yang berkomitmen untuk mempromosikan pembangunan berkelanjutan di Indonesia melalui pertumbuhan ekonomi berkelanjutan, keseimbangan lingkungan, dan kemajuan sosial. Diresmikan pada April 2011, IBCSD merupakan mitra global dari WBCSD (World Business Council for Sustainable Development) dan telah mengumpulkan lebih dari 40 perusahaan pada 2022 untuk bersama-sama mendorong inisiatif keberlanjutan di berbagai sektor industri di Indonesia.</p>
                        <p class="mt-6"><a href="https://ibcsd.or.id/" class="text-underline font-bold text-hulk hover:text-old-hulk mt-6" target="_blank">
                            Go To Site 
                            <i class="bi bi-arrow-right"></i>
                        </a></p>
                    </div>
                </div>
            </div>
            <div class="border p-4 rounded-lg">
                <div class="flex flex-col md:flex-row gap-6">
                    <div class="w-full md:w-1/3 flex justify-center items-center xl:px-24">
                        <img src="{{ asset('images/kelola repurpose.png') }}" class="w-full h-48 object-contain">
                    </div>
                    <div class="w-full md:w-2/3">
                        <h2 class="text-xl font-bold mb-2">rePurpose Global</h2>
                        <p>rePurpose Global adalah platform aksi plastik terkemuka dunia yang menyatukan merek, konsumen, inovator, dan pembuat kebijakan untuk melawan krisis sampah plastik. Melalui solusi di ekonomi sirkular, rePurpose telah membantu lebih dari 500 perusahaan mengukur dan mengurangi jejak plastik mereka. Hingga kini, rePurpose telah mengelola 30 juta kilogram sampah plastik, memberdayakan masyarakat pesisir di Amerika, Afrika, dan Asia, serta mendukung ribuan pekerja pengelola sampah yang terpinggirkan.</p>
                        <p class="mt-6"><a href="https://repurpose.global/" class="text-underline font-bold text-hulk hover:text-old-hulk mt-6" target="_blank">
                            Go To Site 
                            <i class="bi bi-arrow-right"></i>
                        </a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bogor -->
        <div id="detailsbgr" class="space-y-4 text-left hidden">
            <div class="border p-4 rounded-lg">
                <div class="flex flex-col md:flex-row gap-6">
                    <div class="w-full md:w-1/3 flex justify-center items-center xl:px-24">
                        <img src="{{ asset('images/universal eco.webp') }}" class="w-full h-48 object-contain">
                    </div>
                    <div class="w-full md:w-2/3">
                        <h2 class="text-xl font-bold mb-2">Universal Eco</h2>
                        <p>Universal Eco Pasific merupakan perusahaan yang peduli terhadap lingkungan dengan menawarkan layanan jasa pengelolaan limbah yang bertanggung jawab serta produksi pipa yang berkualitas dan berbahan baku ramah lingkungan. Misi kami adalah membantu mewujudkan Indonesia bebas limbah serta mendukung sektor instalasi perpipaan bagi bisnis dan industri. Didukung oleh tenaga kerja yang berpengalaman dan mesin berteknologi tinggi, Kami berkomitmen untuk senantiasa mengutamakan kepuasan dan kepercayaan pelanggan serta berkontribusi menjadikan lingkungan yang baik untuk Indonesia.</p>
                        <p class="mt-6"><a href="https://www.universaleco.id/" class="text-underline font-bold text-hulk hover:text-old-hulk mt-6" target="_blank">
                            Go To Site 
                            <i class="bi bi-arrow-right"></i>
                        </a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bekasi -->
        <div id="detailsbks" class="space-y-4 text-left hidden">
            <div class="border p-4 rounded-lg">
                <div class="flex flex-col md:flex-row gap-6">
                    <div class="w-full md:w-1/3 flex justify-center items-center xl:px-24">
                        <img src="{{ asset('images/waste4change.webp') }}" class="w-full h-48 object-contain">
                    </div>
                    <div class="w-full md:w-2/3">
                        <h2 class="text-xl font-bold mb-2">Waste 4 Change</h2>
                        <p>Menjadi Pemimpin dalam Menyediakan Solusi Pengelolaan Sampah yang Bertanggung Jawab dengan Perubahan Ekosistem Pengelolaan Sampah yang Berlandaskan Kolaborasi dan Teknologi Menuju Penerapan Ekonomi Melingkar (Circular Economy) dan Indonesia Bebas Sampah.</p>
                        <p class="mt-6"><a href="https://waste4change.com/" class="text-underline font-bold text-hulk hover:text-old-hulk mt-6" target="_blank">
                            Go To Site 
                            <i class="bi bi-arrow-right"></i>
                        </a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bandung -->
        <div id="detailsbdg" class="space-y-4 text-left hidden">
            <div class="border p-4 rounded-lg">
                <div class="flex flex-col md:flex-row gap-6">
                    <div class="w-full md:w-1/3 flex justify-center items-center xl:px-24">
                        <img src="{{ asset('images/gf.webp') }}" class="w-full h-48 object-contain">
                    </div>
                    <div class="w-full md:w-2/3">
                        <h2 class="text-xl font-bold mb-2">Greenation Foundation</h2>
                        <p>Greeneration Foundation or Yayasan Greeneration Indonesia is an environmental NGO focusing on sustainable consumption and production in Indonesia. In our effort to restore our earth, we conduct multistakeholder partnership with government agencies, private sector, other NGOs and CSOs, academics, media, as well as individuals such as students and homemakers.</p>
                        <p class="mt-6"><a href="https://greeneration.org/" class="text-underline font-bold text-hulk hover:text-old-hulk mt-6" target="_blank">
                            Go To Site 
                            <i class="bi bi-arrow-right"></i>
                        </a></p>
                    </div>
                </div>
            </div>
            <div class="border p-4 rounded-lg">
                <div class="flex flex-col md:flex-row gap-6">
                    <div class="w-full md:w-1/3 flex justify-center items-center xl:px-24">
                        <img src="{{ asset('images/ypbb.webp') }}" class="w-full h-48 object-contain">
                    </div>
                    <div class="w-full md:w-2/3">
                        <h2 class="text-xl font-bold mb-2">YPBB</h2>
                        <p>YPBB adalah organisasi non-profit dan non-pemerintah, yang selama ini mendedikasikan diri untuk membantu masyarakat mencapai kualitas hidup umat manusia yang tinggi, untuk generasi sekarang dan terlebih untuk anak cucu kita melalui gaya hidup selaras dengan alam. YPBB telah dikenal dengan kepemimpinannya dalam isu hidup organis, khususnya dengan kampanye utamanya yaitu Zero Waste.</p>
                        <p class="mt-6"><a href="https://ypbb.web.id/" class="text-underline font-bold text-hulk hover:text-old-hulk mt-6" target="_blank">
                            Go To Site 
                            <i class="bi bi-arrow-right"></i>
                        </a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Gresik -->
        <div id="detailsgrs" class="space-y-4 text-left hidden">
            <div class="border p-4 rounded-lg">
                <div class="flex flex-col md:flex-row gap-6">
                    <div class="w-full md:w-1/3 flex justify-center items-center xl:px-24">
                        <img src="{{ asset('images/ecoton.webp') }}" class="w-full h-48 object-contain">
                    </div>
                    <div class="w-full md:w-2/3">
                        <h2 class="text-xl font-bold mb-2">Ecoton</h2>
                        <p>Ecoton aktif dalam mendalami kajian dan riset ilmiah terkait pencemaran yang terdapat di sungai. Yayasan ini berdiri secara independen yang aktif dalam penelitian lingkungan hidup dan banyak melakukan publikasi sebagai bentuk edukasi kepada masyarakat atas pentingnya menjaga ekosistem sungai. Ecoton memiliki laboratorium ekologi yang dapat mendukung kajian ilmiah tentang pemantauan kualitas ekosistem perairan.</p>
                        <p class="mt-6"><a href="https://ecoton.or.id/" class="text-underline font-bold text-hulk hover:text-old-hulk mt-6" target="_blank">
                            Go To Site 
                            <i class="bi bi-arrow-right"></i>
                        </a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bali -->
        <div id="detailsbali" class="space-y-4 text-left hidden">
            <div class="border p-4 rounded-lg">
                <div class="flex flex-col md:flex-row gap-6">
                    <div class="w-full md:w-1/3 flex justify-center items-center xl:px-24">
                        <img src="{{ asset('images/Delterra.webp') }}" class="w-full h-48 object-contain">
                    </div>
                    <div class="w-full md:w-2/3">
                        <h2 class="text-xl font-bold mb-2">Delterra</h2>
                        <p>Our mission is to redesign human systems for the good of people and the planet by developing innovative, scalable solutions. At Delterra, we focus on the world's most complex systemic environmental challenges, where incentives, information, and infrastructure are misaligned, making them appear too hard, too complex, or too costly to fix. To start, we're tackling the broken recycling system in the global South.</p>
                        <p class="mt-6"><a href="https://delterra.org/" class="text-underline font-bold text-hulk hover:text-old-hulk mt-6" target="_blank">
                            Go To Site 
                            <i class="bi bi-arrow-right"></i>
                        </a></p>
                    </div>
                </div>
            </div>
            <div class="border p-4 rounded-lg">
                <div class="flex flex-col md:flex-row gap-6">
                    <div class="w-full md:w-1/3 flex justify-center items-center xl:px-24">
                        <img src="{{ asset('images/nexus3.webp') }}" class="w-full h-48 object-contain">
                    </div>
                    <div class="w-full md:w-2/3">
                        <h2 class="text-xl font-bold mb-2">Nexus3 Foundation</h2>
                        <p>Nexus Foundation for Environmental, Health, and Development atau Nexus3 Foundation (sebelumnya dikenal sebagai Balifokus Foundation) bekerja untuk melindungi masyarakat publik, terutama populasi yang rentan, dampak dari pembangunan pada kesehatan dan lingkungan masyarakat. Nexus3 bekerja menuju masa depan yang adil, bebas beracun, dan hidup berkelanjutan.</p>
                        <p class="mt-6"><a href="https://www.nexus3foundation.org/" class="text-underline font-bold text-hulk hover:text-old-hulk mt-6" target="_blank">
                            Go To Site 
                            <i class="bi bi-arrow-right"></i>
                        </a></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Jambi -->
        <div id="detailsjmb" class="space-y-4 text-left hidden">
            <div class="border p-4 rounded-lg">
                <div class="flex flex-col md:flex-row gap-6">
                    <div class="w-full md:w-1/3 flex justify-center items-center xl:px-24">
                        <img src="{{ asset('images/cwmi.webp') }}" class="w-full h-48 object-contain">
                    </div>
                    <div class="w-full md:w-2/3">
                        <h2 class="text-xl font-bold mb-2">Center of Waste Management Indonesia</h2>
                        <p>CWMI's core projects and activities encompass a wide range of waste treatment technologies, including hydrothermal and pyrolysis technologies that convert waste into valuable products like briquette fuel, fertilizer, and animal feed. The center also provides consulting services, data management, and education programs to support sustainable waste management practices across Indonesia.</p>
                        <p class="mt-6"><a href="https://cwm.or.id/" class="text-underline font-bold text-hulk hover:text-old-hulk mt-6" target="_blank">
                            Go To Site 
                            <i class="bi bi-arrow-right"></i>
                        </a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
    function toggleDetails(city) {
      // Simpan semua elemen detail dalam sebuah array
      const details = {
          jakarta: document.getElementById('detailsjkt'),
          bogor: document.getElementById('detailsbgr'),
          bekasi: document.getElementById('detailsbks'),
          bandung: document.getElementById('detailsbdg'),
          gresik: document.getElementById('detailsgrs'),
          bali: document.getElementById('detailsbali'),
          jambi: document.getElementById('detailsjmb')
      };

      // Simpan semua tombol dalam sebuah array
      const buttons = {
          jakarta: document.querySelector('button[onclick="toggleDetails(\'jakarta\')"]'),
          bogor: document.querySelector('button[onclick="toggleDetails(\'bogor\')"]'),
          bekasi: document.querySelector('button[onclick="toggleDetails(\'bekasi\')"]'),
          bandung: document.querySelector('button[onclick="toggleDetails(\'bandung\')"]'),
          gresik: document.querySelector('button[onclick="toggleDetails(\'gresik\')"]'),
          bali: document.querySelector('button[onclick="toggleDetails(\'bali\')"]'),
          jambi: document.querySelector('button[onclick="toggleDetails(\'jambi\')"]')
      };

      // Loop melalui semua elemen detail dan sembunyikan
      for (const key in details) {
          if (key !== city) {
              details[key].classList.add('hidden');
              buttons[key].classList.remove('bg-gradient-to-r', 'from-black', 'to-old-hulk');  // Atau ganti dengan warna latar belakang yang Anda inginkan
          }
      }

      // Toggle visibility dari elemen yang diklik
      if (details[city].classList.contains('hidden')) {
          details[city].classList.remove('hidden');
          buttons[city].classList.add('bg-gradient-to-r', 'from-black', 'to-old-hulk');  // Menambahkan background saat detail ditampilkan
      } else {
          details[city].classList.add('hidden');
          buttons[city].classList.remove('bg-gradient-to-r', 'from-black', 'to-old-hulk');  // Menghapus background saat detail disembunyikan
      }
  }

    </script>
@endsection

