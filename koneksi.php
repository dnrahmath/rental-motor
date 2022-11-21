<?php
$server   = 'api.satutitikempat.xyz';
$username = 'root';
$password = '';
$database = 'rentalmotor';

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn) {
    die('Gagal terhubung: ' . mysqli_connect_error());
}
?>
