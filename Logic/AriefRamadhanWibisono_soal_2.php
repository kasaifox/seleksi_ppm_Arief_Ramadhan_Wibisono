<?php
// 2. Setyo mempunyai tiga lembar uang sepuluh ribuan, empat lembar uang lima ribuan dan lima lembar uang dua puluh ribuan. Jika Ia akan membeli mainan seharga Rp55.000. Berapa jumlah uang Setyo setelah membeli mainan?
// Note:
// Silahkan selesaikan permasalahan diatas dengan bahasa pemrograman PHP. Wajib menampilkan alur perhitungan dengan fungsi Output PHP
const toyPrice = 55000;
$cash = (3 * 10000) + (4 * 5000) + (5 * 20000);
$change = $cash - toyPrice;
echo "Harga mainan = Rp55.000";
echo "\n";
echo "Uang cash Setyo = (3 * 10000) + (4 * 5000) + (5 * 20000) ";
echo "\n";
echo "Uang cash Setyo = $cash";
echo "\n";
echo "Sisa uang Setyo = Uang cash Setyo - Harga mainan";
echo "\n";
echo "Sisa uang Setyo = $change";
echo "\n";
?>