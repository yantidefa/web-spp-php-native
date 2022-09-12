<?php
function autonumber($tabel, $kolom, $lebar=0, $awalan){
  include '../inc/koneksi.php';

  //proses auto number
  $auto = mysqli_query($koneksi, "select $kolom from $tabel order by $kolom desc limit 1") or die(mysqli_error());
  $jumlah_record = mysqli_num_rows($auto);
  if($jumlah_record == 0)
    $nomor = 1;

  else {
    $row = mysqli_fetch_array($auto);
    $nomor = intval(substr($row[0], strlen($awalan)))+1;
  }
  if ($lebar>0) 
  $angka = $awalan.str_pad ($nomor, $lebar, "0", STR_PAD_LEFT);
    else
    $angka=$awalan.$nomor;
    return $angka;
  }
//echo autonumber("tb_pegawai","nip",7,"PGW");
?>

<div id="content-header">
    <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a><a href="pegawai.php" title="Go to Data Admin" class="tip-bottom"><i class="icon-home"></i> Data Admin</a> <a href="#" class="current">Tambah Data Admin</a> </div>
    <h1>Tambah Data Admin</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <?php 
    if (@$_POST['tambah']) 
    ?>
    <div class="row-fluid">
    <div class="span11">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Form Tambah Data</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="../pages/admin/prosestambah.php" method="post" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">Id Admin :</label>
              <div class="controls">
                <input type="text" class="span11" id="idadmin" name="idadmin"  value="<?php echo autonumber('admin','idadmin',7,'ADM'); ?>" required readonly>  
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Nama Lengkap :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Full Name" id="namalengkap" name="namalengkap">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Username :</label>
              <div class="controls">
                <input type="text"  class="span11" placeholder="Username" id="username" name="username">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Password :</label>
              <div class="controls">
                <input type="Password" class="span11" placeholder="Password" id="password" name="password">
              </div>
            </div>
            
            <div class="controls"> 
            <button class="btn-md btn btn-primary" data-toogle="tooltip" data-placement="bottom" title="tambah"><i class="icon icon-plus" value></i> Tambahkan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!--End-breadcrumbs-->  
  </div>