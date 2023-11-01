<?php

// pertanyaan 1

$nama = "Elon Reeve Musk";
$lahir = "28 Juni 1971";
$alamat = "Los Angeles, AS";
$pekerjaan = "Pengusaha Teknologi";
$tahun = "1995 - Sekarang";

echo "================= TOKOH IT ================= <br/>";
echo "Nama : $nama <br/>";
echo "Lahir : $lahir <br/>";
echo "Alamat : $alamat <br/>";
echo "Pekerjaan : $pekerjaan <br/>";
echo "Tahun Aktif : $tahun <br/>";

// pertanyaan 2

$nama = "amel";
$umur = 30;
$masaKerja = 65;
$sisaMasaKerja = $masaKerja - $umur;

echo "================= MENGHITUNG MASA KERJA ================= <br/>";
echo "Nama : $nama <br/>";
echo "Umur : $umur <br/>";
echo "Masa kerja $nama tersisa $sisaMasaKerja tahun lagi <br/> <br/>";


// pertanyaan 3

$nama = "amel";
$gaji = 1000000;
$tunjangan = 500000;
$potongan = 100000;
$upah = $gaji + $tunjangan - $potongan;

echo "================= MENGHITUNG UPAH GAJI ================= <br/>";
echo "Nama : $nama <br/>";
echo "Gaji Pokok : $gaji <br/>";
echo "Tujangan : $tunjangan <br/>";
echo "Potongan : $potongan <br/>";
echo "Upah bersih yang diterima $nama adalah $upah <br/> <br/>";



// pertanyaan 4

$tarif = 100000;
$uang = 10000;
$kembalian = $uang - $tarif;

echo "Selamat Datang si Jalan Tol Subang-Bandung <br/>";
echo "Untuk Tarifnya Rp. $tarif <br/>";
echo "Bayar : Rp. $uang <br/>";

if ($uang >= $tarif) {
    echo "Selamat anda memasui jalan tol subang-bandung <br/>";
    if ($kembalian > 0) {
        echo "Kembalian : $kembalian <br/>";
    }
} else {
    echo "Mohon maaf saldo anda kurang, mohon untuk topup terlebih dahulu<br/><br/>";
}


// pertanyaan 5


$nama = "dzikri";
$umur = 20;
$paket = 1;
$uang = 150000;


echo "================= STADION GELORA BUNG KARNO ================= <br/>";
echo "================= INDONESIA VS ARGENTINA ================= <br/>";
echo "Nama : $nama <br/>";
echo "Umur : $umur <br/>";


if ($umur >= 10) {
    echo "Silahkan Pilih Tiket <br/>";
    echo "1. VVIP <br/>";
    echo "2. VIP <br/>";
    echo "3. REGULER <br/>";
    echo "Pilih Tiket : $paket <br/>";
        if ($paket == 1) {
            echo "Selamat $nama Menonton Pada Tribun VVIP <br/>";
        } else if ($paket == 2) {
            echo "Selamat $nama Menonton Pada Tribun VIP <br/>";
        } else if ($paket == 3) {
            echo "Selamat $nama Menonton Pada Tribun REGULER <br/>";
        } else {
            echo "Maaf tiket tidak tersedia <br/>";
        }
} else {
    echo "Mohon maaf $nama kamu tidak memenuhi syarat memasuki stadium <br/>";
}



?>