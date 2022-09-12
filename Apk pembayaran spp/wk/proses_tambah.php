<?php
include ("../inc/koneksi.php");
	$satu   =	$_POST['idguru'];	
	$dua  	=	$_POST['namaguru'];	
	$tiga  	=	$_POST['kelas'];

if ($satu=="" || $dua=="" || $tiga=="" ){

}

else {
$query = mysqli_query ($connect,"INSERT INTO walikelas SET 
	idguru = '$satu' ,     	
	namaguru = '$dua' ,     	
	kelas = '$tiga' , ;")
 or die(mysqli_error($connect));
 header('location:../wk/walikelas.php?page=walikelas');

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
