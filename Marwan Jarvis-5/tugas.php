    <?php
    // Definisi class Kendaraan
    class Kendaraan {
        // Properti
        public $merk;
        public $tahun;

        // Konstruktor
        public function __construct($merk, $tahun) {
            $this->merk = $merk;
            $this->tahun = $tahun;
        }

        // Method
        public function getInfo() {
            return "Kendaraan ini adalah $this->merk yang diproduksi pada tahun $this->tahun.";
        }
    }

    // Definisi class Mobil yang mewarisi class Kendaraan
    class Mobil extends Kendaraan {
        // Properti baru
        public $jenis;

        // Konstruktor
        public function __construct($merk, $tahun, $jenis) {
            // Memanggil konstruktor parent class
            parent::__construct($merk, $tahun);
            $this->jenis = $jenis;
        }

        // Method baru
        public function getDetail() {
            return "Mobil ini adalah $this->merk, jenis $this->jenis, diproduksi pada tahun $this->tahun.";
        }
    }

    // Membuat object berdasarkan class Mobil
    $mobilBaru = new Mobil("Toyota", 2020, "SUV");

    // Menampilkan informasi dari object
    echo $mobilBaru->getInfo();
    echo "<br>";
    echo $mobilBaru->getDetail();
    ?>
