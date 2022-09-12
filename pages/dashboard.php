<!DOCTYPE html>
<html lang="en">
<head>
<title>Pembayaran SPP</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="css/fullcalendar.css" />
<link rel="stylesheet" href="css/matrix-style.css" />
<link rel="stylesheet" href="css/matrix-media.css" />
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
<link rel="stylesheet" href="css/jquery.gritter.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!--main-container-part-->
<div id="">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
  </div>
<!--End-breadcrumbs-->

<?php

include'../inc/koneksi.php';

$QUERY = mysqli_query($koneksi, "SELECT * FROM login WHERE username='".$_SESSION['username']."'");
while ($DATA=mysqli_fetch_array($QUERY))
$NIP = $DATA['username']; 
{
		if ($_SESSION['username']) 
		{
			if ($_SESSION['typeuser']== "Admin") 
			{
				echo "
        <div class='container-fluid'>
        <div class='quick-actions_homepage'>
          <ul class='quick-actions'>
            <li class='bg_lb'> <a href='index.php'> <i class='icon-dashboard'></i> My Dashboard </a> </li>
            <li class='bg_lg span3'> <a href='?page=admin'> <i class='icon-signal'></i> Admin</a> </li>
            <li class='bg_ly'> <a href='?page=siswa'> <i class='icon-inbox'></i> Siswa </a> </li>
            <li class='bg_lo'> <a href='?page=wk'> <i class='icon-th'></i> Walikelas</a> </li>
            <li class='bg_ls'> <a href='?page=guru'> <i class='icon-fullscreen'></i> Guru</a> </li>
    
          </ul>
        </div>
      </div>
            ";
			}else if ($_SESSION['typeuser']== "Petugas") 
			{
				echo"
        <div class='container-fluid'>
        <div class='quick-actions_homepage'>
          <ul class='quick-actions'>
            <li class='bg_lb'> <a href='index.php'> <i class='icon-dashboard'></i> My Dashboard </a> </li>
            <li class='bg_lg span3'> <a href='?page=Daftar'> <i class='icon-money'></i> Pembayaran SPP</a> </li>
            <li class='bg_ly'> <a href='?page=Detail'> <i class='icon-table'></i> Detail Pembayaran </a> </li>
    
          </ul>
        </div>
      </div>         
        ";
      }
		}
};

?>
<!--end-main-container-part-->

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
</body>
</html>
