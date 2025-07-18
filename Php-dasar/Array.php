<?php
$barang = [
  ["nama" => "Mouse", "harga" => 80000, "stok" => 10],
  ["nama" => "Keyboard", "harga" => 150000, "stok" => 0],
  ["nama" => "Monitor", "harga" => 1000000, "stok" => 3],
  ["nama" => "Flashdisk", "harga" => 50000, "stok" => 5],
  ["nama" => "Headset", "harga" => 200000, "stok" => 0]
];
foreach ($barang as $angka) {
if ($angka['stok'] > 0) {
  echo " - " . $angka['nama'] . " Rp " . $angka['harga'] . " Stok : " .$angka['stok'] . "<br>";
}
}
echo "<br><strong>Ini adalah barang yang dibawah 200000</strong></br>";
foreach ($barang as $angka) {
if ($angka['harga'] < 200000 && $angka['stok'] > 0) {
echo "-" . $angka['nama'] . " Rp " . $angka['harga'] . "Stok : " . $angka['stok'] . "<br>";
}
}
$total = 0;
echo "<br><strong>Total stok</strong></>";
foreach ($barang as $angka) {
$total += $angka['stok'];
}
echo "jadi total stok adalah $total <br>";

$makan = [
  "Bakso" => 12000,
  "Soto" => 10000,
  "Nasi Goreng" => 15000,
  "Mie Ayam" => 11000,
  "Rendang" => 20000
];
$total = 0;

foreach ($makan as $nama => $harga) {
$total += $harga;
echo $nama, $harga . "<br>";
}
echo  "Jadi totalnya adalah $total <br>";

foreach ($makan as $nama => $harga) {
  if ($harga > 12000) {
    echo "$nama lebih dari 12000 dengan harga $harga <br>";
  }
}
ksort($makan);
foreach ($makan as $nama => $harga) {
  echo "$nama <br>";
}
asort($makan);
foreach ($makan as $nama => $harga) {
  echo "$harga <br>";
}
foreach ($makan as $nama => $harga) {
}

$buah = ["Apel" => 5000, "Pisang" => 7000, "Mangga" => 10000];
$total = 0;
foreach ($buah as $nama => $harga) {
$total += $harga;
}
echo $total;

$makanan = ['nasgor', 'naspad', 'miegor', 'nasikuning', 'nasiliwet'];
echo implode(",", $makanan);

$buah1 = ["apel", "pisang", "mangga"];
array_push($buah1, "nanas", "kiwi");
print_r($buah1);

// $buah = ["apel - 5000", "pisang - 7000", "mangga - 10000"];
array_push($buah, "anggur - 12000");
sort($buah);
echo implode(",", $buah);
?>
