<?php
ob_start();
include '../../inc/koneksi.php';
$SATU         = $_POST['no_bukti'];
$DUA          = $_POST['nis']	; 
$EMPAT        = $_POST['id_petugas'];
$ENAM         = $_POST['nama_pem']; 
$TUJUH        = $_POST['tgl_bayar'];
$DELAPAN      = $_POST['metode'];
$SEMBILAN     = $_POST['jumlah'];
$SEPULUH      = $_POST['ket'];

if ($SATU		== "" ||
	$DUA 		== "" ||
    $EMPAT		== "" ||
    $ENAM 		== "" ||
    $TUJUH		== "" ||
	$DELAPAN 		== "" ||
    $SEMBILAN 		== "" ||
    $SEPULUH 		== ""  ) {



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
        $query = mysqli_query($koneksi, "INSERT INTO detail_pembayaran SET 
		no_bukti 			= '$SATU',
		nis 		= '$DUA',
		id_petugas 			= '$EMPAT',
		nama_pem 		= '$ENAM',
		tgl_bayar 			= '$TUJUH',
		metode 		= '$DELAPAN',
		jumlah 		= '$SEMBILAN',
		ket 		= '$SEPULUH';")


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
