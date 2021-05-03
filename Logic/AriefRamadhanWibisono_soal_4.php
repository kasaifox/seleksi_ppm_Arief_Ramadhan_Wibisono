<?php
// 4. Buatlah sebuah aplikasi yang menampilkan bilangan genap dan bilangan ganjil dari 1 sampai 10. yang mana jika dijalankan akan menghasilkan output seperti berikut ini :
// 1. Bilangan Ganjil
// 2. Bilangan Genap
// 3. Bilangan Ganjil
// 4. Bilangan Genap
// 5. Bilangan Ganjil
// 6. Bilangan Genap
// 7. Bilangan Ganjil
// 8. Bilangan Genap
// 9. Bilangan Ganjil
// 10. Bilangan Genap
// Note :
// Tidak boleh menggunakan perintah perulangan dan dibuat dengan bahasa pemrograman PHP.
function oddEvenNumbers () {
  static $no = 1;
  if ($no === 11) {
    return;
  } else {
    if ($no % 2 === 0) {
      echo $no.". Bilangan Genap\n";
    } else {
      echo $no.". Bilangan Ganjil\n";
    }
    $no++;
    oddEvenNumbers();
  }
}
oddEvenNumbers()
?>