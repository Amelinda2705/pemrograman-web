<?php

$kelas = "XI RPL 1";
$tanggal = "29-11-2023";
$barang = array(
    ["nama" => "Real Good", "item" => 2, "harga" => 2000],
    ["nama" => "Yogurt", "item" => 2, "harga" => 1000],
    ["nama" => "Nextar", "item" => 1, "harga" => 2500],
    ["nama" => "Roti Aoka", "item" => 2, "harga" => 2500],
    ["nama" => "Mentos", "item" => 5, "harga" => 2500]
);
$total = 0;
$totalHarga = 0;
$bayar = 100000;
$kembali = 0;
$totalItem = 0;
$kasir = "John Doe";

echo "<h1>Mimake Mart</h1>";

echo "Customer : $kelas <br />";
echo "Tanggal : $tanggal <br />";

echo "--------------------------------------- <br />";

foreach ($barang as $key => $value) {
    echo "Barang " . ($key + 1) . " : " . $value["nama"] . " <br />";
    echo $value["item"] . " x " . $value["harga"] . "                               = ";
    
    $total = $value["item"] * $value["harga"];

    echo $total . " <br />";

    $totalHarga += $total;

    $kembali = $bayar - $totalHarga;
}

echo "--------------------------------------- <br />";

foreach ($barang as $produk) {
    $totalItem += $produk["item"];
}

echo "Item = " . $totalItem;
echo " Total = " . $totalHarga . "<br />";
echo "Bayar = " . $bayar . "<br />";
echo "Kembali = " . $kembali . "<br />";
echo "Kasir = " . $kasir . "<br />";

echo "--------------------------------------- <br />";
