<?php 
ob_start();
include "../../inc/koneksi.php";


mysqli_query($koneksi, "DELETE FROM guru WHERE idguru = '$_GET[idguru]' ")
or die(mysqli_error($koneksi));


header('location:../../Admin/index.php?page=guru');
 ?>
 
<!-- <meta http-equiv="refresh" content="2; url=Daftar.php?page=Petugas"> -->