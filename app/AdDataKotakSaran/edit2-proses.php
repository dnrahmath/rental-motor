<?php

include("../../koneksi.php");

$namatbl = "tbl_kotaksaran";

// cek apakah tombol PERBARUI sudah diklik atau blum?
if(isset($_POST['PERBARUI'])){

    // ambil data dari formulir
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $saran = $_POST['saran'];
    $tanggal = date("l jS \of F Y h:i:s A");

    // buat query update
    $sql = "UPDATE $namatbl SET nama='$nama', saran='$saran', tanggal='$tanggal' WHERE id=$id";
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