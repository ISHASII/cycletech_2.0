<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kreasi;

class KreasiMTSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Kreasi::create([
            'judul_kreasi' => 'POT AIR YANG MEMANCARKAN KRISTAL',
            'foto_kreasi' => 'kreasi_images/MT_01.jpg',
            'kategori_kreasi' => 'Metal',
            'author' => 'Amanda Formaro',
            'tanggal' => '2024-10-27',
            'alat_bahan' => <<<EOT
        1. Pot air dari kaleng susu
        2. Kristal: Bisa menggunakan kristal gantung lampu, kristal kerajinan, atau kristal akrilik
        3. Kawat floral
        4. Tang mikro
        5. Manik-manik (opsional)
        EOT,
            'langkah' => <<<EOT
        1. Lepaskan rim dari pancuran pot air dengan hati-hati. Pastikan untuk bekerja perlahan, karena bisa jadi rim ini cukup ketat tergantung pada usia pot air.
        
        2. Masukkan kristal ke dalam seutas kawat, kemudian masukkan ujung kawat ke dalam lubang pancuran pot air.
        
        3. Dari dalam pancuran, pasang manik-manik di sepanjang kawat (manik-manik ini tidak akan terlihat). Gunakan tang untuk melilitkan dan mengamankan kawat di dalam pancuran.
        
        4. Pasang kembali rim pancuran dengan merapatkan tepiannya menggunakan tang, agar kawat dan kristal tetap terpasang dengan aman.
        
        5. Hasil: Pot air yang indah dengan pancuran kristal yang memukau, siap mempercantik taman atau dekorasi luar ruangan Anda! 🌸💧
        EOT
        ]);
        
        Kreasi::create([
            'judul_kreasi' => 'BLOK BUNGA DARI PENUTUP BOTOL',
            'foto_kreasi' => 'kreasi_images/MT_02.jpg',
            'kategori_kreasi' => 'Metal',
            'author' => 'Amanda Formaro',
            'tanggal' => '2024-10-28',
            'alat_bahan' => <<<EOT
        1. Dowel kayu 12 inci
        2. Penutup kaleng
        3. 15 tutup botol kaleng
        4. Pliers
        5. Lem kuat besi
        EOT,
            'langkah' => <<<EOT
        1. Bentuk Petal Bunga: Gunakan pliers untuk membengkokkan 12 tutup botol menjadi dua bagian seperti buku.
        
        2. Pasang Tutup Botol di Pusat Kaleng: Tempelkan satu tutup botol di tengah penutup kaleng menggunakan lem kuat.
        
        3. Atur Petal Bunga: Letakkan dua tutup botol 'petal' saling bertolak belakang, dan lakukan hal yang sama pada semua petal, sehingga Anda memiliki 6 pasang petal.
        
        4. Tempelkan Petal ke Penutup Kaleng: Tempelkan semua 6 pasang petal yang sudah dibengkokkan ke penutup kaleng, mengelilingi tutup botol pusat.
        
        5. Tambahkan Daun: Tempelkan dua tutup botol di sisi dowel kayu untuk membuat daun.
        
        6. Biarkan Lem Mengering: Biarkan lem mengering sepenuhnya sebelum memindahkan bunga.
        
        7. Hasil: Bunga cantik dari tutup botol siap dipajang sebagai dekorasi taman atau pot tanaman! 🌸
        EOT
        ]);
        
        Kreasi::create([
            'judul_kreasi' => 'BURUNG HULU DARI PARUT KEJU',
            'foto_kreasi' => 'kreasi_images/MT_03.jpg',
            'kategori_kreasi' => 'Metal',
            'author' => 'Amanda Formaro',
            'tanggal' => '2024-10-29',
            'alat_bahan' => <<<EOT
        1. Parutan keju stainless steel 9 inci
        2. 2 tutup Mason jar diameter 2,75 inci
        3. 2 tutup botol logam diameter 1,5 inci
        4. 2 tutup botol bir logam diameter 1 inci
        5. 2 sekrup dengan mur dan baut
        6. Mesin bor dengan mata bor yang sesuai
        7. Kawat tembaga panjang 15 inci
        8. 1 ranting pohon panjang 9 inci
        9. 1 potongan ranting pohon berbentuk segitiga sekitar 1 inci panjang
        10. Lem tembak dengan stik lem bening
        11. Kertas sisa, spidol, dan gunting
        EOT,
            'langkah' => <<<EOT
        1. Membuat Mata Burung Hantu: Gunakan tutup Mason jar untuk mata burung hantu, dengan menumpuk tutup terkecil di atas tutup terbesar.
        
        2. Membuat Template untuk Lubang: Buat template di kertas untuk menentukan posisi lubang pada tutup jar.
        
        3. Menandai Posisi Lubang: Tandai posisi lubang dengan spidol dan pindahkan tanda tersebut ke tutup jar.
        
        4. Membor Lubang: Bor lubang dengan hati-hati pada posisi yang telah ditandai menggunakan mesin bor.
        
        5. Menyusun Mata Burung Hantu: Ambil satu mata burung hantu, susun tutup jar dari yang terbesar di bawah hingga yang terkecil di atas, sesuaikan posisi lubang yang sudah dibor.
        
        6. Menempelkan Mata ke Parutan Keju: Pasang mata burung hantu ke parutan keju menggunakan sekrup, mur, dan baut.
        
        7. Membuat Hidung Burung Hantu: Panaskan lem tembak dan tempelkan potongan kayu berbentuk segitiga sebagai hidung burung hantu tepat di bawah mata.
        
        8. Membuat Sayap Burung Hantu: Masukkan kawat melalui dua lubang bawah parutan keju dari dalam keluar. Lilitkan kawat pada potongan ranting pohon untuk mengamankan posisi sayap burung hantu.
        
        9. Penempatan Burung Hantu di Taman: Letakkan burung hantu di taman luar Anda. Seiring waktu, parutan stainless steel akan berkarat, memberikan tampilan yang lebih rustic pada dekorasi ini.
        
        10. Hasil: Burung hantu unik dari parutan keju siap untuk menghiasi taman Anda! 🦉🌿
        EOT
        ]);
        
    }
}
