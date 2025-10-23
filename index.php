<?php
class Menu {
    protected $id;
    protected $nama;
    protected $harga;

    public function __construct($id, $nama, $harga) {
        $this->id = $id;
        $this->nama = $nama;
        $this->harga = $harga;
    }

    public function getId() { return $this->id; }
    public function setId($id) { $this->id = $id; }

    public function getNama() { return $this->nama; }
    public function setNama($nama) { $this->nama = $nama; }

    public function getHarga() { return $this->harga; }
    public function setHarga($harga) { $this->harga = $harga; }

    public function displayInfo() {
        echo "ID: $this->id | Nama: $this->nama | Harga: Rp$this->harga<br>";
    }
}

class Makanan extends Menu {
    private $kategori;

    public function __construct($id, $nama, $harga, $kategori) {
        parent::__construct($id, $nama, $harga);
        $this->kategori = $kategori;
    }

    public function displayInfo() {
        echo "Makanan - ID: $this->id | Nama: $this->nama | Harga: Rp$this->harga | Kategori: $this->kategori<br>";
    }
}

class Minuman extends Menu {
    private $ukuran;

    public function __construct($id, $nama, $harga, $ukuran) {
        parent::__construct($id, $nama, $harga);
        $this->ukuran = $ukuran;
    }

    public function displayInfo() {
        echo "Minuman - ID: $this->id | Nama: $this->nama | Harga: Rp$this->harga | Ukuran: $this->ukuran<br>";
    }
}

echo "<h2>Daftar Menu Kantin</h2>";

$m1 = new Makanan(1, "Nasi Goreng", 15000, "Berat");
$m2 = new Makanan(2, "Roti Bakar", 10000, "Ringan");
$mn1 = new Minuman(3, "Es Teh", 5000, "Sedang");
$mn2 = new Minuman(4, "Kopi Hitam", 8000, "Kecil");

$m1->displayInfo();
$m2->displayInfo();
$mn1->displayInfo();
$mn2->displayInfo();
?>
