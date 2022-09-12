<?php 
ob_start();
include "../../inc/koneksi.php";


mysqli_query($koneksi, "DELETE FROM spp WHERE no_bukti = '$_GET[no_bukti]' ")
or die(mysqli_error($koneksi));


header('location:../../Petugas/index.php?page=Daftar');
 ?>
 
<!-- <meta http-equiv="refresh" content="2; url=Daftar.php?page=Petugas"> -->