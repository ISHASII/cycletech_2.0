<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kreasi;

class KreasiPSSeeder extends Seeder
{
    public function run()
    {
        Kreasi::create([
            'judul_kreasi' => 'Tiker Plastik Daur Ulang',
            'foto_kreasi' => 'kreasi_images/PS_01.png', 
            'kategori_kreasi' => 'Plastic Sachet',
            'author' => 'Muhammad Danu Erlangga',
            'tanggal' => '2024-11-24',
            'alat_bahan' => <<<EOT
1. Kemasan Bekas Bungkus Kopi
2. Gunting
3. Penggaris
4. Lem
5. Papan Alas
EOT,
            'langkah' => <<<EOT
1. Persiapan Strip: Potong kemasan bekas menjadi strip-strip panjang dengan lebar sekitar 2 cm menggunakan gunting. Ukur dengan penggaris agar strip memiliki ukuran yang seragam.

2. Membuat Strip: Lipat strip-strip tersebut agar menjadi lebih kuat dan tidak mudah robek. Anda dapat melipatnya dua atau tiga kali sesuai ketebalan yang diinginkan.

3. Mulai Menganyam: Ambil beberapa strip dan mulai anyam secara bergantian satu dengan yang lain, membentuk pola dasar anyaman (biasanya pola kotak-kotak).

4. Menambahkan Strip: Tambahkan strip-strip baru saat diperlukan, pastikan strip tersebut masuk dengan kencang dan rapi. Teruskan anyaman hingga mencapai ukuran yang diinginkan (misalnya 40x40 cm).

5. Mengunci Anyaman: Setelah selesai menganyam, kunci ujung-ujung anyaman dengan lem untuk mencegahnya terlepas.

6. Penyelesaian: Rapihkan sisi-sisi tikar dengan memotong kelebihan strip dan memastikan semua ujung terpasang dengan baik.
EOT,
        ]);

        Kreasi::create([
            'judul_kreasi' => 'Tas Plastik Daur Ulang',
            'foto_kreasi' => 'kreasi_images/PS_02.png',
            'kategori_kreasi' => 'Plastic Sachet',
            'author' => 'Ivan Herdianto',
            'tanggal' => '2024-11-20',
            'alat_bahan' => <<<EOT
1. Kemasan Bekas
2. Gunting
3. Penggaris
4. Lem
5. Papan Alas
6. Jarum Jahit Besar
7. Benang Nilon atau Tali Kuat
8. Bungkus Kopi Bekas
9. Resleting
EOT,
            'langkah' => <<<EOT
1. Persiapan Strip: Potong kemasan bekas menjadi strip-strip panjang dengan lebar sekitar 2 cm menggunakan gunting. Ukur dengan penggaris agar strip memiliki ukuran yang seragam.

2. Membuat Strip Lebih Kuat: Lipat strip-strip tersebut agar menjadi lebih kuat dan tidak mudah robek. Anda dapat melipatnya dua atau tiga kali sesuai ketebalan yang diinginkan.

3. Memulai Anyaman: Ambil beberapa strip dan mulai anyam secara bergantian satu dengan yang lain, membentuk pola dasar anyaman (biasanya pola kotak-kotak).

4. Menambahkan Strip Baru: Tambahkan strip-strip baru saat diperlukan, pastikan strip tersebut masuk dengan kencang dan rapi. Teruskan anyaman hingga mencapai ukuran tas yang diinginkan.

5. Membentuk Tas: Setelah anyaman dasar selesai, bentuk anyaman tersebut menjadi tas dengan menggabungkan sisi-sisi anyaman menggunakan benang nilon atau tali kuat. Gunakan jarum jahit besar untuk membantu mengikat dan menjahit bagian-bagian tas.

6. Menyelesaikan Tas: Pastikan semua ujung strip dan sambungan anyaman terikat dengan kuat. Rapikan sisi-sisi tas dengan memotong kelebihan strip dan memastikan semua ujung terpasang dengan baik. Lem ujung-ujung strip untuk mencegahnya terlepas.
EOT,
        ]);

        Kreasi::create([
            'judul_kreasi' => 'Daur Ulang Apron',
            'foto_kreasi' => 'kreasi_images/PS_03.png',
            'kategori_kreasi' => 'Plastic Sachet',
            'author' => 'Ilham Hermansyah',
            'tanggal' => '2024-12-10',
            'alat_bahan' => <<<EOT
1. Benang dan Jarum atau mesin jahit
2. Gunting
3. Penggaris
4. Pulpen atau pensil
5. Papan Alas
6. Kantong Bekas (misalnya Kantong potting mix dan kantong kopi)
7. Tali atau pita untuk tali pengikat apron
EOT,
            'langkah' => <<<EOT
1. Persiapan Kantong: Bersihkan kantong bekas yang akan digunakan, potong bagian atas dan bawah kantong sehingga terbuka menjadi lembaran.

2. Membuat Pola Apron: Gunakan penggaris dan pulpen/pensil untuk menggambar pola apron pada lembaran kantong. Pola apron biasanya berbentuk persegi panjang dengan bagian atas yang lebih sempit untuk leher.

3. Memotong Pola: Gunting sesuai pola yang telah digambar.

4. Jahitan Tepi: Lipat dan jahit tepi-tepi apron untuk mencegah sobekan.

5. Memasang Tali: Pasang tali atau pita pada bagian atas untuk pengikat leher dan pada bagian samping untuk pengikat pinggang.

6. Penyelesaian: Pastikan semua jahitan kuat dan rapi.
EOT,
        ]);

        Kreasi::create([
            'judul_kreasi' => 'Pouch Daur Ulang',
            'foto_kreasi' => 'kreasi_images/PS_04.png',
            'kategori_kreasi' => 'Plastic Sachet',
            'author' => 'Ilham Hermansyah',
            'tanggal' => '2024-11-10',
            'alat_bahan' => <<<EOT
1. Jarum dan benang
2. Gunting
3. Penggaris
4. Pulpen atau pensil
5. Kancing atau Velcro
6. Kemasan bekas plastic sachet
EOT,
            'langkah' => <<<EOT
1. Persiapan Kemasan: Bersihkan kemasan bekas yang akan digunakan. Potong bagian atas dan bawah kemasan sehingga terbuka menjadi lembaran.

2. Mengukur dan Menandai: Gunakan penggaris dan pulpen/pensil untuk menggambar pola kantong pada lembaran kemasan sesuai ukuran yang diinginkan.

3. Memotong Pola: Gunting sesuai dengan pola yang telah digambar.

4. Membuat Kantong: Lipat lembaran kemasan sesuai dengan pola kantong yang diinginkan. Jahit sisi-sisi kemasan dengan jarum dan benang agar membentuk kantong.

5. Menambahkan Penutup: Pasang kancing atau velcro pada bagian atas kantong untuk penutup.

6. Penyelesaian: Pastikan semua jahitan kuat dan rapi. Rapikan sisi-sisi kantong dengan memotong kelebihan kemasan dan memastikan semua ujung terpasang dengan baik.
EOT,
        ]);

        Kreasi::create([
            'judul_kreasi' => 'Kotak Pensil',
            'foto_kreasi' => 'kreasi_images/PS_05.png',
            'kategori_kreasi' => 'Plastic Sachet',
            'author' => 'Harry Bonardo',
            'tanggal' => '2024-11-11',
            'alat_bahan' => <<<EOT
1. Jarum dan benang atau mesin jahit
2. Gunting
3. Penggaris
4. Pensil atau kapur kain
5. Bahan plastik atau kain bekas dengan desain menarik
6. Resleting
EOT,
            'langkah' => <<<EOT
1. Potong Bahan: Potong bahan plastik atau kain bekas sesuai ukuran yang diinginkan untuk membuat pouch.

2. Pasang Resleting: Letakkan resleting di antara dua potongan bahan dan jahit menggunakan mesin jahit atau tangan.

3. Jahit Sisi-Sisi: Jahit sisi-sisi bahan untuk membentuk pouch, pastikan resleting berada di bagian atas.

4. Rapikan Jahitan: Potong sisa benang dan rapikan jahitan.

5. Pouch Siap Digunakan.
EOT,
        ]);
    }
}
