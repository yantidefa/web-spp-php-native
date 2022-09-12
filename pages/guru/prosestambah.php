<?php 
ob_start();
include ("../../inc/koneksi.php");

$SATU 	= $_POST['idguru'];
$DUA 	= $_POST['namaguru'];

if ($SATU	== "" ||
	$DUA 	== ""  ) 
{
	echo "Harap Isi Data Dengan Lengkap";
}
else {
	$QUERY = mysqli_query($koneksi, "INSERT INTO `guru` VALUES ('$SATU', '$DUA');")
	or die(mysqlI_error($koneksi));

header('location:../../Admin/index.php?page=guru');
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
