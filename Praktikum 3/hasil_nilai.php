<?php
require_once 'model.php';

if (!isset($_POST["submit"])) {
    header("Location: index.php");
    exit;
}

$proses = $_POST["submit"];
$nama = $_POST["nama"];
$mata_pelajaran = $_POST["matakuliah"]; // Updated field name
$nilai_tugas = $_POST["tugas"];
$nilai_uts = $_POST["uts"];
$nilai_uas = $_POST["uas"];
$nilai_akhir = ($nilai_tugas + $nilai_uts + $nilai_uas) / 3;

echo 'Nama Siswa : ' . $nama;
echo '<br> Mata pelajaran : ' . $mata_pelajaran;
echo '<br> Nilai Tugas : ' . $nilai_tugas;
echo '<br> Nilai UTS : ' . $nilai_uts;
echo '<br> Nilai UAS : ' . $nilai_uas;

echo '<br> Nilai Akhir : ' . $nilai_akhir;
echo '<br> DINYATAKAN : ' . kelulusan($nilai_akhir); // Make sure kelulusan function is defined in model.php
echo '<br> GRADE : ' . grade($nilai_akhir); // Make sure grade function is defined in model.php
?>
