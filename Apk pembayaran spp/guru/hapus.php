<?php
include "../inc/koneksi.php";
ob_start();


mysqli_query($connect, "DELETE FROM guru WHERE idguru ='$_GET[idguru]' ")
	or die(mysqli_error($connect));

header("location:../guru/guru.php?page=guru");

?>
