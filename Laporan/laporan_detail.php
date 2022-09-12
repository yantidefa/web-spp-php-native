<?php 
include "../inc/koneksi.php";
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>SMK MVP ARS INTERNASIONAL</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="../Petugas/calender/jquery-ui.css" type="text/css"></link>
<link rel="stylesheet" href="../Petugas/css/bootstrap.min.css" />
<link rel="stylesheet" href="../Petugas/css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="Petugas/css/matrix-style.css" />
<link rel="stylesheet" href="css/matrix-media.css" />
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
<link rel="stylesheet" href="css/jquery.gritter.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>
<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
<div class="top-menu">
        <ul class="nav pull-left top-menu">
          <li><a class="logout" href="">Print Or Save</a></li>
          <li><a class="logout" href="javascript:window.open('','_self').close();">Close</a></li>
        </ul>
      </div>
</div>

<!--main-container-part-->
<div id="content">
<!--content-->
<div id="content-header">
<!--Action boxes-->

<!--End-Action boxes-->    
  </div>
  <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h3>Tabel Detail</h3>
         </div>
          <div class="widget-content ">
          <table class="table table-bordered table-striped with-check" style="margin-top:10px;">
              <thead>
                <tr>
                <th>NO</th>
                  <th>NO BUKTI</th>
                  <th>NIS</th> 
                  <th>NAMA SISWA</th> 
                  <th>KELAS</th> 
                  <th>TANGGAL BAYAR</th>                   
                  <th>METODE</th>
                  <th>JUMLAH</th>
                  <th>KETERANGAN</th>
                  <th>NAMA PETUGAS</th>  
                </tr>
              </thead>
              <?php 
                $tampil = "SELECT * FROM spp 
               INNER JOIN siswa ON spp.nis=siswa.nis
               INNER JOIN petugas ON spp.id_petugas=petugas.id_petugas
               ORDER BY spp.no_bukti ASC";

                $hasil  = @mysqli_query($koneksi , $tampil);
                $no=1;
                while ($row = @mysqli_fetch_array($hasil)) {
                  $SATU  = $row['no_bukti'];  
                  $DUA     = $row['nis'];
                  $TIGA     = $row['ket'];
                  $EMPAT = $row['nama_siswa'];
                  $LIMA = $row['kelas'];
                  $TUJUH = $row['jumlah'];
                  $DELAPAN = $row['metode'];
                  $SEMBILAN = $row['nama_petugas'];
                  $SEPULUH = $row['tgl_bayar'];
                  
              ?>
              <tbody>
                <tr>
                <td><?php echo $no; ?></td>
                  <td><?php echo $SATU; ?></td>
                  <td><?php echo $DUA; ?></td>
                  <td><?php echo $EMPAT; ?></td>
                  <td><?php echo $LIMA; ?></td>
                  <td><?php echo $SEPULUH; ?></td>
                  <td><?php echo $DELAPAN; ?></td>
                  <td><?php echo $TUJUH; ?></td>
                  <td><?php echo $TIGA; ?></td>
                  <td><?php echo $SEMBILAN; ?></td>
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
<!--content-->

</div>
<!--Footer-part-->


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
