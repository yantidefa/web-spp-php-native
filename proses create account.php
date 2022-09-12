<?php 
ob_start();
include ("inc/koneksi.php");
$SATU         = $_POST['nama'];
$DUA          = $_POST['username']; 
$TIGA         = $_POST['password'];
$EMPAT        = $_POST['typeuser'];

if ($SATU		== "" ||
	$DUA 		== "" ||
    $TIGA 		== "" ||
    $EMPAT 		== ""  )
{
	
}
else {
	$QUERY = mysqli_query($koneksi, "INSERT INTO `login` VALUES ('$SATU', '$DUA', '$TIGA','$EMPAT');")
	or die(mysqli_error($koneksi));
	

header('location:index.php');
?>

<?php 
}
 ?>
