# php-meme-programer
Script ini digunakan untuk menggenerate meme acak tentang programmer php 
Cara Menjalankan Kode di Termux: 
Instal PHP di Termux: 
Jika Anda belum menginstal PHP di Termux, gunakan perintah berikut:

Install PHP : 
```
pkg install php
```

Simpan Kode di File: Buat file PHP baru di Termux, misalnya hitung_usia.php, menggunakan perintah nano atau editor teks lainnya:

Copy code:
```
<?php

// Array berisi template meme
$meme_templates = [
    "Ketika kamu sudah siap makan, tapi makanan belum datang: 'Haruskah aku menunggu atau makan piringnya?'",
    "Belajar PHP selama 10 menit dan langsung merasa seperti hacker: 'Aku bisa meretas NASA sekarang!'",
    "Ketika internet lambat dan kamu harus menunggu: 'Waktu adalah emas, tapi loading lebih lama.'",
    "Ketika kode error tapi kamu yakin tidak ada yang salah: 'PHP, aku pikir kita sudah sepakat untuk bekerja sama!'",
    "Ketika kamu coba debugging selama 2 jam dan ternyata hanya titik koma yang salah: 'Serius? Itu saja masalahnya?'",
    "Saat kamu merasa menjadi pro setelah menulis 'Hello World': 'Coding, aku datang!'",
    "Ketika kamu membaca dokumentasi dan tetap tidak mengerti apa-apa: 'Apakah ini bahasa alien?'",
    "Satu baris kode yang membuat semua bekerja: 'Dan Tuhan berkata, 'Biarkan ada kode!''",
    "Ketika kamu memperbaiki satu bug dan dua lagi muncul: 'Ini seperti Hydra, tapi dengan bug!'",
    "PHP mengerti maksudmu meskipun kamu typo: 'Kamu tahu apa yang aku maksud, PHP.'"
];

// Loop untuk menghasilkan meme terus menerus
do {
    // Pilih meme acak dari array
    $meme_acak = $meme_templates[array_rand($meme_templates)];

    // Tampilkan meme
    echo "\nBerikut adalah meme acak kamu:\n";
    echo $meme_acak . "\n";

    // Minta pengguna menekan Enter untuk melanjutkan atau Ctrl+C untuk keluar
    echo "\nTekan Enter untuk menggenerate meme lainnya atau Ctrl+C untuk keluar...";
    fgets(STDIN);

} while (true);

?>

```

Buat file baru:
```
nano buat_meme.php
```

Lalu, Tempelkan kode PHP yang diperbarui di atas dan simpan file tersebut dengan menekan Ctrl + X, lalu Y dan Enter untuk menyimpan dan keluar dari editor

Jalankan Skrip PHP: Setelah menyimpan file, jalankan skrip PHP dengan perintah berikut:

Jalankan script:

```
php buat_meme.php
```


File yang telah siap dicoba bisa langsung di unduh dengan perintah:
```
pkg install git
```
kemudian
```
git clone https://github.com/yzzztv/php-hitung-tanggal-lahir.git
```

Skrip ini akan terus menampilkan meme acak setiap kali Anda menekan Enter, 
sehingga memungkinkan pengguna untuk dengan mudah menghasilkan meme baru tanpa harus menjalankan skrip lagi.
Untuk keluar dari loop, tekan Ctrl + C.

Anda bebas mengubah atau memodifikasi script karena script ini 100% opensource
