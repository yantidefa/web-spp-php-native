<?php
include ("../inc/koneksi.php");
	$satu   =	mysqli_real_escape_string($connect, $_POST['idsiswa']);	
	$dua  	=	mysqli_real_escape_string($connect, $_POST['nis']);
	$tiga   =	mysqli_real_escape_string($connect, $_POST['namasiswa']);	
	$empat  	=	mysqli_real_escape_string($connect, $_POST['kelas']);
	$lima   =	mysqli_real_escape_string($connect, $_POST['tahunajaran']);	
	$enam  	=	mysqli_real_escape_string($connect, $_POST['biaya']);

if ($satu=="" || $dua=="" || $tiga=="" || $empat=="" || $lima=="" || $enam=="" ){

}

else {
$query = mysqli_query ($connect,"UPDATE siswa SET 
	idsiswa = '$satu' ,     	
	nis = '$dua' ,
	namasiswa = '$tiga' , 
	kelas = '$empat' , 
	tahunajaran = '$lima' , 
	biaya = '$enam'  WHERE siswa.idsiswa='$satu';")
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

