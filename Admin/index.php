<?php 
@session_start();
include "../inc/koneksi.php";
if (@$_SESSION['username']) 
{
  if (@!$_SESSION['typeuser'] =="Admin")  
    {
      header("location:Admin/index.php");
    }
  else{
    if (@$_SESSION['typeuser'] =="Petugas") 
      {
        header("location:Petugas/index.php");
    }

  }
}
else{
  header("location:../index.php");
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>SMK MVP ARS INTERNASIONAL</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="calender/jquery-ui.css" type="text/css"></link>
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="css/fullcalendar.css" />
<link rel="stylesheet" href="css/datepicker.css" />
<link rel="stylesheet" href="css/matrix-style.css" />
<link rel="stylesheet" href="css/matrix-media.css" />
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
    <li class=""><a title="" href="../logout.php"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
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
<?php
  @$PAGE = $_GET['page'];
?>
<div id="sidebar">
  <ul>
  <li class="active">
  <a href="index.php"><i class="icon icon-home"></i> <span>Dashboard</span></a>   
  </li>
    <li <?php if ($PAGE == "admin") { ?> class = "active" <?php }  ?>> 
        <a href="?page=admin"><i class="icon icon-table"></i> <span>Admin</span></a> 
    </li>
    <li <?php if ($PAGE == "wk") { ?> class = "active" <?php }  ?>> 
        <a href="?page=wk"><i class="icon icon-book"></i> <span>Walikelas</span></a> 
    </li>
    <li <?php if ($PAGE == "guru") { ?> class = "active" <?php }  ?>> 
        <a href="?page=guru"><i class="icon icon-book"></i> <span>Guru</span></a> 
    </li>
    <li <?php if ($PAGE == "siswa") { ?> class = "active" <?php }  ?>> 
        <a href="?page=siswa"><i class="icon icon-book"></i> <span>Siswa</span></a> 
    </li>

  <!-- <li class="active"> <a href="#"><i class="icon icon-list"></i> <span>Transaksi</span> <span class="label label-important">2</span></a>
    </li>
    <li <?php if ($PAGE=="Petugas") { ?><?php  } ?> > <a href="?page=Petugas">Form Pembayaran</a></li>
        <li <?php if ($PAGE=="Daftar") { ?><?php  } ?> > <a href="?page=Daftar">Daftar Pembayaran SPP</a></li> -->
  </ul>
</div>
<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <!-- <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
  </div> -->
<!--End-breadcrumbs-->


<!--content-->
<div id="content-header">
<!--Action boxes-->

<!--End-Action boxes-->    
  </div>
  <?php include"../inc/menu.php"; ?>
</div>
<!--content-->

</div>
<!--Footer-part-->

<div class="row-fluid">
  <div id="footer" class="span12"> 2013 &copy; Matrix Admin. Brought to you by <a href="http://themedesigner.in">Themedesigner.in</a> </div>
</div>

<!--end-Footer-part-->
<script src="js/bootstrap-datepicker.js"></script> 
<script src="js/excanvas.min.js"></script> 
<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.flot.min.js"></script> 
<script src="js/jquery.flot.resize.min.js"></script> 
<script src="js/jquery.peity.min.js"></script> 
<script src="js/fullcalendar.min.js"></script> 
<script src="js/matrix.js"></script> 
<script src="js/matrix.dashboard.js"></script> 
<script src="js/jquery.gritter.min.js"></script> 
<script src="js/matrix.interface.js"></script> 
<script src="js/matrix.chat.js"></script> 
<script src="js/jquery.validate.js"></script> 
<script src="js/matrix.form_validation.js"></script> 
<script src="js/jquery.wizard.js"></script> 
<script src="js/jquery.uniform.js"></script> 
<script src="js/select2.min.js"></script> 
<script src="js/matrix.popover.js"></script> 
<script src="js/jquery.dataTables.min.js"></script> 
<script src="js/matrix.tables.js"></script> 

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
<script type="text/javascript" src="calender/jquery-1.9.1.js"></script>
  <script type="text/javascript" src="calender/jquery-ui.js"></script>
  <script type="text/javascript">
    $(function() {
      $("#date").datepicker({
        dateFormat:"yy/mm/dd",
        changeMoth:true,
        changeYear:true
      });
    });
  </script>
  <script type="text/javascript">
    $(function() {
      $("#date2").datepicker({
        dateFormat:"yy/mm/dd",
        changeMoth:true,
        changeYear:true
      });
    });
  </script>
</body>
</html>
