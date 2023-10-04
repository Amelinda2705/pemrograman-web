<?php 

if (3 < 2) {
    echo ("salah");
} else {
    echo ("Benar");
}

echo "<br>";

$nama = "Amel";
if ($nama == "Amel"){
    echo("Nama Saya Amel");
} else{
    echo("Saya bukan Amel");
} 

echo "<br>";

$username = "amelsie";
$password = "elseamel";

if ($username == "amelsie" || $password == "elsieamel") {
    echo ("selamat anda berhasil login");
} else {
    echo ("maaf, username dan password salah");
}

// echo "<br>";


// $nilai = 100;

// if ($nilai == 60){
//     echo "A";
// } else if  ($nilai > 70){
//     echo "B";
// } else {
//     echo "Teu LULUS";
// }

echo "<br>";

$nilai = -1;

if ($nilai >= 90 && $nilai == 100) {
    echo "A+";
} else if ($nilai <= 89 && $nilai >= 80) {
    echo "A";
} else if ($nilai <= 79 && $nilai >= 70) {
    echo "B+";
} else if ($nilai <= 69 && $nilai >= 60) {
    echo "B";
} else if ($nilai <= 59 && $nilai >= 50) {
    echo "C";
} else if ($nilai < 50 && $nilai >= 1) {
    echo "E";
} else {
    echo "Maaf, nilai anda melebihi batas";
}

echo "<br>";

$film = "Avengers";
$umur = 18;
$paket = "VIP";
$uang = 150000;
$harga_vip = 100000;
$harga_biasa = 50000;

$kembali_vip = $uang - $harga_vip;
$kembali_biasa = $uang - $harga_biasa;

if ($umur >= 18) {
    if ($film == "Avengers") {
        if ($paket == "VIP") {
            echo "Tiket $film VIP anda berhasil dibeli dengan harga Rp. 100.000/tiket";
            if ($uang > $harga_vip) {
                echo "kembalian anda Rp. $kembali_vip";
            } else if ($uang == $harga_vip) {
                echo "uang anda pas";
            } else {
                echo "uang anda kurang";
            }
        } else if ($paket == "biasa") {
            echo "Tiket $film biasa berhasil dibeli dengan harga RP. 50.000/tiket";
            if ($uang > $harga_biasa) {
                echo "kembalian anda Rp. $kembali_biasa";
            } else if ($uang == $harga_biasa) {
                echo "uang anda pas";
            } else {
                echo "uang anda kurang";
            }
        } else {
            echo "Pilih paket anda";
        }
    } else {
        echo "Maaf film yang anda pilih belum tayang. Makanya pilih avengers aja bang";
    }
} else {
    echo "Maaf anda masih kecil , Silakan pergi wleee";
}

