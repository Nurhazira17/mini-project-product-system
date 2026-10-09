📦 Inventory Management System

🖥️ Sistem Informasi Manajemen Persediaan Barang

Mata Kuliah: Pemrograman Web
Materi: Relational Database + Advanced PHP
Mini Project: Inventory Management System

---

📌 Deskripsi Proyek

Inventory Management System merupakan aplikasi berbasis web yang digunakan untuk mengelola persediaan barang secara terstruktur. Sistem ini membantu pengguna mencatat data produk, kategori, supplier, serta transaksi barang masuk dan barang keluar.

Aplikasi ini dirancang untuk menjaga keakuratan stok, mempermudah pencarian barang, dan menyajikan informasi persediaan yang dibutuhkan dalam kegiatan operasional.

Fitur Utama

- Mengelola data kategori, produk, dan supplier.
- Mencatat transaksi barang masuk dan barang keluar.
- Memantau jumlah stok barang secara otomatis.
- Menampilkan produk dengan stok rendah.
- Mencari dan menyaring data produk.
- Menampilkan laporan persediaan barang.
- Menyediakan login dan pembagian hak akses pengguna.
- Menjaga keamanan dan konsistensi data.

---

⚙️ Teknologi yang Digunakan

- HTML & CSS — Membuat struktur dan tampilan halaman web.
- PHP — Mengolah data dan menjalankan logika aplikasi.
- MySQL — Menyimpan dan mengelola database.
- PDO — Menghubungkan PHP dengan database menggunakan prepared statement.
- XAMPP — Menjalankan server lokal selama pengembangan.

---

🗄️ Struktur Database

Database dirancang menggunakan relasi antar-tabel untuk menjaga konsistensi data.

Nama Tabel| Fungsi
"users"| Menyimpan data pengguna dan hak akses.
"categories"| Menyimpan kategori produk.
"products"| Menyimpan informasi produk dan stok.
"suppliers"| Menyimpan data pemasok barang.
"product_suppliers"| Menghubungkan produk dengan supplier.
"stock_movements"| Mencatat riwayat barang masuk dan keluar.

Relasi Database

- One-to-One: Pengguna dengan profil pengguna.
- One-to-Many: Kategori dengan produk.
- Many-to-Many: Produk dengan supplier.

Relasi tersebut menggunakan foreign key untuk membantu menjaga integritas data.

---

📊 Aturan Pengelolaan Stok

Sistem menerapkan aturan bisnis agar persediaan tetap akurat.

- Barang masuk akan menambah jumlah stok.
- Barang keluar akan mengurangi jumlah stok.
- Jumlah barang keluar tidak boleh melebihi stok tersedia.
- Stok tidak boleh bernilai negatif.
- SKU setiap produk harus unik.
- Harga dan jumlah barang tidak boleh negatif.
- Riwayat transaksi harus tersimpan dengan benar.

Rumus perhitungan stok:

Stok akhir = Stok awal + Barang Masuk − Barang Keluar

---

🔐 Keamanan Sistem

Untuk menjaga keamanan aplikasi, sistem menerapkan beberapa mekanisme berikut:

- Login dan logout pengguna.
- Password disimpan menggunakan hashing.
- Pembagian hak akses antara admin dan staff.
- Prepared statement untuk mengurangi risiko SQL Injection.
- Validasi input pada sisi server.
- Output encoding untuk mengurangi risiko Cross-Site Scripting (XSS).
- Database transaction untuk menjaga konsistensi perubahan stok dan riwayat transaksi.

---

🚀 Cara Menjalankan Proyek

1. Instal dan buka XAMPP.
2. Aktifkan Apache dan MySQL.
3. Buat database melalui phpMyAdmin.
4. Import file struktur database "schema.sql".
5. Letakkan folder proyek di direktori "C:\xampp\htdocs\inventory-app".
6. Sesuaikan konfigurasi koneksi database pada file PHP.
7. Buka browser dan akses "http://localhost/inventory-app/".

Catatan: Langkah ini merupakan panduan menjalankan proyek di lingkungan lokal. Pastikan source code dan file "schema.sql" sudah tersedia.

---

🎯 Tujuan Proyek

Proyek ini bertujuan menerapkan konsep database relasional dan PHP tingkat lanjut dalam membangun sistem pengelolaan persediaan barang. Melalui proyek ini, mahasiswa dapat memahami relasi database, operasi SQL, autentikasi, keamanan aplikasi, serta penerapan business logic pada proses transaksi.

---

Dibuat untuk memenuhi tugas praktik Pemrograman Web.
