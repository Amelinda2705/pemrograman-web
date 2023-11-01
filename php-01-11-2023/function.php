<?php

function rpl() {
    echo "Nama : Amelinda <br />";
    echo "Kelas : XI<br />";
    echo "Jurusan : RPL<br /><br />";
}

function tkj() {
    echo "Nama : Arden <br />";
    echo "Kelas : XII<br />";
    echo "Jurusan : TKJ<br /><br />";
}

function bdp() {
    echo "Nama : Raid <br />";
    echo "Kelas : XII<br />";
    echo "Jurusan : BDP<br /><br />";
}

function dkv() {
    echo "Nama : Fitri <br />";
    echo "Kelas : XI<br />";
    echo "Jurusan : DKV<br /><br />";
}

function akl() {
    echo "Nama : Nurul <br />";
    echo "Kelas : XI<br />";
    echo "Jurusan : AKL<br /><br />";
}

function mplb() {
    echo "Nama : Meylinda <br />";
    echo "Kelas : XI<br />";
    echo "Jurusan : MPLB<br /><br />";
}

function to() {
    echo "Nama : Adis <br />";
    echo "Kelas : X<br />";
    echo "Jurusan : TO<br /><br />";
}

function tpm() {
    echo "Nama : Elsie <br />";
    echo "Kelas : XI<br />";
    echo "Jurusan : TPM<br /><br />";
}

function kuliner() {
    echo "Nama : Magna <br />";
    echo "Kelas : XI<br />";
    echo "Jurusan : Kuliner<br /><br />";
}

function tl() {
    echo "Nama : Umi <br />";
    echo "Kelas : XI<br />";
    echo "Jurusan : TL<br /><br />";
}

// rpl();
// tkj();
// dkv();
// bdp();
// mplb();
// akl();
// to();
// tpm();
// tl();
// kuliner();


$pilihJurusan = 1;

switch ($pilihJurusan) {
    case "1":
        for ($i = 1; $i <= 5; $i++){
            echo "{$i}. ";
            tkj();
        };
        break;  
    case "2":
        for ($i = 1; $i <= 5; $i++){
            echo "{$i}. ";
            rpl();
        };
        break;  
    case "3":
        for ($i = 1; $i <= 5; $i++){
            echo "{$i}. ";
            akl();
        };
        break;  
    case "4":
        for ($i = 1; $i <= 5; $i++){
            echo "{$i}. ";
            mplb();
        };
        break;  
    case "5":
        for ($i = 1; $i <= 5; $i++){
            echo "{$i}. ";
            dkv();
        };
        break;  
    case "6":
        for ($i = 1; $i <= 5; $i++){
            echo "{$i}. ";
            kuliner();
        };
        break;  
    case "7":
        for ($i = 1; $i <= 5; $i++){
            echo "{$i}. ";
            tl();
        };
        break;  
    case "8":
        for ($i = 1; $i <= 5; $i++){
            echo "{$i}. ";
            to();
        };
        break;  
    case "9":
        for ($i = 1; $i <= 5; $i++){
            echo "{$i}. ";
            tpm();
        };
        break;  
    case "10":
        for ($i = 1; $i <= 5; $i++){
            echo "{$i}. ";
            bdp();
        };
        break;  
}

