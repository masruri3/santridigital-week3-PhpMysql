<?php
 
include 'koneksi.php';
 
$nrp = $_POST['nrp'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$umur = $_POST['umur'];
$alamat = $_POST['alamat'];
 
$sql = "INSERT INTO mahasiswa (NRP, Nama, Jurusan, Jenis_kelamin, Agama, Umur, Alamat) VALUES ('$nrp','$nama', '$jurusan', '$jenis_kelamin', '$agama', '$umur', '$alamat')";
 
if (mysqli_query($conn, $sql)) {
    header("Location:index.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>