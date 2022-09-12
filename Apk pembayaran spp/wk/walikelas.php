<?php 
include "../inc/koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Data Wali Kelas</title>
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

<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.php">SPP</a></h1>
</div>
<!--close-Header-part--> 

<?php 
  @$page = $_GET['page'];
?>
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
    <li class="active"><a href="../index.php"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <li> <a href="../admin/pegawai.php"><i class="icon icon-inbox"></i> <span>Admin</span></a> </li>
    <li> <a href="walikelas.php"><i class="icon icon-inbox"></i> <span>Wali Kelas</span></a> </li>
    <li> <a href="../guru/guru.php"><i class="icon icon-inbox"></i> <span>Guru</span></a> </li>
    <li> <a href="../siswa/siswa.php"><i class="icon icon-inbox"></i> <span>Siswa</span></a> </li>
    <li class="submenu active"> <a href="#"><i class="icon icon-list"></i> <span>Transaksi</span> <span class="label label-important">2</span></a>
      <ul>
        <li><a href="spp.php">Form Pembayaran</a></li>
        <li><a href="tabel_spp.php">Tabel Pembayaran SPP</a></li>
      </ul>
    </li>
  </ul>
</div>
<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="../index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Data Wali Kelas</a> </div>
    <h1>Data Wali Kelas</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5>Tabel Data Wali Kelas</h5>
            <span class="label label-success"><a href="tambah.php">  Tambah Data</span></a> </div>
          <div class="widget-content ">
            <table class="table table-bordered table-striped with-check">
              <thead>
                <tr>
                  <th>No</th>
                  <th>ID Guru</th>
                  <th>Nama</th>
                  <th>Kelas</th>   
                  <th>Aksi</th>
                </tr>
              </thead>
              <?php 
                $tampil = "SELECT * FROM guru
                          INNER JOIN walikelas ON guru.kelas = walikelas.kelas
                          ORDER BY guru.idguru";
                $hasil = @mysqli_query($connect, $tampil);
                $no=1;
                while ($row = @mysqli_fetch_array($hasil)) {
                  $idguru = $row['idguru'];
                  $namaguru = $row['namaguru'];
                  $kelas = $row['kelas'];
                }
              ?>
              <tbody>
                <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $idguru; ?></td>
                  <td><?php echo $namaguru; ?></td>
                  <td><?php echo $kelas; ?></td>
                  <td><button class="btn btn-danger btn-mini"><a href="">Hapus</a></button>
                      <button class="btn btn-warning btn-mini"><a href="edit.php">Edit</a></button>
                  </td>
                </tr>
              </tbody>
              
            </table>
          </div>
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
