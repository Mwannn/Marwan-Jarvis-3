<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Produk</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
    padding: 20px;
    background-color: #499; /* Warna latar belakang */
}

.form-container {
    margin-bottom: 20px;
    background-color: #ffff #6f42c1; /* Warna latar belakang */
    border-radius: 8px; /* Membuat sudut elemen melengkung */
    padding: 20px; /* Ruang dalam elemen */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Efek bayangan */
}

.form-container .btn {
    background-color: #6f42c1; /* Warna latar tombol */
    color: white;
    border: none; /* Menghapus garis batas */
    border-radius: 4px; /* Membuat sudut tombol melengkung */
    padding: 10px 20px; /* Ruang dalam tombol */
    transition: background-color 0.3s; /* Transisi warna saat hover */
}

.form-container .btn:hover {
    background-color: #563d7c; /* Warna latar saat hover */
}

    </style>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h2>Form Produk</h2>
            <form method="post">
                <div class="form-group">
                    <label for="namaBarang">Nama Barang:</label>
                    <input type="text" class="form-control" id="namaBarang" name="namaBarang" required>
                </div>
                <div class="form-group">
                    <label for="harga">Harga:</label>
                    <input type="number" class="form-control" id="harga" name="harga" required>
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi:</label>
                    <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required></textarea>
                </div>
                <div class="form-group">
                    <label for="stok">Stok:</label>
                    <input type="number" class="form-control" id="stok" name="stok" required>
                </div>
                <button type="submit" class="btn">Submit</button>
            </form>
        </div>
        
        <div class="table-container">
            <h2>Daftar Produk</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nama Barang</th>
                        <th>Harga</th>
                        <th>Deskripsi</th>
                        <th>Stok</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Printer</td>
                        <td>1200000</td>
                        <td>Printer merk HP</td>
                        <td>15</td>
                    </tr>
                    <tr>
                        
                        <td>Tablet</td>
                        <td>2000000</td>
                        <td>Tablet merk Samsung</td>
                        <td>8</td>
                    </tr>
                    <tr>
                        <td>Mouse</td>
                        <td>150000</td>
                        <td>Mouse merk Logitech</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <td>Speaker</td>
                        <td>500000</td>
                        <td>Speaker merk JBL</td>
                        <td>25</td>
                    </tr>
                    <tr>
                        <td>Headset</td>
                        <td>250000</td>
                        <td>Headset merk Sony</td>
                        <td>30</td>
                    </tr>
                    <tr>
                        <td>Komputer</td>
                        <td>129999000</td>
                        <td>Komputer baru</td>
                        <td>120</td>
                    </tr>
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $namaBarang = $_POST['namaBarang'];
                        $harga = $_POST['harga'];
                        $deskripsi = $_POST['deskripsi'];
                        $stok = $_POST['stok'];

                        echo "<tr>
                                <td>{$namaBarang}</td>
                                <td>{$harga}</td>
                                <td>{$deskripsi}</td>
                                <td>{$stok}</td>
                            </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
