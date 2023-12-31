<?php

$nomor = array(1, 2, 3, 4, 5);
$nomorDua = [6, 7, 8, 9, 10, "ini string"];

echo count($nomor) . "<br />";
echo count($nomorDua) . "<br />";
echo $nomor[0] . "<br />";
echo $nomorDua[5] . "<br />";

$nomor[2] = "tiga";

echo $nomor[2] . "<br /><br /><br />";

// nomor 1

$nilai = [90, 85, 78, 95, 88];
echo "Banyaknya nilai: " . count($nilai) . "<br />";

array_push($nilai, 92);
echo "Setelah penambahan nilai: " . implode(", ", $nilai) . "<br />";

$removedValue = array_pop($nilai);
echo "Nilai yang dihapus: " . $removedValue . "<br />";

$newArray = array_slice($nilai, 0, 3);
echo "Tiga nilai pertama: " . implode(", ", $newArray) . "<br />";

// map
$nilai_siswa = array(
    "Andi" => 85,
    "Budi" => 72,
    "Agus" => 90,
    "Dodi" => 65
);

// nomor 2 : menentukan jumlah siswa yang mendapatkan nilai di atas 70
$siswa_diatas_70 = array_filter($nilai_siswa, function($nilai){
    return $nilai > 70;
});
echo "Jumlah siswa yang mendapatkan nilai di atas 70: " . count($siswa_diatas_70) . "<br />";

// menentukan nilai tertinggi dan terendah
$nilai_tertinggi = max($nilai_siswa);
$nilai_terendah = min($nilai_siswa);
echo "Nilai tertinggi : $nilai_tertinggi, Nilai terendah : $nilai_terendah <br />";

// menampilkan semua nilai siswa 
foreach ($nilai_siswa as $nama => $nilai) {
    echo "$nama: $nilai <br />";
}

// nomor 3
$barang = array(
    "Laptop" => array("harga" => 8_000_000, "stok" => 10),
    "Smartphone" => array("harga" => 3_500_000, "stok" => 15),
    "Kamera" => array("harga" => 12_000_000, "stok" => 5),
);

//menampilkan barang yang harganya lebih dari 500 ribu
$barang_diatas_500k = array_filter($barang, function($item){
    return $item["harga"] > 500_000;
});
echo "Daftar barang yang harganya di atas 500 ribu : <br />";
foreach ($barang_diatas_500k as $nama => $detail) {
    echo "$nama: Harga: {$detail['harga']}, Stok: {$detail['stok']} <br />";
}

// menampilkan total nilai inventaris
$total_inventaris = array_sum(array_map(function($item){
    return $item["harga"] * $item["stok"];
}, $barang));
echo "Total nilai inventaris: $total_inventaris <br />";

// nomor 4
$jadwal_acara = array(
    "Sesi 1" => "Pendaftaran", 
    "Sesi 2" => "Pembukaan",
    "Sesi 3" => "Presentasi 1",
    "Sesi 4" => "Istirahat",
    "Sesi 5" => "Workshop"
);

// menampilkan acara sesuai urutan waktu
ksort($jadwal_acara);
echo "Jadwal Acara: <br />";
foreach($jadwal_acara as $sesi => $acara) {
    echo "$sesi: $acara <br />";
}

// menghitung total sesi yang ada
$total_sesi = count($jadwal_acara);
echo "Total sesi : $total_sesi <br />"; 