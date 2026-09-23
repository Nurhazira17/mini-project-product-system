# Mini Project 1: Product Information System

Mini project mata kuliah Pemrograman Web — Pertemuan 2.
Sistem manajemen data informasi produk sederhana berbasis PHP, disusun dengan arsitektur 3 layer.

## Struktur Arsitektur

| Layer | File | Fungsi |
|---|---|---|
| Data Layer | `products.php` | Menyimpan data produk sebagai multidimensional array (ID, Nama, Kategori, Harga, Stok, Deskripsi) |
| Processing Layer | `functions.php` | Berisi fungsi `hitungTotalNilaiStok()` untuk menghitung nilai aset gudang, serta logika kondisional untuk menandai stok kritis (< 3) |
| Presentation Layer | `index.php` | Merajut seluruh komponen dengan `require_once` dan merender data ke tabel HTML menggunakan `foreach` |

## Cara Menjalankan

1. Pastikan PHP sudah terpasang (PHP 7.4+ direkomendasikan).
2. Jalankan server bawaan PHP dari folder project:
   ```bash
   php -S localhost:8000
   ```
3. Buka browser ke `http://localhost:8000`

## Fitur

- Menampilkan daftar produk dalam bentuk tabel.
- Baris produk dengan stok < 3 otomatis ditandai (highlight merah + badge "Stok Kritis").
- Menampilkan total nilai aset gudang (harga × stok seluruh produk).

## Catatan

Project ini merupakan implementasi dari cetak biru (blueprint) arsitektur konseptual yang dirancang pada sesi desain sebelumnya (tanpa coding).
