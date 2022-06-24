<?php
$server   = 'localhost';
$username = 'dnrahmath';
$password = 'herlambang66';
$database = 'rentalmotor';

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn) {
    die('Gagal terhubung: ' . mysqli_connect_error());
}
?>