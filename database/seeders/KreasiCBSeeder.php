<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kreasi;

class KreasiCBSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Kreasi::create([
            'judul_kreasi' => 'Teropong dari Tabung Kardus',
            'foto_kreasi' => 'kreasi_images/CB_01.jpg', 
            'kategori_kreasi' => 'Cardboard',
            'author' => 'Amanda Formaro',
            'tanggal' => '2024-11-27',
            'alat_bahan' => <<<EOT
        1. 2 tabung kardus
        2. 1 lembar kain felt motif kamuflase
        3. Gunting
        4. Lem putih (lem kerajinan)
        5. Busa kerajinan (craft foam) yang warnanya sesuai dengan kain felt
        6. 6 karet gelang
        7. Tali atau benang sepanjang 40" (sekitar 100 cm)
        8. Pulpen
        EOT,
            'langkah' => <<<EOT
        1. Letakkan kain felt dengan sisi bermotif menghadap ke bawah di atas permukaan kerja dan potong kain menjadi dua bagian.
        
        2. Gulung tabung kardus di dalam kain felt sambil direkatkan dengan lem. Potong sisa kain yang berlebih. Ulangi untuk tabung lainnya.
        
        3. Potong strip busa kerajinan sepanjang cukup untuk mengelilingi salah satu ujung tabung, dengan lebar sekitar 3/4”. Rekatkan strip busa di ujung tabung, sejajarkan sambungan kain felt dengan sambungan busa kerajinan.
        
        4. Amankan dengan karet gelang. Ulangi untuk tabung lainnya.
        
        5. Potong strip lain yang cukup panjang untuk mengelilingi ujung lain tabung, kali ini dengan lebar 1/2”. Rekatkan seperti sebelumnya dan amankan dengan karet gelang.
        
        6. Letakkan kedua tabung berdampingan dengan sisi sambungan saling menghadap. Gunakan karet gelang untuk menahan kedua tabung di tempatnya.
        
        7. Gunakan pulpen untuk membuat lubang di sisi tabung, sekitar 1/2” di bawah strip busa kerajinan yang berukuran 1/2”. Masukkan ujung tali melalui lubang dari luar tabung. Tarik tali melalui tabung dan ikat simpul ganda. Potong sisa tali dan tarik perlahan agar simpul tidak lepas. Ulangi pada sisi lainnya.
        
        8. Oleskan lem putih yang cukup banyak di antara kedua tabung, pada bagian atas dan bawah. Biarkan kering sepenuhnya selama beberapa jam atau semalaman sebelum melepas karet gelang dan menggunakan teropong.
        EOT,
        ]);
        
        Kreasi::create([
            'judul_kreasi' => 'MEJA FOOSBALL MINI DARI KOTAK SEPATU',
            'foto_kreasi' => 'kreasi_images/CB_02.jpg',
            'kategori_kreasi' => 'Cardboard',
            'author' => 'U_Create',
            'tanggal' => '2024-11-27',
            'alat_bahan' => <<<EOT
        1. Kotak sepatu
        2. Tongkat kayu kecil (pastikan lebih panjang dari lebar kotak sepatu)
        3. Pisau serbaguna
        4. Spidol
        5. Penggaris
        6. Lem tembak dan lemnya
        7. Kertas kado (untuk dekorasi kotak)
        8. Cat semprot
        9. Selotip
        10. Bola pingpong atau kelereng besar
        EOT,
            'langkah' => <<<EOT
        1. Tentukan jumlah "pemain" yang ingin Anda letakkan di tongkat kayu. Untuk kotak sepatu standar, biasanya setiap tim memiliki dua tongkat: satu tongkat tengah dengan tiga pemain, dan satu tongkat untuk penjaga gawang.
        
        2. Berdirikan penjepit baju di atas tongkat kayu, lalu tempelkan tongkat tepat ke bagian luar kotak. Tandai posisi lubang di atas titik di mana tongkat menyentuh kotak, pastikan ada cukup ruang agar penjepit bisa berputar tanpa menyentuh dasar kotak.
        
        3. Buat lubang pada tanda tersebut dengan mendorong ujung pisau ke dalam dan memutarnya. Alternatifnya, Anda bisa menggunakan pelubang kertas. Dorong tongkat melalui lubang yang telah dibuat, lalu tandai bagian dalam kotak untuk menentukan posisi lubang di sisi lainnya. Buat lubang di sisi kotak yang berlawanan.
        
        4. Untuk menentukan posisi penjepit baju, letakkan tongkat dan penjepit di dalam kotak pada posisi yang diinginkan. Tandai titik-titik di tongkat tempat penjepit akan dipasang.
        
        5. Rekatkan penjepit ke tongkat menggunakan lem tembak.
        
        6. Setelah kering, cat atau semprot tongkat dengan dua warna berbeda sesuai keinginan.
        
        7. Lapisi kotak dengan kertas kado, lalu potong lubang gol di kedua ujung kotak. Pastikan lubang cukup besar untuk bola melewati.
        
        8. Masukkan tongkat ke dalam kotak dengan hati-hati, geser melalui lubang yang telah dibuat.
        EOT,
        ]);
        
        Kreasi::create([
            'judul_kreasi' => 'Mainan Kotak Pos',
            'foto_kreasi' => 'kreasi_images/CB_03.jpg',
            'kategori_kreasi' => 'Cardboard',
            'author' => 'Little Red Window',
            'tanggal' => '2024-12-27',
            'alat_bahan' => <<<EOT
        1. 3-4 tabung kardus bekas (dari gulungan tisu toilet, kertas tisu dapur, kertas kado, foil, dll.)
        2. Sepotong kardus berukuran 8 x 8 inci (misalnya dari kotak sereal atau bagian belakang buku catatan)
        3. Tusuk gigi
        4. Cat Craftsmart: Espresso, Biru Muda, Cokelat Keemasan, Vanilla
        EOT,
            'langkah' => <<<EOT
        1. Pastikan bagian bawah kotak kardus tertutup rapat, dan biarkan lipatan atas terbuka.
        2. Pada dua sisi lipatan atas yang berlawanan (bagian sisi panjang), buat tanda setengah lingkaran dan potong. Tip: Gunakan setengah dari lipatan yang dipotong tadi, lalu rekatkan di bagian dalam untuk memperkuat lipatan berbentuk setengah lingkaran (lihat gambar untuk referensi).
        
        3. Di sisi depan kotak pos, gambar sebuah persegi panjang dan potong sepanjang tiga sisi, biarkan satu sisi tegak tidak terpotong. Ini akan menjadi pintu kotak pos.
        
        4. Potong selembar karton datar yang cukup untuk menutupi bagian atas kotak yang melengkung.
        
        5. Agar karton dapat melengkung dengan rapi, gunakan pisau untuk membuat garis-garis sejajar (sekitar 2,5 cm jaraknya) di bagian belakang karton, melewati lebar karton. Potong dengan ringan hanya lapisan pertama karton, jangan terlalu dalam. Lalu, tekuk karton secara perlahan hingga membentuk lengkungan.
        
        6. Potong lubang kecil di dekat bagian atas lengkungan untuk memasukkan surat.
        
        7. Rekatkan karton yang melengkung ke bagian atas kotak pos, usahakan menggunakan lem di bagian dalam jika memungkinkan.
        
        8. Cat dan hias kotak pos sesuai keinginan Anda.
        EOT,
        ]);
        
        Kreasi::create([
            'judul_kreasi' => 'TEMPAT ALAT TULIS DARI TABUNG KARDUS DAUR ULANG',
            'foto_kreasi' => 'kreasi_images/CB_04.jpg',
            'kategori_kreasi' => 'Cardboard',
            'author' => 'Amanda',
            'tanggal' => '2024-11-27',
            'alat_bahan' => <<<EOT
        1. 2 tabung kardus
        2. 1 lembar kain felt motif kamuflase
        3. Gunting
        4. Lem putih (lem kerajinan)
        5. Busa kerajinan (craft foam) yang warnanya sesuai dengan kain felt
        6. 6 karet gelang
        7. Tali atau benang sepanjang 40 inci (sekitar 100 cm)
        8. Pulpen
        EOT,
            'langkah' => <<<EOT
        1. Potong tabung kardus dengan panjang yang berbeda sesuai keinginan Anda. Misalnya, tabung pendek cocok untuk peniti atau klip kertas, sedangkan tabung tinggi cocok untuk kuas cat atau pena.
        
        2. Cat tabung kardus dengan warna dasar Espresso, Biru Muda, dan Cokelat Keemasan.
        
        3. Gunakan warna yang sama, ditambah Vanilla, untuk menghias setiap tabung. Ujung pegangan kuas cat cocok untuk membuat polkadot, kuas kecil untuk membuat garis-garis, dan tusuk gigi untuk membuat titik-titik kecil.
        
        4. Cat kotak kardus dengan warna Espresso.
        
        5. Rekatkan tabung ke dasar kardus menggunakan lem tembak.
        EOT,
        ]);        

    }
}
