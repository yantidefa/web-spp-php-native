<!DOCTYPE html>
<html lang="en">
<head>
<title>Edit Data Siswa</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="../css/bootstrap.min.css" />
<link rel="stylesheet" href="../css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="../css/fullcalendar.css" />
<link rel="stylesheet" href="../css/matrix-style.css" />
<link rel="stylesheet" href="../css/matrix-media.css" />
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
<link rel="stylesheet" href="css/jquery.gritter.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<?php
include '../inc/koneksi.php';
$id=$_GET['idsiswa'];
?>

<?php
$edit= "SELECT * FROM siswa WHERE siswa.idsiswa='$id'" or die("Gagal melakukan query".mysql_error());
$hasiledit = mysqli_query($connect,$edit);
while ($row = mysqli_fetch_array($hasiledit)) {
  $idsiswa     = $row['idsiswa'];
  $nis     = $row['nis'];
  $namasiswa     = $row['namasiswa'];
  $kelas     = $row['kelas'];
  $tahunajaran     = $row['tahunajaran'];
  $biaya     = $row['biaya'];
}
?>

<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.php">SPP</a></h1>
</div>
<!--close-Header-part--> 


<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">User</span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="profile.php"><i class="icon-user"></i>Profile</a></li>
        <li class="divider"></li>
        <li><a href="login.php"><i class="icon-key"></i> Log Out</a></li>
      </ul>
    </li>
    <li class=""><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li>
    <li class=""><a title="" href="login.html"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
  </ul>
</div>
<!--close-top-Header-menu-->
<!--start-top-serch-->
<div id="search">
  <input type="text" placeholder="Search here..."/>
  <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
</div>
<!--close-top-serch-->
<!--sidebar-menu-->
<div id="sidebar"><a href="../index.php" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
  <ul>
    <li class="active"><a href="index.html"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <li> <a href="../admin/pegawai.php"><i class="icon icon-inbox"></i> <span>Admin</span></a> </li>
    <li> <a href="../wk/walikelas.php"><i class="icon icon-inbox"></i> <span>Wali Kelas</span></a> </li>
    <li> <a href="../guru/guru.php"><i class="icon icon-inbox"></i> <span>Guru</span></a> </li>
    <li> <a href="siswa.php"><i class="icon icon-inbox"></i> <span>Siswa</span></a> </li>
    <li class="submenu active"> <a href="#"><i class="icon icon-list"></i> <span>Transaksi</span> <span class="label label-important">2</span></a>
      <ul>
        <li><a href="../spp/spp.php">Form Pembayaran</a></li>
        <li><a href="../spp/tabel_spp.php">Tabel Pembayaran SPP</a></li>
      </ul>
    </li>
  </ul>
</div>
<?php 
if (@$_POST['edit'])
?>
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="../index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Edit Data Siswa</a> </div>
    <h1>Edit Data Siswa</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
    <div class="span6">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Form Edit Data</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="../siswa/proses_edit.php" method="post" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">ID Siswa :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Masukkan ID " name="idsiswa" id="idsiswa" value="<?php echo $idsiswa ?>">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">NIS :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Masukkan NIS" name="nis" id="nis" value="<?php echo $nis ?>">
              </div>
            </div>
             <div class="control-group">
              <label class="control-label">Nama Siswa :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Masukkan Nama " name="namasiswa" id="namasiswa" value="<?php echo $namasiswa ?>">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Kelas :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Masukkan Kelas" name="kelas" id="kelas" value="<?php echo $kelas ?>" >
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Tahun Ajaran :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Masukkan Tahun Ajaran" name="tahunajaran" id="tahunajaran" value="<?php echo $tahunajaran ?>">
              </div>
            </div>
             <div class="control-group">
              <label class="control-label">Biaya :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Maukkan Biaya " name="biaya" id="biaya" value="<?php echo $biaya ?>">
              </div>
            </div>
            <div class="form-actions">
              <button type="submit" class="btn btn-success"><a href="siswa.php?page=siswa"></a>Edit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!--End-breadcrumbs-->  
  </div>
</div>

<!--end-main-container-part-->

<!--Footer-part-->

<div class="row-fluid">
  <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a> </div>
</div>

<!--end-Footer-part-->

<script src="../js/excanvas.min.js"></script> 
<script src="../js/jquery.min.js"></script> 
<script src="../js/jquery.ui.custom.js"></script> 
<script src="../js/bootstrap.min.js"></script> 
<script src="../js/jquery.flot.min.js"></script> 
<script src="../js/jquery.flot.resize.min.js"></script> 
<script src="../js/jquery.peity.min.js"></script> 
<script src="../js/fullcalendar.min.js"></script> 
<script src="../js/matrix.js"></script> 
<script src="../js/matrix.dashboard.js"></script> 
<script src="../js/jquery.gritter.min.js"></script> 
<script src="../js/matrix.interface.js"></script> 
<script src="../js/matrix.chat.js"></script> 
<script src="../js/jquery.validate.js"></script> 
<script src="../js/matrix.form_validation.js"></script> 
<script src="../js/jquery.wizard.js"></script> 
<script src="../js/jquery.uniform.js"></script> 
<script src="../js/select2.min.js"></script> 
<script src="../js/matrix.popover.js"></script> 
<script src="../js/jquery.dataTables.min.js"></script> 
<script src="../js/matrix.tables.js"></script> 

<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>
</body>
</html>
