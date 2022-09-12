<?php 
include "../../inc/koneksi.php";

$SATU 	= $_POST['nis'];
$DUA 	= $_POST['nama_siswa'];
$TIGA 	= $_POST['kelas'];
$LIMA	= $_POST['biaya'];
// $TUJUH	= $_POST['kelas'];


if ($SATU	== "" ||
    $DUA 	== "" ||
    $TIGA 	== "" ||
	$LIMA	== ""  )  
    
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
	$UPDATE1 = mysqli_query($koneksi, "UPDATE siswa SET 
		nama_siswa 				= '$DUA',
		kelas					= '$TIGA',
        biaya 				= '$LIMA' WHERE siswa.nis='$SATU';")

	or die("Gagal edit data".mysqli_error($koneksi));
//nip tidak di update karena field primary key di tb_pegawai

// $UPDATE2 = mysqli_query($koneksi, "UPDATE walikelas  SET		
//         kelas 				= '$TUJUH';")
// 	or die("Gagal edit data".mysqli_error($koneksi));

// header('location:../../Admin/index.php?page=siswa');

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

