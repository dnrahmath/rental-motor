<?php

include("../../koneksi.php");

$namatbl = "tbl_motor";

// cek apakah tombol PERBARUI sudah diklik atau blum?
if(isset($_POST['PERBARUI'])){

    // ambil data dari formulir
    $id = $_POST['id'];
    $merekmotor = $_POST['merekmotor'];
    $platnomotor = $_POST['platnomotor'];
    $tahunmotor = $_POST['tahunmotor'];

    // buat query update
    $sql = "UPDATE $namatbl SET id_motor='$id', merek_motor='$merekmotor', plat_no_motor='$platnomotor', tahun_motor='$tahunmotor' WHERE id_motor=$id";
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