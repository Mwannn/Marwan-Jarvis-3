<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Menentukan bahwa dokumen ini adalah HTML5 -->
    <meta charset="UTF-8">
    <!-- Menentukan viewport untuk responsivitas di perangkat yang berbeda -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Judul halaman web -->
    <title>Lathian Form Processing</title>
    <!-- Mengimpor stylesheet Bootstrap untuk gaya CSS yang responsif -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <!-- Mengimpor Font Awesome untuk ikon-ikon font -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!-- Membuat kontainer dengan margin atas dan bawah (my-5) menggunakan kelas Bootstrap -->
    <div class="container my-5">
        <!-- Menampilkan judul "FORM BIODATA" -->
        <h3>FORM BIODATA</h3>
        <!-- Membuka tag formulir yang mengirim data ke file "proses.php" dengan metode POST -->
        <form action="proses.php" method="post">
            <!-- Grup form dengan tata letak menggunakan Bootstrap grid system -->
            <div class="form-group row">
                <!-- Label untuk input nama dengan kelas Bootstrap -->
                <label for="nama" class="col-4 col-form-label">Nama</label> 
                <!-- Divisi untuk tata letak grid -->
                <div class="col-8">
                    <!-- Input teks untuk nama dengan atribut required agar wajib diisi dan kelas form-control dari Bootstrap untuk gaya input yang konsisten -->
                    <input id="text" name="nama" type="text" required="required" class="form-control">
                </div>
            </div>
            <!-- Grup form untuk tanggal lahir -->
            <div class="form-group row">
                <!-- Label untuk input tanggal lahir -->
                <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir</label> 
                <!-- Divisi untuk tata letak grid -->
                <div class="col-8">
                    <!-- Input tipe tanggal dengan placeholder, atribut required, dan kelas form-control -->
                    <input id="tgl_lahir" name="tgl_lahir" placeholder="Masukkan Tanggal Lahir" type="date" class="form-control" required="required">
                </div>
            </div>
            <!-- Grup form untuk tombol submit -->
            <div class="form-group row">
                <!-- Menggeser kolom sebesar 4 grid untuk tata letak tombol -->
                <div class="offset-4 col-8">
                    <!-- Tombol submit dengan kelas Bootstrap untuk gaya tombol primer -->
                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
