<?php 
ob_start();
include ("../../inc/koneksi.php");

$SATU 	= $_POST['nis'];
$DUA 	= $_POST['nama_siswa'];
$TIGA 	= $_POST['kelas'];
$EMPAT	= $_POST['tahun'];
$LIMA	= $_POST['biaya'];

if ($SATU	== "" ||
	$DUA 	== "" ||
	$TIGA 	== "" ||
    $EMPAT	== "" ||
    $LIMA	== ""  ) 
{
	echo "Harap Isi Data Dengan Lengkap";
}
else {
	$QUERY = mysqli_query($koneksi, "INSERT INTO `siswa` VALUES ('$SATU', '$DUA', '$TIGA', '$EMPAT','$LIMA');")
	or die(mysqlI_error($koneksi));

header('location:../../Admin/index.php?page=siswa');
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
