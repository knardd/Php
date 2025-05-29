<?php
$conn = mysqli_connect("localhost", "root", "", "absen");

$nama = $_POST['nama'];
$totaljamkerja = $_POST['jam_kerja'];

function totalGaji($totaljamkerja) {
    $gajiperjam = 5000;
    $totalGaji = $totaljamkerja * $gajiperjam;
    return $totalGaji;
}
$totalGaji = totalGaji($totaljamkerja);

echo "Nama : $nama <br>";
echo "Total jam kerja : $totaljamkerja <br>";
 echo "Total gaji : Rp.$totalGaji <br>";

 $sql = "INSERT INTO gaji (nama, total_jam_kerja, total_gaji) VALUES ('$nama', '$totaljamkerja', '$totalGaji')";
$query = mysqli_query($conn, $sql);

if ($query) {
    echo "Data berhasil disimpan <br>";
}else {
    echo "Data gagal disimpan <br>";
}
?>