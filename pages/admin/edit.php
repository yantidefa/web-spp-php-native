<?php 
$ID     =$_GET['id'];
$EDIT   ="SELECT * FROM admin WHERE admin.idadmin='$ID' " or die("Gagal melakukan query !!!".mysqli_error());
$HASILEDIT  =   mysqli_query($koneksi, $EDIT);
while ($ROW =   mysqli_fetch_array($HASILEDIT)) {
$SATU        =   $ROW['idadmin'];
$DUA       =   $ROW['username'];
$TIGA     =   $ROW['password'];
$EMPAT       =   $ROW['namalengkap'];

}
 ?>

<div id="content-header">
    <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a><a href="pegawai.php" title="Go to Data Admin" class="tip-bottom"><i class="icon-home"></i> Data Admin</a> <a href="#" class="current">Tambah Data Admin</a> </div>
    <h1>Tambah Data Admin</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <?php 
      if (@$_POST['edit']) {
        include"prosesedit.php";
        }
    ?>
    <div class="row-fluid">
    <div class="span11">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Form Tambah Data</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="../pages/admin/prosesedit.php" method="post" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">Id Admin :</label>
              <div class="controls">
                <input type="text" class="span11" id="idadmin" name="idadmin"  value="<?php echo $SATU; ?>" required readonly>  
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Nama Lengkap :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Full Name" id="namalengkap" name="namalengkap" value="<?php echo $EMPAT; ?>">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Username :</label>
              <div class="controls">
                <input type="text"  class="span11" placeholder="Username" id="username" name="username" value="<?php echo $DUA; ?>">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Password :</label>
              <div class="controls">
                <input type="Password" class="span11" placeholder="Password" id="password" name="password" value="<?php echo $TIGA; ?>">
              </div>
            </div>
            <div class="controls"> 
            <button class="btn-md btn btn-primary" data-toogle="tooltip" data-placement="bottom" title="edit"><i class="icon icon-pencil" value></i> Edit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!--End-breadcrumbs-->  
  </div>