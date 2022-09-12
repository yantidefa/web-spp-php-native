<?php 
ob_start();
include "../../inc/koneksi.php";


mysqli_query($koneksi, "DELETE FROM siswa WHERE nis = '$_GET[nis]' ")
or die(mysqli_error($koneksi));


header('location:../../Admin/index.php?page=siswa');
 ?>
 
<!-- <meta http-equiv="refresh" content="2; url=Daftar.php?page=Petugas"> -->