<?php
include ("../inc/koneksi.php");
	$satu   =	mysqli_real_escape_string($connect, $_POST['idadmin']);	
	$dua  	=	mysqli_real_escape_string($connect, $_POST['namalengkap']);
	$tiga   =	mysqli_real_escape_string($connect, $_POST['username']);
	$empat  =	mysqli_real_escape_string($connect, $_POST['password']);

if ($satu=="" || $dua=="" || $tiga=="" || $empat=="" ){

}

else {
$query = mysqli_query ($connect,"UPDATE admin SET 
	idadmin = '$satu' ,     	
	namalengkap = '$dua' ,  		
	username = '$tiga' , 
	password = '$empat' WHERE admin.idadmin='$satu';")
 or die(mysqli_error($connect));
 header('location:../admin/pegawai.php?page=admin');

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

