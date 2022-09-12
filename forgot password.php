

<html>
  <title></title>
  <link rel="stylesheet" href="create account.css">
  <body>
  <?php 

include ("koneksi.php");
$ID     =$_GET['id'];
$TAMPIL = "SELECT * from `login` WHERE `login`.username='$ID'" or die("Gagal melakukan query!!!".mysqli_error());
$HASIL = mysqli_query($koneksi,$TAMPIL);

while ($row=mysqli_fetch_array($HASIL)) {
  $NO;
 $SATU  = $row['nama'];
 $DUA   = $row['username'];
 $TIGA  = $row['password'];
 $EMPAT = $row['typeuser']; 
                                                                              

}
?>     
    <section>
      <span></span>
      <h1>PEMBAYARAN UANG SEKOLAH</h1>
      <form method="POST" action="proses create account.php">
        <input placeholder='Your Name' type='text' name="nama" value="<?php echo $SATU; ?>">
        <input placeholder='UserName' type='text' name="username">value="<?php echo $SATU; ?>"
        <input placeholder='Password' type='password' name="password">
        <select name="typeuser" style=" width: 100%;  background: #e6f4fa; height: 50px; margin-bottom: 15px; border-radius: 5px; ">
            <option required>---------------------------- Type User --------------------------------</option>
            <option value="Admin">Admin</option>
            <option value="Petugas">Petugas</option>
        </select>
      <a href='#'></a>
      <button name='masuk'>CREATE</button>
      <a href='login.php'>Back</a>
      </form>
    </section>
  </body>      
</html>