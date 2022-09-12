<?php
include ("../inc/koneksi.php");
	$satu   =	$_POST['idguru'];	
	$dua  	=	$_POST['namaguru'];

if ($satu=="" || $dua==""){

}

else {
$query = mysqli_query ($connect,"INSERT INTO guru SET 
	idguru = '$satu' ,     	
	namaguru = '$dua';")
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
