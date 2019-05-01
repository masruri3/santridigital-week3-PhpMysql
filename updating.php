<?php
 
include 'koneksi.php';
 
if (!isset($_GET['nrp'])) {
    die("Invalid Request!!");
}
 
$nrp = $_GET['nrp'];
$sql = "DELETE FROM mahasiswa WHERE NRP=$nrp";
 
if(mysqli_query($conn, $sql)){
    header ('Location:index.php');
    //echo "Data Berhasil Terhapus";
}else{
    echo "Gagal, Error : " . mysqli_error($conn);
}
 
?>
