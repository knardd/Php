<?php 
function cekGenap ($genap) {
if ($genap % 2 == 0) {
    echo "genap <br>";
}}
cekGenap(8);

function salam($nama = "Tamu") {
echo "Halo $nama <br>";
}
salam();

function hitungDiskon($harga, $diskon) {
    $potongan = $harga * ($diskon / 100);
    return $harga - $potongan. "<br>"; 
}
echo hitungDiskon(100000, 20);

function jumlahkan($angka) {
$jumlah = 0;
foreach ($angka as $angka1)
$jumlah += $angka1;
return $jumlah;
}
echo jumlahkan([1, 2, 3, 4]). "<br>";

function konversiSuhu($celcius) {
    $Fahrenheit = ($celcius * 9/5) + 32;
    echo "Fahrenheit $Fahrenheit"; 
}
echo konversiSuhu(30). "<br>";

function formatTanggal($tanggal) {
$tanggal = date("d-m-Y");
echo $tanggal. "<br>";
} 
formatTanggal("2025-05-21");

function rataRata($nilai) {
    $total = 0;
    foreach ($nilai as $data) {
    $total += $data; }
$bagi = count($nilai);
$ratarata = $total / $bagi;
echo $total."<br>";
echo $bagi."<br>";
echo $ratarata."<br>";
}
echo rataRata([70, 80, 90])."<br>";

function judulBuku($judul) {
    return ucwords($judul);
}
echo judulBuku("belajar php dasar") . "<br>"; 

function cekEmail($email) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return "Validasi berhasil";
    }else {
        return "Validasi gagal";
    }
}
echo cekEmail("kenkum@email.com") . "<br>";

function isPalindrome($kata) {
    $kecil = strtolower($kata);
    $balik = strrev($kecil);
    return $balik === $kata;
}
var_dump(isPalindrome("katak")) . "<br>";

 function kalkulator($angka1, $angka2, $operator) {
switch ($operator) {
    case '+' :
        return $angka1 + $angka2;
        break;
    case '-' :
        return $angka1 - $angka2;
        break;
    case '*' :
        return $angka1 * $angka2;
        break;
    case '/' :
        return $angka1 / $angka2;
        break;
    default:
    break;
}
}
echo kalkulator(10, 20, '+') . "<br>";
echo kalkulator(30, 20, '-') . "<br>";
echo kalkulator(10, 5, '/') . "<br>";
echo kalkulator(10, 10, '*') . "<br>";

function simpanUser($data) {
$error = [];

if (empty($data['nama'])) {
    echo "Tidak mengisi nama";
    exit;
}

if (filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
    echo "Email salah";
}

if ($data['password'] < 8) {
    echo "password harus lebih dari 8";
}
}

function luasPersegi($sisi) {
    return $sisi * $sisi;
}
echo luaspersegi(5);
 
$siswa = ['nama' => 'Ari', 'kelas' => 'X'];
 echo $siswa['nama'] . "<br>";

 $x = 10;
$y = "10";
var_dump($x == $y). "<br>";
var_dump($x === $y). "<br>";

function kayu() {
    echo "melompat sebanyak 1x <br>";
    echo "tangan ke atas <br>";
    echo "haha <br>";
}
$halangan = true;

if ($halangan) {
    echo "ada kayu <br>";
    kayu();
}

function melompat () {
    echo "lompat sepanjang 1 meter <br>";
}
function tangan() {
    echo "tangan di angkat setinggi tingginya <br>";
}
function halangan() {
    echo "ada halangan di depan <br>";
    melompat();
    tangan();
}
function deteksihalangan($halangan) {
    if ($halangan == "kayu") {
        echo "ayo lompat <br>";
        halangan();
        echo "kamu selamat <br>";
    }
}
deteksihalangan("kayu");

function bangunTidur() {
    echo "Bangun dari tempat tidur... <br>";
}
function matikanAlarm() {
    echo "Menekan tombol alarm untuk mematikannya. <br>";
}

function deteksiSuara($suara) {
    if ($suara == "alarm") {
        echo "Alarm berbunyi! <br>";
        bangunTidur();
        matikanAlarm();
    }
}
deteksiSuara("alarm");
?> 