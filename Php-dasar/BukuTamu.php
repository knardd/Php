<?php 
$nama = $_POST['nama'];
$usia = $_POST['usia'];
$pesan = isset($_POST['pesan']) ? $_POST['pesan'] : [];
$date = $_POST['date']; 
$date = date("d-m-y");

echo "Nama : $nama <br>";
echo "Usia : $usia <br>";
echo "Pesan : $pesan <br>";
echo "Tanggal : $date";

if ($usia < 17) {
    echo "Belum cukup umur";
    exit;
}

$isi = "Nama : $nama\nUsia : $usia\nPesan : $pesan\nDate : $date";
file_put_contents("Data.txt", $isi , FILE_APPEND);
?>
