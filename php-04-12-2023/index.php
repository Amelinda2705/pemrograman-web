<?php
// panggil koneksi
require_once 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
    <h1>CRUD dengan PHP MYSQLi</h1>

    <!-- CREATE atau menambahkan data yang akan dikirim ke add.php -->
    <form action="add.php" method="post">
        <input type="text" name="nama_produk" placeholder="Nama Produk">
        <input type="number" name="harga" placeholder="Harga">
        <input type="number" name="qty" placeholder="Qty">
        <input type="submit" name="submit" value="Tambah Data">
    </form><br />
    <!-- READ -->
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Qty</th>
            <th colspan="2">Aksi</th>
        </tr>
        <?php
        // menampilkan semua data
        $q = $conn->query("SELECT * FROM produk");
        $no = 1;
        while ($dt = $q->fetch_assoc()) :
        ?>
        <tr>
            <td><?= $no++ ?></td>
            <td><?= $dt['nama_produk'] ?></td>
            <td><?= $dt['harga'] ?></td>
            <td><?= $dt['qty'] ?></td>
            <td><a href="update.php?id=<?= $dt['id_produk'] ?>">Ubah</a></td>
            <td><a href="delete.php?id=<?= $dt['id_produk'] ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a></td>
        </tr>
        <?php 
        endwhile;
        ?>
    </table>
</body>
</html>