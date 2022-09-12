<?php
include ("../inc/koneksi.php");
	$satu   =	$_POST['idsiswa'];	
	$dua  	=	$_POST['nis'];
	$tiga   =	$_POST['namasiswa'];	
	$empat  =	$_POST['kelas'];
	$lima   =	$_POST['tahunajaran'];

if ($satu=="" || $dua=="" || $tiga=="" || $empat=="" || $lima==""){

}

else {
$query = mysqli_query ($connect,"INSERT INTO siswa SET 
	idsiswa = '$satu' ,     	
	nis = '$dua' ,
	namasiswa = '$tiga' ,
	kelas = '$empat' ,
	tahunajaran = '$lima' ;")
 or die(mysqli_error($connect));
 header('location:../siswa/siswa.php?page=siswa');

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
