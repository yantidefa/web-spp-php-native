<?php
include "../inc/koneksi.php";
ob_start();


mysqli_query($connect, "DELETE FROM admin WHERE idadmin ='$_GET[idadmin]' ")
	or die(mysqli_error($connect));

header("location:../admin/pegawai.php?page=admin");

?>
