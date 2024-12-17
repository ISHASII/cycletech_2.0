<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kreasi;

class KreasiGLSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Kreasi::create([
            'judul_kreasi' => 'LILIN GELAS ANGGUR UNTUK HALLOWEEN',
            'foto_kreasi' => 'kreasi_images/GL_01.jpg', 
            'kategori_kreasi' => 'Glass',
            'author' => 'Meaghan Mountford',
            'tanggal' => '2024-11-27',
            'alat_bahan' => <<<EOT
        1. Gelas anggur
        2. Alkohol gosok
        3. Cat enamel akrilik*
        4. Kain kasa
        5. Kuas busa
        6. Kuas cat kecil
        7. Kain felt hitam
        8. Lem tembak
        9. Lilin votive oranye
        EOT,
            'langkah' => <<<EOT
        1. Bersihkan gelas anggur dengan alkohol gosok menggunakan kapas atau kain. Biarkan kering sepenuhnya.
        
        2. Cat gelas anggur dengan lapisan dasar cat. Tuang cat ke palet atau piring kertas. Gunakan kuas untuk melapisi seluruh permukaan gelas anggur (bagian bawah tempat lilin juga opsional). Letakkan gelas di atas kertas lilin untuk mengeringkannya. Ulangi dengan 2-3 lapisan hingga gelas tidak tembus pandang, biarkan lapisan mengering di antaranya.
        
        3. Frankenstein: Cat gelas hijau dan bagian tangkai serta dasar gelas hitam.
        
        4. Mummy: Cat seluruh gelas putih.
        
        5. Zombie: Cat seluruh gelas ungu.
        
        6. Jack O' Lantern: Cat gelas oranye dan tangkai serta dasar gelas hijau.
        
        7. Balikkan gelas anggur terbalik untuk mulai mendesain.
        
        8. Mummy: Potong kain kasa menjadi strip dan lilitkan pada gelas, termasuk tangkainya, rekatkan dengan lem tembak. Beri ruang kosong di gelas untuk menggambar dua titik hitam sebagai mata. Biarkan kering.
        
        9. Frankenstein: Potong kain felt hitam menjadi lingkaran diameter 3 inci, buat garis menuju pusat lingkaran, lalu potong lingkaran kecil sekitar 1/2 inci di tengahnya. Potong zig-zag di tepi kain felt untuk membuat rambut Frankenstein, lalu lilitkan di dasar gelas dan rekatkan dengan lem tembak. Gunakan kuas kecil untuk melukis mata, mulut, dan bekas luka dengan cat hitam. Biarkan kering.
        
        10. Jack O' Lantern: Gunakan cat hitam dan kuas kecil untuk melukis wajah labu sesuai keinginan Anda.
        
        11. Zombie: Lukis tanda "X" dan sebuah titik sebagai mata, tambahkan mulut, dan gunakan cat merah untuk membuat tetesan darah. Potong strip kain kasa dan lilitkan pada gelas, rekatkan dengan hati-hati menggunakan lem tembak.
        
        12. Terakhir, tambahkan lilin votive di atas gelas anggur. Jika perlu, gunakan sedikit lem tembak untuk menahan lilin di tempatnya.
        EOT,
        ]);
        
        Kreasi::create([
            'judul_kreasi' => 'POT TANAMAN DENGAN HIASAN KACA LAUT',
            'foto_kreasi' => 'kreasi_images/GL_02.jpg',
            'kategori_kreasi' => 'Glass',
            'author' => 'Angie Holden',
            'tanggal' => '2024-11-28',
            'alat_bahan' => <<<EOT
        1. Pot tanah liat (terra cotta)
        2. Cat luar ruangan warna putih
        3. Kaca laut (hasil koleksi di pantai atau beli di toko kerajinan)
        4. Tanah liat kering udara (air dry clay)
        5. Lem (lem super atau lem khusus kaca, bukan lem tembak)
        6. Kuas cat
        7. Alat tanah liat (opsional, tetapi berguna untuk finishing)
        EOT,
            'langkah' => <<<EOT
        1. Cat Pot: Cat pot tanah liat dengan beberapa lapisan cat luar ruangan berkualitas baik, baik di bagian dalam maupun luar pot. Biarkan kering sepenuhnya.
        
        2. Tempelkan Kaca Laut: Tempelkan kaca laut ke bagian luar pot menggunakan lem super atau lem khusus kaca. Letakkan pot pada posisi miring dan kerjakan satu sisi hingga lem kering, lalu putar pot untuk melanjutkan. Ulangi hingga seluruh permukaan pot tertutup kaca laut. Biarkan lem mengering sempurna.
        
        3. Bentuk Tanah Liat: Ambil tanah liat kering udara dan bentuk menjadi gulungan panjang seperti ular dengan tangan Anda.
        
        4. Isi Celah: Letakkan gulungan tanah liat di celah-celah antara kaca laut. Tekan tanah liat ke dalam celah sambil meratakannya. Alat tanah liat dapat membantu mempermudah proses ini.
        
        5. Selesaikan Seluruh Pot: Terus isi dan haluskan semua celah di antara kaca laut di seluruh permukaan pot.
        
        6. Keringkan Tanah Liat: Biarkan tanah liat mengering sesuai dengan petunjuk pada kemasan.
        EOT,
        ]);
        
        Kreasi::create([
            'judul_kreasi' => 'POHON NATAL KACA',
            'foto_kreasi' => 'kreasi_images/GL_03.jpg',
            'kategori_kreasi' => 'Glass',
            'author' => 'Amanda',
            'tanggal' => '2024-11-29',
            'alat_bahan' => <<<EOT
        1. Kaca laut (beragam bentuk, ukuran, dan warna, cukup untuk menutupi kerucut)
        2. Kerucut dari kertas mache (tinggi 7 inci)
        3. Ornamen bintang laut
        4. Tusuk gigi
        5. Cat akrilik warna putih
        6. Kuas cat
        7. Lem tembak dengan stik lem bening
        8. Penusuk (awl)
        EOT,
            'langkah' => <<<EOT
        1. Lubangi Kerucut: Gunakan penusuk untuk membuat lubang kecil di bagian atas kerucut kertas mache.
        
        2. Cat Kerucut dan Tusuk Gigi: Dengan kuas ukuran sedang, cat kerucut kertas mache dan tusuk gigi dengan cat akrilik putih. Biarkan kering.
        
        3. Pasang Bintang Laut: Rekatkan tusuk gigi yang sudah dicat ke bagian belakang ornamen bintang laut menggunakan lem tembak.
        
        4. Pasang Kaca Laut: Mulailah merekatkan potongan kaca laut ke kerucut menggunakan lem tembak. Mulai dari dasar kerucut.
        
        5. Lapisi Secara Berjenjang: Tempel kaca laut dengan pola berjenjang, melapisi baris sebelumnya hingga seluruh kerucut tertutup kaca laut.
        
        6. Pasang Puncak: Masukkan tusuk gigi dengan bintang laut ke lubang di bagian atas kerucut.
        
        Hasil: Pohon Natal kaca laut Anda kini siap menjadi dekorasi memukau untuk perayaan Natal Anda!
        EOT,
        ]);
        
        Kreasi::create([
            'judul_kreasi' => 'MELUKIS DI TOPLES DENGAN CAT KACA',
            'foto_kreasi' => 'kreasi_images/GL_04.jpg',
            'kategori_kreasi' => 'Glass',
            'author' => 'Salma',
            'tanggal' => '2024-11-27',
            'alat_bahan' => <<<EOT
        1. Kaca laut (beragam bentuk, ukuran, dan warna)
        2. Cat kaca: DecoArt Glass Stain (pilih warna sesuai keinginan)
        3. Toples bekas: seperti toples selai, mayones, atau lainnya
        4. Kuas cat
        EOT,
            'langkah' => <<<EOT
        1. Aplikasikan Cat Kaca: Gunakan kuas untuk mengaplikasikan cat kaca pada toples. Jangan terlalu meratakan atau memperhatikan pola tertentu. Gerakkan kuas ke depan dan belakang hingga lapisan cat terasa sedikit lengket.
        
        2. Tambahkan Warna Lain: Pilih warna cat kaca lainnya, lalu tambahkan secara acak di beberapa area, tanpa harus terlalu rapi.
        
        3. Biarkan Kering: Setelah selesai, biarkan toples mengering selama 24 jam sebelum digunakan.
        
        4. Hasil: Toples cantik dengan efek warna kaca yang unik dan penuh karakter, cocok untuk dekorasi atau penyimpanan! 🖌️✨
        EOT,
        ]);
        

    }
}
