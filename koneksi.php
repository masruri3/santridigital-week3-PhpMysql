<?php
$_servername = 'localhost';
$_username = 'root';
$_password = '';
$_dbname = 'santri';

$conn = mysqli_connect($_servername, $_username, $_password, $_dbname);

if (!$conn) {
    die("Koneksi Gagal : ". mysqli_error());
}
// else {
//     die("Koneksi Sukses");
// }

?>