<?php
// 3. Pak rian memiliki 100 cabang toko kelontong, pada setiap harinya pak rian pasti mengeluarkan Rp 10.000 biaya pengeluaran untuk toko kelontong ke 1. dan biaya pengeluaran untuk toko kelontong ke 68 adalah sebesar Rp. 30.100 . maka berapakah biaya pengeluaran untuk toko kelontong ke 81 ?
// Note :
// Silahkan kerjakan soal no 3 dengan perintah perulangan dan aritmatika dengan bahasa pemrograman PHP. Wajib menampilkan alur perhitungan dengan fungsi Output PHP
const branch = 100;
$spendOfBranch1 = 10000;
$spendOfBranch68 = 30100;
$increment = ($spendOfBranch68 - $spendOfBranch1) / (68 - 1);
$spendOfBranch81 = 10000; // default value

for ($i = 1; $i < 81; $i++) {
  $spendOfBranch81 += $increment;
}
echo "Biaya cabang ke 1 = 10000";
echo "\n";
echo "Biaya cabang ke 68 = 30100";
echo "\n";
echo "Increment = (Biaya cabang ke 68 - Biaya cabang ke 1) / (68 - 1)";
echo "\n";
echo "Increment = $increment";
echo "\n";
echo "Biaya cabang ke 81 = 10000 + (80 * Increment)";
echo "\n";
echo "Biaya cabang ke 81 = $spendOfBranch81";
echo "\n";
?>