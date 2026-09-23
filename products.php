<?php
/**
 * DATA LAYER
 * Menyimpan data produk dalam bentuk multidimensional array.
 * Setiap produk memiliki: ID, Nama, Kategori, Harga, Stok, Deskripsi
 */

$products = [
    [
        "id" => 1,
        "nama" => "Laptop Asus ROG",
        "kategori" => "Elektronik",
        "harga" => 15000000,
        "stok" => 5,
        "deskripsi" => "Laptop gaming performa tinggi dengan RTX series."
    ],
    [
        "id" => 2,
        "nama" => "Mouse Wireless Logitech",
        "kategori" => "Aksesoris",
        "harga" => 250000,
        "stok" => 2,
        "deskripsi" => "Mouse wireless ergonomis dengan baterai tahan lama."
    ],
    [
        "id" => 3,
        "nama" => "Keyboard Mechanical",
        "kategori" => "Aksesoris",
        "harga" => 750000,
        "stok" => 8,
        "deskripsi" => "Keyboard mechanical switch blue, RGB backlight."
    ],
    [
        "id" => 4,
        "nama" => "Monitor LG 24 inch",
        "kategori" => "Elektronik",
        "harga" => 1800000,
        "stok" => 1,
        "deskripsi" => "Monitor IPS Full HD dengan refresh rate 75Hz."
    ],
    [
        "id" => 5,
        "nama" => "Webcam Logitech C920",
        "kategori" => "Aksesoris",
        "harga" => 900000,
        "stok" => 12,
        "deskripsi" => "Webcam Full HD 1080p untuk meeting dan streaming."
    ],
];
