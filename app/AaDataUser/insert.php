<?php

include("../../koneksi.php");

$namatbl = "tbl_user";

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['TAMBAH'])){

    // ambil data dari formulir
    $id = '0';
    $username = $_POST['username'];
    $password = $_POST['password'];

    // buat query
    $sql = "INSERT INTO $namatbl (id, username, password) VALUE ('$id', '$username', '$password')";
    $query = mysqli_query($conn, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: ./index.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: ./index.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>