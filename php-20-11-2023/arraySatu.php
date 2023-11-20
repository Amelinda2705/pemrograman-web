<?php 

$buah = array("Apel", "Jeruk", "Mangga");

echo $buah[0] . "<br />";
echo $buah[1] . "<br />";
echo $buah[2] . "<br />";

$buah[] = "Anggur";
echo $buah[3] . "<br /><hr />";

// tugas

$jurusan = ["RPL", "TKJ", "DKV", "TL", "KL"];

// echo $jurusan[0] . "<br />";
// echo $jurusan[1] . "<br />";
// echo $jurusan[2] . "<br />";
// echo $jurusan[3] . "<br />";
// echo $jurusan[4] . "<br />";

// $jurusan[] = "AKL";
// $jurusan[] = "OTKP";
// $jurusan[] = "BDP";
// $jurusan[] = "TBSM";
// $jurusan[] = "TPM";
array_push($jurusan, "AKL", "OTKP", "BDP", "TBSM", "TPM");

// echo $jurusan[5] . "<br />";
// echo $jurusan[6] . "<br />";
// echo $jurusan[7] . "<br />";
// echo $jurusan[8] . "<br />";
// echo $jurusan[9] . "<br /><hr />";

foreach ($jurusan as $jurusan) {
    echo $jurusan . "<br />";
}

$amel = [
    "nama" => "Amelinda", 
    "umur" => 16,
    "kelas" => "XI RPL 1"
];

$amel["nilai"] = 100;

foreach ($amel as $key => $value) {
    echo "$key = $value <br />"; 
}

echo "<br />"; 

$bisma = [
    "nama" => "Bisma", 
    "umur" => 16,
    "kelas" => "XI RPL 1"
];

$bisma["nilai"] = 95;

foreach ($bisma as $key => $value) {
    echo "$key = $value <br />"; 
}

echo "<br />"; 

$hasna = [
    "nama" => "hasna", 
    "umur" => 16,
    "kelas" => "XI RPL 1"
];

$hasna["nilai"] = 94;

foreach ($hasna as $key => $value) {
    echo "$key = $value <br />"; 
}

echo "<br />"; 

$nesyha = [
    "nama" => "nesyha", 
    "umur" => 16,
    "kelas" => "XI RPL 1"
];

$nesyha["nilai"] = 93;

foreach ($nesyha as $key => $value) {
    echo "$key = $value <br />"; 
}

echo "<br />"; 

$elsie = array(
    "nama" => "Elsie",
    "umur" => 15,
    "kelas" => "XI RPL 1"
);

$elsie ["nilai"] = 99;

echo "Nama :" . $elsie["nama"] ."<br />";
echo "Umur :" . $elsie["umur"] ."<br />";
echo "Kelas : " . $elsie["kelas"] ."<br />";
echo "Nilai :" . $elsie["nilai"] ."<br />";
