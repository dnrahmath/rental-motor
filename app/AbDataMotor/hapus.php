<?php

include("../../koneksi.php");

$namatbl = "tbl_motor";

if( isset($_GET['id']) ){

    // ambil id dari query string
    $id = $_GET['id'];

    // buat query hapus
    $sql = "DELETE FROM $namatbl WHERE id_motor=$id";
    $query = mysqli_query($conn, $sql);

    // apakah query hapus berhasil?
    if( $query ){
        header('Location: ./index.php?status=sukses');
    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>