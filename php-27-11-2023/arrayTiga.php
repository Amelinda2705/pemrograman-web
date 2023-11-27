<?php

$nama_array = ["Lorem", "Ipsum", "Amel", "Elsie", "Albert", "Bill", "Papa", "Marina"];

foreach ($nama_array as $nama) {
    echo $nama . "<br />";
}

echo "<br />";

$nama_capres = ["Prabowo", "Ganjar", "Gibran", "Mahmud MD", "Cak Imin", "Anies"];

foreach ($nama_capres as $nama) {
    echo "nama capres : " . $nama . "<br />";
}

echo "<br />";

$nama = [
    "Nama" => "John Doe",
    "Umur" => 1,
    "Alamat" => "Blok H4 No. 47"
];

foreach ($nama as $key => $value) {
    echo $key . ": " . $value . "<br />";
}

echo "<br />";

$produk = [
    ["nama" => "Laptop", "harga" =>1200, "stok" => 10],
    ["nama" => "Smartphone", "harga" =>500, "stok" => 20],
    ["nama" => "Printer", "harga" =>1500, "stok" => 5],
];

// $totalStok = $produk[0]["stok"] + $produk[1]["stok"] + $produk[2]["stok"];

foreach ($produk as $item) {
    echo "Produk: " . $item["nama"] . "<br/ >";
    echo "Harga: Rp." . $item["harga"] . "<br />";
    echo "Stok: " . $item["stok"] . "<br /><br />";
    $totalStok = 0;
    foreach ($produk as $item){
        $totalStok += $item["stok"];
    }
}

// echo "Total stok : " . $totalStok . "<br />";

// foreach ($produk as $item) {
//     for ($i = 1; $i <= 3; $i++) {
//         echo "Produk $i: " . $item["nama"] . "<br/ >";
//         echo "Harga: Rp." . $item["harga"] . "<br />";
//     }
// }


