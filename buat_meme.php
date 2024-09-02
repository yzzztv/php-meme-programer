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
