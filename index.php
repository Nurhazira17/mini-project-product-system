<?php
/**
 * PRESENTATION LAYER
 * Merajut Data Layer dan Processing Layer, lalu merender ke tabel HTML.
 */

require_once "products.php";
require_once "functions.php";

$totalNilaiStok = hitungTotalNilaiStok($products);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Product Information System</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f8;
            margin: 0;
            padding: 30px;
        }
        .container {
            max-width: 1000px;
            margin: 0 auto;
            background: #fff;
            padding: 25px 30px;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }
        h1 {
            color: #1a3d7c;
            border-bottom: 2px solid #1a3d7c;
            padding-bottom: 10px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px 12px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #1a3d7c;
            color: #fff;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        .row-kritis {
            background-color: #ffd6d6 !important;
        }
        .badge-kritis {
            background-color: #d9534f;
            color: #fff;
            padding: 2px 8px;
            border-radius: 4px;
            font-size: 12px;
        }
        .summary {
            margin-top: 20px;
            padding: 15px;
            background-color: #e8f0fe;
            border-left: 4px solid #1a3d7c;
            border-radius: 4px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Product Information System</h1>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Produk</th>
                    <th>Kategori</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Deskripsi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $produk): ?>
                <tr class="<?= getRowClass($produk['stok']) ?>">
                    <td><?= htmlspecialchars($produk['id']) ?></td>
                    <td><?= htmlspecialchars($produk['nama']) ?></td>
                    <td><?= htmlspecialchars($produk['kategori']) ?></td>
                    <td><?= formatRupiah($produk['harga']) ?></td>
                    <td>
                        <?= htmlspecialchars($produk['stok']) ?>
                        <?php if (isStokKritis($produk['stok'])): ?>
                            <span class="badge-kritis">Stok Kritis</span>
                        <?php endif; ?>
                    </td>
                    <td><?= htmlspecialchars($produk['deskripsi']) ?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <div class="summary">
            Total Nilai Aset Gudang: <?= formatRupiah($totalNilaiStok) ?>
        </div>
    </div>
</body>
</html>
