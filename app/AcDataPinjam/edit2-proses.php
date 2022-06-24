<?php

include("../../koneksi.php");

$namatbl = "tbl_pinjam";

// cek apakah tombol PERBARUI sudah diklik atau blum?
if(isset($_POST['PERBARUI'])){

    $idmotorget = $_POST['idmotor'];

    //get data dari tbl_motor
    $sqlget = "SELECT * FROM tbl_motor WHERE id_motor='$idmotorget'";
    $getdata = mysqli_query($conn, $sqlget);
    $dataAss = mysqli_fetch_assoc($getdata);

    // ambil data dari formulir
    $id = $_POST['id'];
    $idmotor = $_POST['idmotor'];
    $merekmotor = $dataAss['merek_motor'];
    $platnomotor = $dataAss['plat_no_motor'];
    $statusmotor = "DIPINJAM";
    $tglpeminjam = date("l jS \of F Y h:i:s A");
    $tglpengembalian = "0";
    $iduserpeminjam = $_POST['iduserpeminjam'];

    // buat query update
    $sql = "UPDATE $namatbl SET id_motor='$idmotor', 
                                merek_motor='$merekmotor', 
                                plat_no_motor='$platnomotor', 
                                status_motor='$statusmotor', 
                                tgl_peminjaman='$tglpeminjam', 
                                tgl_pengembalian='$tglpengembalian', 
                                id_user_peminjam='$iduserpeminjam' WHERE id_motor=$id";
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