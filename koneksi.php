<?php
$server   = '193.111.124.139';
$port     = '3306';
$username = 'root';
$password = '';
$database = 'rentalmotor';

$conn = mysqli_connect($server, $username, $password, $database, $port);
if (!$conn) {
    die('Gagal terhubung: ' . mysqli_connect_error());
}
?>
