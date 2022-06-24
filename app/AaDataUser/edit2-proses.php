<?php

include("../../koneksi.php");

$namatbl = "tbl_user";

// cek apakah tombol PERBARUI sudah diklik atau blum?
if(isset($_POST['PERBARUI'])){

    // ambil data dari formulir
    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    // buat query update
    $sql = "UPDATE $namatbl SET username='$username', password='$password' WHERE id=$id";
    $query = mysqli_query($conn, $sql);

    // apakah query update berhasil?
    if( $query ) {
        header('Location: ./index.php');
    } else {
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>