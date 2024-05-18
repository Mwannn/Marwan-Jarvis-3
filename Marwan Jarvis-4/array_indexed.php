<?php 
// Definisi array numerik
$array = [1, 2, 3, 4, 5];

// Menampilkan elemen kedua dari array
echo $array[1];
echo "<br><pre>";
// Menampilkan seluruh isi array dalam format yang mudah dibaca
print_r($array);

// Definisi array associative
$umur = ["Marwan" => 17, "Wisnu" => 17];
// Menambahkan elemen baru ke dalam array associative
$umur['ayudya'] = 18;
$umur['al-jahraa'] = 18;
echo "<br><pre>";
// Menampilkan seluruh isi array associative dalam format yang mudah dibaca
print_r($umur);
echo "</pre>";

// Mengiterasi setiap elemen dalam array associative
foreach ($umur as $key => $value) {
    echo "Nama : $key <br> Umur : $value <br>";
}

// Definisi array multidimensi
$buahbuahan = [
    ["nama" => "apel", "warna" => "merah"],
    ["nama" => "mangga", "warna" => "oranye"],
    ["nama" => "pisang", "warna" => "kuning"],
    ["nama" => "durian", "warna" => "hijau"],
    ["nama" => "kesemek", "warna" => "coklat"],
];

echo "<br><pre>";
// print_r($buahbuahan); // Jika ingin menampilkan array multidimensi dalam format yang mudah dibaca
echo "</pre>";
?>

<!-- Membuat tabel HTML untuk menampilkan array multidimensi -->
<table border="1">
    <tr>
        <th>Nama</th>
        <th>Warna</th>
    </tr>
    <?php 
    // Mengiterasi setiap elemen dalam array multidimensi dan menampilkan dalam tabel
    foreach ($buahbuahan as $buah) { ?>
        <tr>
            <td><?php echo $buah['nama']; ?></td>
            <td><?php echo $buah['warna']; ?></td>
        </tr>
    <?php } ?>
</table>
