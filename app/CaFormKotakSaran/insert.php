<?php

include("../../koneksi.php");

$namatbl = "tbl_kotaksaran";

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['TAMBAH'])){

    // ambil data dari formulir
    $id = '0';
    $nama = $_POST['nama'];
    $saran = $_POST['saran'];
    $tanggal = date("l jS \of F Y h:i:s A");

    // buat query
    $sql = "INSERT INTO $namatbl (id, nama, saran, tanggal) VALUE ('$id', '$nama', '$saran', '$tanggal')";
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