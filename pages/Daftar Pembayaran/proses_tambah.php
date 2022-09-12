<?php
ob_start();
include '../../inc/koneksi.php';
$SATU         = $_POST['no_bukti'];
$DUA          = $_POST['nis']	;
$TIGA         = $_POST['tgl_bayar'];  
$EMPAT        = $_POST['bulan'];
$LIMA         = $_POST['jumlah']; 
$ENAM        = $_POST['metode'];
$TUJUH      = $_POST['ket'];
$DELAPAN     = $_POST['id_petugas'];

if ($SATU		== "" ||
	$DUA 		== "" ||
    $TIGA		== "" ||
    $EMPAT 		== "" ||
    $LIMA		== "" ||
	$ENAM 		== "" ||
    $TUJUH 		== "" ||
    $DELAPAN 		== ""  ) {



?>

<div class='alert alert-danger' role='alert'>
    	<strong>error!</strong>A<a href="#" class="alert-link">Pastikan </a>Semua data terisi.
    	<button type="button" class="close" data-dismiss="alert" arial-label="close">
    		<span aria-hidden="true">&times;</span>
    	</button>
    </div>
<?php

	}
	else
	{
        $query = mysqli_query($koneksi, "INSERT INTO spp SET 
		no_bukti 			= '$SATU',
		nis 		= '$DUA',
		tgl_bayar 			= '$TIGA',
		bulan 		= '$EMPAT',
		jumlah 			= '$LIMA',
		metode 		= '$ENAM',
		ket 		= '$TUJUH',
		id_petugas 		= '$DELAPAN';")


	or die("Gagal edit data".mysqli_error($koneksi));

?>

	<div class='alert alert-success' role='alert'>
    	<strong>Edit informasi sukses</strong>
    	<h5>Dalam Waktu 3 Detik halaman akan di alihkan.</h5>
    	<button type="button" class="close" data-dismiss="alert" arial-label="close">
    		<span aria-hidden="true">&times;</span>
    	</button>
    </div>

<?php
header('location:../../Petugas/index.php?page=Detail');

}
