<?php
// 5. Buatlah sebuah aplikasi penampil list menu makanan statis yang mana jika dijalankan akan menampilkan hasil sebagai berikut :
// Makanan
// 1. Menu Makanan ke 1
// 2. Menu Makanan ke 2
// 3. Menu Makanan ke 3
// Minuman
// 1. Menu Minuman ke 1
// 2. Menu Minuman ke 2
// 3. Menu Minuman ke 3
// Parsel
// 1. Menu Parsel ke 1
// 2. Menu Parsel ke 2
// 3. Menu Parsel ke 3
// Note : hanya boleh menggunakan 1 buah perintah perulangan saja dan dibuat dengan bahasa pemrograman PHP.
$menu = ["Makanan", "Minuman", "Parsel"];
foreach ($menu as $x) {
  echo $x."\n";
  echo "1. Menu $x ke 1\n";
  echo "2. Menu $x ke 2\n";
  echo "3. Menu $x ke 3\n";
}
?>