<?php
include ("../inc/koneksi.php");
	$satu   =	$_POST['idadmin'];	
	$dua  	=	$_POST['namalengkap'];
	$tiga   =	$_POST['username'];
	$empat  =	$_POST['password'];

if ($satu=="" || $dua=="" || $tiga=="" || $empat=="" ){

}

else {
$query = mysqli_query ($connect,"INSERT INTO admin SET 
	idadmin = '$satu' ,     	
	namalengkap = '$dua' ,  		
	username = '$tiga' , 
	password = '$empat' ;")
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
