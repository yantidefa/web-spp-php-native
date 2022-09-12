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
    <li class="active"><a href="index.html"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
    <li> <a href="../admin/pegawai.php"><i class="icon icon-inbox"></i> <span>Admin</span></a> </li>
    <li> <a href="../wk/walikelas.php"><i class="icon icon-inbox"></i> <span>Wali Kelas</span></a> </li>
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
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="../index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Transaksi Pembayaran SPP</a> </div>
    <h1>Transaksi Pembayaran SPP</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span6">
        <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Form Pembayaran</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="#" method="get" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">ID SPP</label>
              <div class="controls">
                <input type="text" placeholder="You can't type anything…">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">ID Siswa</label>
              <div class="controls">
                <input type="text" placeholder="You can't type anything…">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Tanggal Bayar</label>
              <div class="controls">
                <input type="date" placeholder="You can't type anything…">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Jatuh Tempo</label>
              <div class="controls">
                <input type="date">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Pilih Bulan</label>
              <div class="controls">
                <select multiple >
                  <option>Januari</option>
                  <option selected>Februari</option>
                  <option>Maret</option>
                  <option>April</option>
                  <option>Mei</option>
                  <option>Juni</option>
                  <option>Juli</option>
                  <option>Agustus</option>
                  <option>September</option>
                  <option>Oktober</option>
                  <option>November</option>
                  <option>Desember</option>
                </select>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">No Bayar</label>
              <div class="controls">
                <input type="text" placeholder="You can't type anything…">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Jumlah Bayar</label>
              <div class="controls">
                <input type="text" placeholder="You can't type anything…">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Keterangan</label>
              <div class="controls">
                <input type="text" placeholder="You can't type anything...">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">ID Admin</label>
              <div class="controls">
                <input type="text" placeholder="You can't type anything…">
              </div>
            </div>
            <div class="form-actions">
              <button type="submit" class="btn btn-success">Input</button>
            </div>
          </form>
        </div>
      </div>
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
