<?php 
@$PAGE = $_GET['page'];
switch ($PAGE) {
	//admin
	case 'admin':
		include "../admin/pegawai.php";
		break;
	case 'admin_tambah':
		include "../admin/tambah.php";
		break;
	case 'guru':
		include "../guru/guru.php";
		break;
	case 'guru_tambah':
		include "../guru/tambah.php";
		break;
	case 'siswa':
		include "../siswa/siswa.php";
		break;
	case 'pembayaran_spp':
		include "../spp/spp.php";
		break;
	case 'pembayaran_spp':
		include "../spp/kwitansi.php";
		break;
	case 'pembayaran_spp':
		include "../spp/tabel_spp.php";
		break;
	default:
		include "../dashboard.php";
		break;
}
 ?>