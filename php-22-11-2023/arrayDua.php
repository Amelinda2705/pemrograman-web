<?php

$nama = [
    "biodataSatu" => [
        "nama" => "Amelinda",
        "umur" => 17, 
        "kelas" => "XI RPL 1"
    ],
    "biodataDua" => [
        "nama" => "Elsie BG",
        "umur" => 10, 
        "kelas" => "3D"
    ],
    "biodataTiga" => [
        "nama" => "Taylor Swift",
        "umur" => 34, 
        "kelas" => "udah lulus"
    ],
    ];

$daftarBuah = [
    "Strawberry" => [
        "harga" => 3000,
        "stok" => 10
    ],
    "Pir" => [
        "harga" => 1000,
        "stok" => 8
    ],
    "Naga" => [
        "harga" => 9000,
        "stok" => 5
    ]
    ];

    echo "Informasi Strawberry". "<br />";
    echo "Harga " . $daftarBuah["Strawberry"]["harga"] . "<br />";
    echo "Stok " . $daftarBuah["Strawberry"]["stok"] . "<br />";
    $hargaStrawberry = $daftarBuah["Strawberry"]["harga"];
    $stokStrawberry = $daftarBuah["Strawberry"]["stok"];
    $totalStrawberry = $hargaStrawberry * $stokStrawberry;

    echo "Total Harga Strawberry = " . $totalStrawberry  . "<br /><br />";
    

    echo "Informasi Pir" . "<br />";
    echo "Harga " . $daftarBuah["Pir"]["harga"] . "<br />";
    echo "Stok " . $daftarBuah["Pir"]["stok"] . "<br />";
    $hargaPir = $daftarBuah["Pir"]["harga"];
    $stokPir = $daftarBuah["Pir"]["stok"];
    $totalPir = $hargaPir * $stokPir;

    echo "Total Harga Pir = " . $totalPir . "<br /><br />";

    echo "Informasi Naga" . "<br />";
    echo "Harga " . $daftarBuah["Naga"]["harga"] . "<br />";
    echo "Stok " . $daftarBuah["Naga"]["stok"] . "<br />";

    $hargaNaga = $daftarBuah["Naga"]["harga"];
    $stokNaga = $daftarBuah["Naga"]["stok"];
    $totalNaga = $hargaNaga * $stokNaga;

    echo "Total Harga Naga = " . $totalNaga . "<br /><br />";