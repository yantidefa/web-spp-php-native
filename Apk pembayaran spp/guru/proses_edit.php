<?php
include ("../inc/koneksi.php");
	$satu   =	mysqli_real_escape_string($connect, $_POST['idguru']);	
	$dua  	=	mysqli_real_escape_string($connect, $_POST['namaguru']);

if ($satu=="" || $dua=="" ){

}

else {
$query = mysqli_query ($connect,"UPDATE guru SET 
	idguru = '$satu' ,     	
	namaguru = '$dua' WHERE guru.idguru='$satu';")
 or die(mysqli_error($connect));
 header('location:../guru/guru.php?page=guru');

?>		

<div class="alert alert-block alert-success">
	<button type="button" class="close" data-dismiss="alert">
		<i class="icon-remove"></i>
	</button>

	<i class="icon-ok green"></i>
	<h4>Data Berhasil di Tambahkan</h4>

</div>
<?php 
}
 ?>

