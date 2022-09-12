<?php
include ("../inc/koneksi.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Data Siswa</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="../css/bootstrap.min.css" />
<link rel="stylesheet" href="../css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="../css/uniform.css" />
<link rel="stylesheet" href="../css/select2.css" />
<link rel="stylesheet" href="../css/matrix-style.css" />
<link rel="stylesheet" href="../css/matrix-media.css" />
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.html">Matrix Admin</a></h1>
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
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="../index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Data Siswa</a> </div>
    <h1>Data Siswa</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Siswa</h5>
            <span class="label label-success"><a href="tambah.php">  Tambah Data</span></a> </div>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Id Siswa</th>
                  <th>NIS</th>
                  <th>Nama</th>
                  <th>Kelas</th>
                  <th>Tahun Ajaran</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <?php 
                $tampil = "SELECT * FROM siswa";
                $hasil  = @mysqli_query($connect , $tampil);
                $no=1;
                while ($row = @mysqli_fetch_array($hasil)) {
                  $idsiswa  = $row['idsiswa'];  
                  $nis = $row['nis'];
                  $namasiswa  = $row['namasiswa'];  
                  $kelas = $row['kelas'];
                  $idsiswa  = $row['idsiswa'];  
                  $tahunajaran = $row['tahunajaran'];
              ?>
              <tbody>
                <tr class="gradeX">
                  <td><?php echo $no; ?></td>
                  <td><?php echo $idsiswa; ?></td>
                  <td><?php echo $nis; ?></td>
                  <td><?php echo $namasiswa; ?></td>
                  <td><?php echo $kelas; ?></td>
                  <td class="center"><?php echo $tahunajaran; ?></td>
                  <td><div class="btn-group">
                      <button class="btn btn-primary">Action</button>
                      <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle"><span class="caret"></span></button>
                      <ul class="dropdown-menu">
                        <li><a href="../siswa/detail.php?idsiswa=<?php echo $row['idsiswa'];?>">Detail</a></li>
                        <li><a href="../siswa/edit.php?idsiswa=<?php echo $row['idsiswa'];?>">Edit</a></li>
                        <li><a href=../siswa/hapus.php?idsiswa=<?php echo $row['idsiswa'];?>>Hapus</a></li>
                      </ul>
                    </div>
                  </td>
                </tr>
              </tbody>
              <?php 
                $no++;
                }
              ?>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Footer-part-->
<div class="row-fluid">
  <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a> </div>
</div>
<!--end-Footer-part-->
<script src="../js/jquery.min.js"></script> 
<script src="../js/jquery.ui.custom.js"></script> 
<script src="../js/bootstrap.min.js"></script> 
<script src="../js/jquery.uniform.js"></script> 
<script src="../js/select2.min.js"></script> 
<script src="../js/jquery.dataTables.min.js"></script> 
<script src="../js/matrix.js"></script> 
<script src="../js/matrix.tables.js"></script>
</body>
</html>
