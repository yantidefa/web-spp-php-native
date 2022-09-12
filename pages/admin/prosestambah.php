<?php 
ob_start();
include ("../../inc/koneksi.php");

$SATU 	= $_POST['idadmin'];
$DUA 	= $_POST['username'];
$TIGA 	= $_POST['password'];
$EMPAT	= $_POST['namalengkap'];

if ($SATU	== "" ||
	$DUA 	== "" ||
	$TIGA 	== "" ||
	$EMPAT	== ""  ) 
{
	echo "Harap Isi Data Dengan Lengkap";
}
else {
	$QUERY = mysqli_query($koneksi, "INSERT INTO `admin` VALUES ('$SATU', '$DUA', '$TIGA', '$EMPAT');")
	or die(mysqlI_error($koneksi));

header('location:../../Admin/index.php?page=admin');
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
