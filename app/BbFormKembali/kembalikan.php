<?php

include("../../koneksi.php");


parse_str($_SERVER['QUERY_STRING'],$arrQuery);

$param3=$arrQuery['idpinjam'];
$param1=$arrQuery['id'];
$param2=$arrQuery['idusr'];


$namatbl = "tbl_pinjam";

// cek apakah tombol PERBARUI sudah diklik atau blum?
if(isset($param1)){

    $idmotorget = $param1;

    //get data dari tbl_motor
    $sqlget = "SELECT * FROM tbl_motor WHERE id_motor='$idmotorget'";
    $getdata = mysqli_query($conn, $sqlget);
    $dataAss = mysqli_fetch_assoc($getdata);

    // ambil data dari formulir
    $id = $param3;
    $idmotor = $param1;
    $merekmotor = $dataAss['merek_motor'];
    $platnomotor = $dataAss['plat_no_motor'];
    $statusmotor = "DIKEMBALIKAN";
    //$tglpeminjam = date("l jS \of F Y h:i:s A");
    $tglpengembalian = date("l jS \of F Y h:i:s A");
    $iduserpeminjam = $param2;

    // buat query update
    $sql = "UPDATE $namatbl SET id_motor='$idmotor', 
                                merek_motor='$merekmotor', 
                                plat_no_motor='$platnomotor', 
                                status_motor='$statusmotor',  
                                tgl_pengembalian='$tglpengembalian', 
                                id_user_peminjam='$iduserpeminjam' WHERE id_pinjam=$id";
    $query = mysqli_query($conn, $sql);

    // apakah query update berhasil?
    if( $query ) {
        header('Location: ../CaFormKotakSaran/index.php');
    } else {
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>