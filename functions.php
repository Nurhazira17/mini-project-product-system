<?php
/**
 * PROCESSING LAYER
 * Berisi fungsi-fungsi untuk mengolah data produk.
 */

/**
 * Menghitung total nilai aset gudang (harga x stok untuk semua produk).
 *
 * @param array $products Data produk dari Data Layer
 * @return float Total nilai aset gudang
 */
function hitungTotalNilaiStok(array $products): float
{
    $total = 0;
    foreach ($products as $produk) {
        $total += $produk["harga"] * $produk["stok"];
    }
    return $total;
}

/**
 * Menentukan apakah suatu produk berstatus stok kritis (< 3).
 *
 * @param int $stok Jumlah stok produk
 * @return bool True jika stok kritis
 */
function isStokKritis(int $stok): bool
{
    return $stok < 3;
}

/**
 * Mengembalikan class CSS baris tabel berdasarkan kondisi stok.
 *
 * @param int $stok Jumlah stok produk
 * @return string Nama class CSS
 */
function getRowClass(int $stok): string
{
    return isStokKritis($stok) ? "row-kritis" : "";
}

/**
 * Format angka menjadi format Rupiah.
 *
 * @param float $angka
 * @return string
 */
function formatRupiah(float $angka): string
{
    return "Rp " . number_format($angka, 0, ",", ".");
}
