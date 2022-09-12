<?php 
include "koneksi.php";
$query_info = mysqli_query($connect, "SELECT * FROM kwitansi");
$data_info = mysqli_fetch_array($query_info);
 ?>