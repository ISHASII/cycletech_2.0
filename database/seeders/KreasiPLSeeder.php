<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kreasi;

class KreasiPLSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Kreasi::create([
            'judul_kreasi' => 'Crow dari Cangkir Plastik',
            'foto_kreasi' => 'kreasi_images/PL_01.jpg', 
            'kategori_kreasi' => 'Plastic',
            'author' => 'Rizma',
            'tanggal' => '2024-10-21',
            'alat_bahan' => <<<EOT
        1. 2 cangkir plastik kecil (cangkir kamar mandi, cangkir kertas atau busa juga bisa digunakan)
        2. 2 bola kapas
        3. 2 mata wiggle ukuran sedang
        4. 1 kancing merah
        5. Potongan kecil busa kerajinan oranye
        6. Potongan kecil kertas konstruksi oranye
        7. Cat akrilik: hitam dan goldenrod
        8. Gunting
        9. Lem kerajinan putih
        EOT,
            'langkah' => <<<EOT
        1. Cat satu cangkir dengan warna hitam dan cangkir lainnya dengan warna goldenrod. Diamkan untuk mengering.
        
        2. Potong segitiga dari busa kerajinan oranye untuk membuat paruh.
        
        3. Potong bentuk hati dari kertas konstruksi oranye untuk membuat kaki.
        
        4. Setelah cat kering, gunakan gunting untuk memotong celah tipis (fringe) sepanjang setengah cangkir goldenrod, kelilingi seluruh bagian cangkir. Tekuk 'fringe' ke atas untuk membentuk topi.
        
        5. Balikkan topi dan masukkan 2 bola kapas ke dalam cangkir. Tempelkan topi ke bagian bawah cangkir hitam yang sudah dicat. Diamkan hingga kering.
        
        6. Tempelkan 2 mata wiggle dan paruh pada bagian bawah topi di cangkir.
        
        7. Tempelkan kancing merah di bagian depan topi.
        
        8. Tempelkan kaki berbentuk hati pada bagian pembukaan cangkir hitam, tekuk kertas konstruksi ke sisi cangkir sehingga hanya 'kaki' yang menonjol keluar.
        
        9. Hasil Akhir: Sebuah burung gagak lucu siap untuk dipamerkan!
        EOT
        ]);
        
        Kreasi::create([
            'judul_kreasi' => 'Monster dari Tutup Plastik',
            'foto_kreasi' => 'kreasi_images/PL_02.jpg',
            'kategori_kreasi' => 'Plastic',
            'author' => 'Anggita',
            'tanggal' => '2024-10-22',
            'alat_bahan' => <<<EOT
        1. Tutup plastik dari botol susu atau jus
        2. Mata googly
        3. Busaf atau kertas konstruksi
        4. Kawat chenille (opsional)
        5. Lem kerajinan putih
        6. Spidol hitam
        7. Gunting
        EOT,
            'langkah' => <<<EOT
        1. Siapkan tutup plastik dan ide wajah monster! Kamu bisa menggambar beberapa contoh wajah di atas kertas, atau biarkan anak-anak berimajinasi dan membuat desain mereka sendiri.
        
        2. Tempatkan mata googly terlebih dahulu. Setelah kamu puas dengan posisinya, tempelkan dengan lem.
        
        3. Selanjutnya, buat mulut monster. Potong mulut dari busa kerajinan atau kertas konstruksi, dan gunakan spidol hitam untuk menggambar garis dan gigi.
        
        4. Tempelkan bagian mulut yang sudah dipotong pada tutup plastik dengan lem.
        
        5. Jika suka, potong kawat chenille kecil untuk membuat alis dan tempelkan di bagian atas tutup plastik.
        
        6. Untuk anak-anak yang lebih kecil, kamu bisa hanya menempelkan mata googly dan menggambar mulut dengan spidol atau pena cat putih.
        
        7. Hasil Akhir: Monster dari tutup plastik siap dipamerkan atau bahkan digunakan sebagai magnet untuk lemari es!
        EOT
        ]);
        

        Kreasi::create([
            'judul_kreasi' => 'Bunga dari Botol Air Plastik',
            'foto_kreasi' => 'kreasi_images/PL_03.jpg',
            'kategori_kreasi' => 'Plastic',
            'author' => 'Sonia',
            'tanggal' => '2024-10-23',
            'alat_bahan' => <<<EOT
        1. Botol air plastik ukuran sekali pakai dengan tutup
        2. Lem kerajinan putih
        3. Gunting
        4. Pasir atau tanah
        5. Kerikil atau batu kecil
        6. Sedotan atau ranting kecil
        EOT,
            'langkah' => <<<EOT
        1. Lepaskan label dan tutup botol, tetapi jangan dibuang! Kita akan menggunakan seluruh bagian botol. Jika botolmu tidak ada label, kamu bisa menggunakan kertas sisa untuk menggantinya.
        
        2. Potong botol menjadi dua bagian, sisakan setengah botol untuk bunga. Potong celah sekitar satu inci di bagian atas botol, sehingga kamu akan memiliki 8 kelopak. Lipat kelopak-kelopak itu keluar.
        
        3. Pasang tutup botol pada bagian atas botol. Oleskan lem putih ke tutup dan masukkan sedotan atau ranting ke dalam lem. Setelah itu, bola kertas bekas botol dan letakkan di sekitar sedotan untuk memberikan kestabilan.
        
        4. Isi bagian bawah botol dengan pasir atau tanah sekitar 1.5 hingga 2 inci, lalu rapatkan sedikit. Masukkan ujung sedotan ke dalam pasir atau tanah tersebut. Tambahkan kerikil atau batu kecil di atasnya untuk menjaga agar sedotan (batang bunga) tetap stabil.
        
        5. Opsional: Jika suka, kamu bisa memotong kain menjadi strip kecil untuk menghias kelopak bunga dan pot bunga. Kamu juga bisa merapikan kelopak dengan memangkas ujungnya menggunakan gunting.
        
        Hasil Akhir: Bunga botol plastik yang indah siap untuk dijadikan dekorasi atau hadiah unik!
        EOT
        ]);
        
        Kreasi::create([
            'judul_kreasi' => 'Spinner Angin dari Botol Plastik Daur Ulang',
            'foto_kreasi' => 'kreasi_images/PL_04.jpg',
            'kategori_kreasi' => 'Plastic',
            'author' => 'Hermansyah',
            'tanggal' => '2024-10-24',
            'alat_bahan' => <<<EOT
        1. Botol plastik 1 liter
        2. Duck Tape atau selotip listrik berwarna
        3. Pisau kotak atau pisau kerajinan
        4. Gunting
        5. Snap swivel (alat kait untuk memancing)
        6. Kertas klip yang dilapisi (coated paper clip)
        7. Benang pancing (fishing line)
        EOT,
            'langkah' => <<<EOT
        1. Siapkan Botol: Cuci botol plastik dan lepaskan labelnya. Tutupi bagian tengah botol dengan tape. Kamu bisa memotong tape warna berbeda menjadi strip untuk membuat efek garis-garis seperti yang ada pada contoh.
        
        2. Potong Botol: Mulai dari bagian atas tape dan potong celah vertikal pada botol, dengan jarak sekitar ¾ inci antara setiap celah.
        
        3. Buat Kelopak: Tekan bagian atas botol ke arah bawah, sehingga celah-celah yang dipotong akan terlipat. Pegang bagian tersebut dan lipat setiap celah di tengah untuk membuat lipatan.
        
        4. Bentuk Lipatan Agar Bisa Berputar: Selanjutnya, buat lipatan di bagian atas dan bawah setiap celah dengan membentuk sudut 45 derajat. Lipat bagian atas setiap celah ke kanan dan bagian bawahnya ke kiri. Ini akan membantu angin menangkap dan membuat spinner berputar.
        
        5. Lubangi Tutup Botol: Buat lubang kecil di tutup botol.
        
        6. Pasang Kait dan Gantungan: Renggangkan kertas klip dan masukkan ujungnya melalui bagian loop dari swivel. Putar kertas klip hingga rapat dan masukkan ke dalam lubang di tutup botol. Tekuk ujung kertas klip agar tidak keluar dari lubang.
        
        7. Penyelesaian: Pasang benang pancing ke swivel dan gantung spinner angin di tempat yang dapat terkena angin, misalnya di kebun atau halaman. Spinner ini akan berputar ketika terkena angin dan memberikan efek visual yang menyenangkan!
        EOT
        ]);
        
        Kreasi::create([
            'judul_kreasi' => 'Angin Chime dari Tutup Plastik Daur Ulang',
            'foto_kreasi' => 'kreasi_images/PL_05.jpg',
            'kategori_kreasi' => 'Plastic',
            'author' => 'Mutia',
            'tanggal' => '2024-10-25',
            'alat_bahan' => <<<EOT
        1. Tutup plastik besar yang kokoh
        2. Banyak tutup plastik dari botol air, susu, soda, dll.
        3. Beberapa tutup berbentuk cangkir dari botol obat, mousse rambut, krim kocok, dll.
        4. Manik-manik pony berwarna
        5. Bel jingle
        6. Benang
        Alat: pelipis, tang datar, palu, paku, jarum
        EOT,
            'langkah' => <<<EOT
        1. Buat Lubang pada Tutup Plastik Besar: Gunakan palu dan paku untuk membuat empat lubang (seperti tanda plus) di tutup plastik besar. Sediakan tutup ini untuk langkah selanjutnya.
        
        2. Siapkan Benang: Jahit benang ke jarum dengan panjang sesuai keinginan, tergantung seberapa panjang Anda ingin angin chime-nya.
        
        3. Pasang Manik: Masukkan jarum ke dalam satu manik pony, lalu ikat simpul beberapa kali di ujung benang untuk mengamankan manik tersebut.
        
        4. Pasang Tutup Plastik pada Benang: Tusukkan jarum melalui tengah bagian dalam tutup plastik. Tarik jarum hingga tutup plastik mencapai manik dan benang.
        
        5. Tambahkan Manik dan Bel: Tambahkan beberapa manik dan bel jingle sesuai keinginan, lalu dorong mereka hingga ke ujung benang.
        
        6. Pasang Tutup Plastik Berikutnya: Masukkan tutup plastik lagi, dorong hingga ke ujung.
        
        7. Ulangi Langkah 5 dan 6: Teruskan menambah manik, bel, dan tutup plastik hingga mencapai panjang yang diinginkan.
        
        8. Pasang Benang ke Lubang Tutup Besar: Tusukkan jarum ke salah satu lubang yang sudah dibuat di tutup besar. Ikat simpul beberapa kali dan potong kelebihan benang.
        
        9. Ulangi untuk 3 Kali Lagi: Ulangi langkah 2-9 tiga kali untuk membuat total empat tali angin chime.
        
        10. Buat Pengait: Gunakan palu dan paku untuk membuat dua lubang lagi di tutup besar, tepat berseberangan satu sama lain.
        
        11. Pasang Benang untuk Penggantung: Jahit benang dengan manik di ujungnya, masukkan jarum melalui salah satu lubang baru dan tarik hingga manik menghentikan benang di sisi lainnya.
        EOT
        ]);        

    }
}
