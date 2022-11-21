<?php
$server   = 'http://193.111.124.139:3306/';
$username = 'root';
$password = '';
$database = 'rentalmotor';

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn) {
    die('Gagal terhubung: ' . mysqli_connect_error());
}
?>
