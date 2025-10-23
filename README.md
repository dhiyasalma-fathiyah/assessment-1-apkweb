Sistem Manajemen Menu Kantin Sederhana (PHP OOP) ☕️

Proyek ini adalah contoh sederhana implementasi konsep Pemrograman Berorientasi Objek (OOP) di PHP untuk mengelola daftar menu kantin.

📄 Deskripsi

Kode ini mendemonstrasikan tiga konsep utama OOP:

1.  Enkapsulasi: Properti kelas dilindungi (`protected` atau `private`) dan diakses melalui metode Getter dan Setter.
2.  Inheritansi (Pewarisan): Kelas `Makanan` dan `Minuman` mewarisi properti dan metode dari kelas dasar (`Base Class`), yaitu `Menu`.
3.  Polimorfisme: Metode `displayInfo()` diimplementasikan secara berbeda di kelas turunan (`Makanan` dan `Minuman`) untuk menampilkan detail spesifik mereka.

📁 Struktur Kelas

| Kelas | Deskripsi | Atribut Khusus | Metode Utama |
| :--- | :--- | :--- | :--- |
| `Menu`| Kelas dasar untuk semua item menu. | `$id`, `$nama`, `$harga` | `__construct()`, `getId()`, `setHarga()`, `displayInfo()` |
| `Makanan` | Mewarisi dari `Menu`. Representasi item makanan. | `$kategori` (misalnya, "Berat", "Ringan") | `displayInfo()` (Override) |
| `Minuman` | Mewarisi dari `Menu`. Representasi item minuman. | `$ukuran` (misalnya, "Kecil", "Sedang") | `displayInfo()` (Override) |

💡 Contoh Output

Saat kode dijalankan, output yang ditampilkan di browser akan terlihat seperti ini:

```html
<h2>Daftar Menu Kantin</h2>
Makanan - ID: 1 | Nama: Nasi Goreng | Harga: Rp15000 | Kategori: Berat<br>
Makanan - ID: 2 | Nama: Roti Bakar | Harga: Rp10000 | Kategori: Ringan<br>
Minuman - ID: 3 | Nama: Es Teh | Harga: Rp5000 | Ukuran: Sedang<br>
Minuman - ID: 4 | Nama: Kopi Hitam | Harga: Rp8000 | Ukuran: Kecil<br>
```

-----

✍️ Kontribusi

Jika Anda ingin memperluas proyek sederhana ini, Anda bisa menambahkan fitur-fitur seperti:

Kelas `Pemesanan`: Untuk mengelola item yang dipesan.
Metode `hitungStok()`: Menambahkan properti stok pada kelas `Menu`.
Implementasi Array: Membuat koleksi objek menu untuk manajemen yang lebih dinamis.
