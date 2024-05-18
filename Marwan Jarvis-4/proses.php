<?php 
if ($_SERVER['REQUEST_METHOD'] == "POST") { // Memeriksa apakah permintaan menggunakan metode POST
?>
    <table> <!-- Mulai tabel -->
        <tr> <!-- Mulai baris pertama -->
            <td>Nama</td> <!-- Sel pertama berisi teks "Nama" -->
            <td>: <?= htmlspecialchars($_POST['nama']) ?></td> <!-- Sel kedua berisi nilai input nama yang telah di-post -->
        </tr> <!-- Akhir dari baris pertama -->
        <tr> <!-- Mulai baris kedua -->
            <td>Tanggal Lahir</td> <!-- Sel pertama berisi teks "Tanggal Lahir" -->
            <td>: <?= htmlspecialchars($_POST['tgl_lahir']) ?></td> <!-- Sel kedua berisi nilai input tanggal lahir yang telah di-post -->
        </tr> <!-- Akhir dari baris kedua -->
    </table> <!-- Akhir dari tabel -->
<?php
} else { // Jika permintaan bukan menggunakan metode POST
    header('Location: form.php'); // Arahkan pengguna kembali ke halaman form
    exit(); // Pastikan untuk menghentikan eksekusi skrip setelah redirect
}
?>
