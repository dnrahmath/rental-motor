<?php
$server   = 'sql6.freesqldatabase.com';
$username = 'sql6501913';
$password = 'jg1AhMT2NU';
$database = 'sql6501913';

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn) {
    die('Gagal terhubung: ' . mysqli_connect_error());
}
?>
