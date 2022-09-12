<?php 
ob_start();
include ("../../inc/koneksi.php");

$SATU 	= $_POST['kelas'];
$DUA 	= $_POST['idguru'];

if ($SATU	== "" ||
	$DUA 	== ""  ) 
{
	echo "Harap Isi Data Dengan Lengkap";
}
else {
	$QUERY = mysqli_query($koneksi, "INSERT INTO `walikelas` VALUES ('$SATU', '$DUA');")
	or die(mysqlI_error($koneksi));

header('location:../../Admin/index.php?page=wk');
?>

<div class="alert alert-block alert-success">
	<button type="button" class="close" data-dismiss="alert">
		<i class="icon-remove"></i>
	</button>

	<i class="icon-ok green"></i>
	<h4>Data berhasil ditambahkan !</h4>
</div>

<?php 
}
 ?>
