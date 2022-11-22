<?php
$server   = 'api.satutitikempat.xyz'; //localhost
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

// XAMPP Control Panel v3.3.0 -> mysql -> Actions -> Config -> my.ini
//[mysqld]
//skip-grant-tables  //tambahkan ini
//port=3306



?>
