<?php

function sayHello($namaDepan, $namaBelakang = "Linda") {
    echo "Hello $namaDepan $namaBelakang <br />";
}

sayHello("Amel"); // manggil function

function tambah(int $nomorSatu, int $nomorDua) {
    $total = $nomorSatu + $nomorDua;
    echo "$nomorSatu + $nomorDua = $total <br />";
}

tambah(3, "5");

function tambahSemua(...$angka) {
    $total = 0;
    foreach ($angka as $nomor) {
        $total += $nomor;
    }
    echo $total . "<br />";
}

tambahSemua(1, 2, 3, 4, 5, 6, 7);

echo "<h1>Studi Kasus</h1>";

// persegi
function luasPersegi($sisi) {
    $luas = $sisi * $sisi;
    return $luas;
}

function kelilingPersegi($sisi) {
    $rumus = 4 * $sisi;
    return $rumus;
}

$sisiPersegi = 5;

echo "Luas persegi dengan sisi $sisiPersegi adalah " . luasPersegi($sisiPersegi) . "<br />";
echo "Keliling persegi dengan sisi $sisiPersegi adalah " . kelilingPersegi($sisiPersegi) . "<br /><br />";

// persegi panjang
function luasPersegiPanjang($panjang, $lebar) {
    $luas = $panjang * $lebar;
    return $luas;
}

function kelilingPersegiPanjang($panjang, $lebar) {
    $rumus = 2 * ($panjang + $lebar);
    return $rumus;
}

$panjang = 6;
$lebar = 4;
echo "Luas persegi panjang dengan panjang $panjang dan lebar $lebar adalah " . luasPersegiPanjang($panjang, $lebar) . "<br />";
echo "Keliling persegi panjang dengan panjang $panjang dan lebar $lebar adalah " . kelilingPersegiPanjang($panjang, $lebar) . "<br /><br />";

// lingkaran
function luasLingkaran($jariJari) {
    $luas = M_PI * $jariJari * $jariJari;
    return $luas;
}

function kelilingLingkaran($jariJari) {
    $rumus = M_PI * (2 * $jariJari);
    return $rumus;
}

$jariJari = 7;
echo "Luas Lingkaran dengan jari-jari $jariJari adalah " . luasLingkaran($jariJari) . "<br />";
echo "Keliling Lingkaran dengan jari-jari $jariJari adalah " . kelilingLingkaran($jariJari) . "<br /><br />";

// segitiga
function luasSegitiga($alas, $tinggi) {
    $luas = 0.5 * $alas * $tinggi;
    return $luas;
}
function kelilingSegitiga($alas, $sisiSatu, $sisiDua) {
    $rumus = $alas + $sisiSatu + $sisiDua;
    return $rumus;
}

$alasSegitiga = 8;
$tinggiSegitiga = 5;
$sisiSatu = 5;
$sisiDua = 5;

echo "Luas Segitiga dengan alas $alasSegitiga dan tinggi $tinggiSegitiga adalah " . luasSegitiga($alasSegitiga, $tinggiSegitiga) . "<br />";
echo "Keliling Segitiga dengan alas $alasSegitiga dan sisi $sisiSatu dan sisi $sisiDua adalah " . kelilingSegitiga($alasSegitiga, $sisiSatu, $sisiDua) . "<br /><br />";

// jajar genjang
function luasJajarGenjang($alas, $tinggi) {
    $luas = $alas * $tinggi;
    return $luas;
}
function kelilingJajarGenjang($alas, $tinggi) {
    $rumus = 2 * ($alas + $tinggi);
    return $rumus;
}

$alasJajarGenjang = 9;
$tinggiJajarGenjang = 6;
echo "Luas Jajar Genjang dengan alas $alasJajarGenjang dan tinggi $tinggiJajarGenjang adalah " . luasJajarGenjang($alasJajarGenjang, $tinggiJajarGenjang) . "<br />";
echo "Keliling Jajar Genjang dengan alas $alasJajarGenjang dan tinggi $tinggiJajarGenjang adalah " . kelilingJajarGenjang($alasJajarGenjang, $tinggiJajarGenjang) . "<br /><br />";