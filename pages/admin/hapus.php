<?php 
ob_start();
include "../../inc/koneksi.php";


mysqli_query($koneksi, "DELETE FROM admin WHERE idadmin = '$_GET[idadmin]' ")
or die(mysqli_error($koneksi));


header('location:../../Admin/index.php?page=admin');
 ?>
 
<!-- <meta http-equiv="refresh" content="2; url=Daftar.php?page=Petugas"> -->