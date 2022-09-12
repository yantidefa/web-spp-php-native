<?php
include "../inc/koneksi.php";
ob_start();


mysqli_query($connect, "DELETE FROM siswa WHERE idsiswa ='$_GET[idsiswa]' ")
	or die(mysqli_error($connect));

header("location:../siswa/siswa.php?page=siswa");

?>
