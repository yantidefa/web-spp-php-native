<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 <section class="">
 	<header class="panel-heading">
 		
 	</header>
 	<?php 
 	@$page = $_GET['aksi'];
 	switch ($page) {
 		case 'tambah':
 			include "tambah.php";
			 break;
		case 'edit':
			include "edit.php";
			break;
		case 'hapus':
			include "hapus.php";
			break;
		case 'prosesedit':
			include "prosesedit.php";
			break;
 		default:
 			include "tampil.php";
 			break;
 	}
 	 ?>
 </section>

</body>
</html>