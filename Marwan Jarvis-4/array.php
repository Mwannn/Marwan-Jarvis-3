<?php 
$fruits = []; // Inisialisasi array kosong
// print_r($fruits); // Baris ini dikomentari, bisa diaktifkan jika ingin melihat array kosong

$fruits[0] = "Hijau"; // Menambahkan elemen pertama
$fruits[2] = "Hijau"; // Menambahkan elemen ketiga (indeks 2)
print_r($fruits); // Menampilkan array
echo "<br>";

// Menghitung total data di array 
echo count($fruits); // Menghitung jumlah elemen di array
echo "<br>";

// Menambahkan data di akhir array
array_push($fruits, "mangga", "apel"); // Menambahkan elemen di akhir array
print_r($fruits); // Menampilkan array yang diperbarui
echo "<br>";

// Cek apakah data ada di array
echo in_array("Hijau", $fruits) ? "true" : "false"; // Mengecek apakah "Hijau" ada di array, dan menampilkan hasil
echo "<br>";

// Mengambil/menghapus elemen di akhir
$last = array_pop($fruits); // Menghapus elemen terakhir dari array dan menyimpannya dalam variabel $last
print_r($fruits); // Menampilkan array yang diperbarui
echo "<br>";
echo $last; // Menampilkan elemen yang dihapus
echo "<br>";

// Menghapus semua elemen dari array tanpa menghapus variabel itu sendiri
$fruits = []; // Mengosongkan array
echo "<br>";
print_r($fruits); // Menampilkan array yang sekarang kosong
echo "<br>";


?>
