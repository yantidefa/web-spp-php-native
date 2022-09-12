<?php
$id=$_GET['id'];
$edit= "SELECT * FROM walikelas INNER JOIN guru ON walikelas.idguru=guru.idguru WHERE walikelas.kelas='$id'" or die("Gagal melakukan query".mysql_error());
$hasiledit = mysqli_query($koneksi,$edit);
while ($row = mysqli_fetch_array($hasiledit)) {
    $SATU  = $row['idguru'];  
    $DUA     = $row['namaguru'];
    $aa     = $row['kelas'];
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
          <form action="../pages/guru/prosesedit.php" method="post" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">Id Guru :</label>
              <div class="controls">
                <input type="text" class="span11" id="idguru" name="idguru"  value="<?php echo $SATU; ?>" required readonly>  
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Nama Lengkap :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Full Name" id="namaguru" name="namaguru" value="<?php echo $DUA; ?>">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Kelas :</label>
              <div class="controls">
              <select name="kelas" class="span4">
                  <option>---------------- Pilih ------------------</option>
                  <option>X-RPL</option>
                  <option>X-TKJ</option>
                  <option>X-TBSM</option>
                  <option>X-FARMASI</option>
                  <option>X-AP</option>
                  <option>X-OTKP</option>
                  <option>X-AK</option>
                  <option>X-JB</option>
                  <option>---------------- XI ------------------</option>
                  <option>XI-RPL</option>
                  <option>XI-TKJ</option>
                  <option>XI-TBSM</option>
                  <option>XI-FARMASI</option>
                  <option>XI-AP</option>
                  <option>XI-OTKP</option>
                  <option>XI-AK</option>
                  <option>XI-JB</option>
                  <option>---------------- XII ------------------</option>
                  <option>XII-RPL</option>
                  <option>XII-TKJ</option>
                  <option>XII-TBSM</option>
                  <option>XII-FARMASI</option>
                  <option>XII-AP</option>
                  <option>XII-OTKP</option>
                  <option>XII-AK</option>
                  <option>XII-JB</option>
                </select>
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