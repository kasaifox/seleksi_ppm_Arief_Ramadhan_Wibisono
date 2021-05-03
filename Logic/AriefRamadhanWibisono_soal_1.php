<?php
// 1. Rian pergi ke toko alat tulis untuk membeli bolpoin. Harga 1 buah bolpoin Rp 1.750. Jika Rian membeli 1 lusin bolpoin dan Ia membayar 5 lembar uang lima ribuan. Berapa uang kembalian yang Rian terima?
// Note :
// Silahkan selesaikan permasalahan diatas dengan bahasa pemrograman PHP. Wajib menampilkan alur perhitungan dengan fungsi Output PHP
const bolpoinPrice = 1750;
$total = 12 * bolpoinPrice;
$cash = 5 * 5000;
$change = $cash - $total;
echo "Harga 1 buah bolpoin Rp 1.750";
echo "\n";
echo "Harga total (1 lusin bolpoin) = 12 * harga 1 buah bolpoin";
echo "\n";
echo "Harga total = $total";
echo "\n";
echo "Cash = 5 * 5000";
echo "\n";
echo "Cash = $cash";
echo "\n";
echo "Kembalian yang Rian terima = Cash - Harga total";
echo "\n";
echo "Kembalian = $change";
echo "\n";
?>