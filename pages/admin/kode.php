<?php 
function autonumber($tabel, $kolom, $lebar=0, $awalan) {
include 'koneksi.php';

//proses auto number

$auto = mysqli_query($CONNECT, "SELECT $kolom FROM $tabel order by $kolom desc limit 1")
	or die(mysqli_error());
$jumlah_record = mysqli_num_rows($auto);
if ($jumlah_record == 0){
	$nomor = 1;
}
else {
	$row 	= mysqli_fetch_array($auto);
	$nomor 	= intval(substr($row[0],strlen($awalan)))+1;
}
if ($lebar>0) 

	$angka = $awalan.str_pad($nomor, $lebar, "0", STR_PAD_LEFT);
else
	$angka = $awalan.$nomor;
return $angka;
}

//echo autonumber("tb_pegawai", "nip", 7, "PGW");
 ?>
