<?php 
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
require '../koneksi.php';

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];

//memanggil sql
$sql = "select * from tbl_user where username='$username' and password='$password'";
$data = mysqli_query($conn, $sql);


// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
$dataAss = mysqli_fetch_assoc($data);

if($cek > 0){
	$_SESSION['idusr'] = $dataAss['id'];
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:home.php");
}else{
	header("location:home.php?pesan=gagal");
}
?>