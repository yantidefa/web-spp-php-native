<?php 
@$page	=	$_GET['page'];
switch ($page) {
	//admin
	case 'Daftar':
		include "../pages/Daftar Pembayaran/Daftar.php";
		break;
	case 'Petugas':
		include "../pages/Petugas/Petugas.php";
		break;
	case 'Detail':
		include "../pages/Detail/Detail.php";
		break;
	case 'admin':
		include "../pages/admin/admin.php";
		break;
	case 'guru':
		include "../pages/guru/guru.php";
		break;
	case 'wk':
		include "../pages/wk/wk.php";
		break;
	case 'siswa':
		include "../pages/siswa/siswa.php";
		break;
	

	default:
		include "../pages/dashboard.php";
		break;
}
 ?>