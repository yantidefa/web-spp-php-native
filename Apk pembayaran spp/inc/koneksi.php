<?php 
$server="localhost";
$user="root";
$password="";
$database="db_sppsekolah";

 $connect = mysqli_connect($server, $user, $password, $database);

 if(mysqli_connect_error()){
  echo "Koneksi database gagal!" . mysqli_connect_error();

}
?>