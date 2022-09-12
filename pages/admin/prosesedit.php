<?php 
include "../../inc/koneksi.php";

$SATU 	= $_POST['idadmin'];
$DUA 	= $_POST['username'];
$TIGA 	= $_POST['password'];
$EMPAT	= $_POST['namalengkap'];


if ($SATU	== "" ||
    $DUA 	== "" ||
    $TIGA 	== "" ||
    $EMPAT	== ""  )  
    
    {
?>

<div class="alert alert-block alert-danger">
	<button type="button" class="close" data-dismiss="alert">
		<i class="icon-remove"></i>
	</button>
	<i class="icon-warnig-sign red"></i>
	Pastikan Semua Form Terisis !!!
</div>

<?php
}
else {
	$UPDATE1 = mysqli_query($koneksi, "UPDATE admin SET 
		username 				= '$DUA',
		password					= '$TIGA',
        namalengkap 				= '$EMPAT' WHERE admin.idadmin='$SATU';")

	or die("Gagal edit data".mysqli_error($koneksi));
//nip tidak di update karena field primary key di tb_pegawai

header('location:../../Admin/index.php?page=admin');

?>

<div class="alert alert-block alert-success">
	<button type="button" class="close" data-dismiss="alert">
		<i class="icon-remove"></i>
	</button>
	<i class="icon-ok green"></i>
	<h4>Edit Data Berhasil !</h4>
</div>
<?php
 }
 ?>

