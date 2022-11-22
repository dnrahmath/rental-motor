<?php
$server   = 'api.satutitikempat.xyz';
$port     = '3306';
$username = 'rahmat';
$password = 'mypassword';
$database = 'rentalmotor';

$conn = mysqli_connect($server, $username, $password, $database, $port);
if (!$conn) {
    die('Gagal terhubung: ' . mysqli_connect_error());
}



//CREATE USER 'rahmat'@'localhost' IDENTIFIED BY 'mypassword';
//GRANT ALL PRIVILEGES ON * . * TO 'rahmat'@'localhost';
//FLUSH PRIVILEGES;

// xampp -> mysql -> my.ini
//[mysqld]
//skip-grant-tables
//port=3306



?>
