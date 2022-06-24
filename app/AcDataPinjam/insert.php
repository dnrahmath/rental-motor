<?php

include("../../koneksi.php");

$namatbl = "tbl_pinjam";

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['TAMBAH'])){

    $idmotorget = $_POST['idmotor'];

    //get data dari tbl_motor
    $sqlget = "SELECT * FROM tbl_motor WHERE id_motor='$idmotorget'";
    $getdata = mysqli_query($conn, $sqlget);
    $dataAss = mysqli_fetch_assoc($getdata);

    // ambil data dari formulir
    $id = '0';
    $idmotor = $_POST['idmotor'];
    $merekmotor = $dataAss['merek_motor'];
    $platnomotor = $dataAss['plat_no_motor'];
    $statusmotor = "DIPINJAM";
    $tglpeminjam = date("l jS \of F Y h:i:s A");
    $tglpengembalian = "0";
    $iduserpeminjam = $_POST['iduserpeminjam'];

    // buat query
    $sql = "INSERT INTO $namatbl (id_pinjam, id_motor, merek_motor, plat_no_motor, status_motor, tgl_peminjaman, tgl_pengembalian, id_user_peminjam) 
            VALUE ('$id', '$idmotor', '$merekmotor', '$platnomotor', '$statusmotor', '$tglpeminjam', '$tglpengembalian', '$iduserpeminjam')";
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