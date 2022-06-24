<?php

include("../../koneksi.php");

$namatbl = "tbl_motor";

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['TAMBAH'])){

    // ambil data dari formulir
    $id = '0';
    $merekmotor = $_POST['merekmotor'];
    $platnomotor = $_POST['platnomotor'];
    $tahunmotor = $_POST['tahunmotor'];

    // buat query
    $sql = "INSERT INTO $namatbl (id_motor, merek_motor, plat_no_motor, tahun_motor) VALUE ('$id', '$merekmotor', '$platnomotor', '$tahunmotor')";
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