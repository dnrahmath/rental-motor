<?php

include("../../koneksi.php");


parse_str($_SERVER['QUERY_STRING'],$arrQuery);

$param1=$arrQuery['id'];
$param2=$arrQuery['idusr'];



$namatbl = "tbl_pinjam";

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($param1)){

    $idmotorget = $param1;

    //get data dari tbl_motor
    $sqlget = "SELECT * FROM tbl_motor WHERE id_motor='$idmotorget'";
    $getdata = mysqli_query($conn, $sqlget);
    $dataAss = mysqli_fetch_assoc($getdata);

    // ambil data dari formulir
    $id = '0';
    $idmotor = $param1;
    $merekmotor = $dataAss['merek_motor'];
    $platnomotor = $dataAss['plat_no_motor'];
    $statusmotor = "DIPINJAM";
    $tglpeminjam = date("l jS \of F Y h:i:s A");
    $tglpengembalian = "0";
    $iduserpeminjam = $param2;

    // buat query
    $sql = "INSERT INTO $namatbl (id_pinjam, id_motor, merek_motor, plat_no_motor, status_motor, tgl_peminjaman, tgl_pengembalian, id_user_peminjam) 
            VALUE ('$id', '$idmotor', '$merekmotor', '$platnomotor', '$statusmotor', '$tglpeminjam', '$tglpengembalian', '$iduserpeminjam')";
    $query = mysqli_query($conn, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman home.php dengan status=sukses
        header('Location: ../home.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: ../home.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>