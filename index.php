<?php 
@session_start();
include "inc/koneksi.php";
if (@$_SESSION['username']) 
{
	if(@$_SESSION['typeuser'] =="Admin") {header("location:../admin/Admin/index.php");}
	elseif (@$_SESSION['typeuser'] =="Petugas") {header("location:../admin/Petugas/index.php");}
}
 ?>

<html>
  <title>SMK MVP ARS INTERNASIONAL</title>
  <link rel="stylesheet" href="login.css">
  <body>
    <section>
      <span></span>
      <h1>PEMBAYARAN UANG SEKOLAH</h1>
      <form method="POST" action="cek login.php">
        <input placeholder='UserName' type='text' name="username">
        <input placeholder='Password' type='password' name="password">
      
      <a href='#'></a>
      <button name='masuk'>LOGIN</button>
      <h2>
        <a href='create account.php'><u>|Create Account|</u></a> 
        <!-- <a>|</a>
        <a href='#'>Forgot Password?</a> -->
      </h2>
      </form>
    </section>
  </body>      
</html>