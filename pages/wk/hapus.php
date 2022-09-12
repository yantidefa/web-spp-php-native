<?php 
ob_start();
include "../../inc/koneksi.php";


mysqli_query($koneksi, "DELETE FROM walikelas WHERE kelas = '$_GET[kelas]' ")
or die(mysqli_error($koneksi));


header('location:../../Admin/index.php?page=wk');
 ?>
 
<!-- <meta http-equiv="refresh" content="2; url=Daftar.php?page=Petugas"> -->