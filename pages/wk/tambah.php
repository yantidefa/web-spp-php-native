
<!DOCTYPE html>
<html lang="en">
<head>
<title>Tambah Data Admin</title>
</head>
<body>
<?php 
  @$PAGE = $_GET['aksi'];
  @$page = $_GET['tambah'];
   ?>
<!--main-container-part-->
<div id="">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a><a href="pegawai.php" title="Go to Data Admin" class="tip-bottom"><i class="icon-home"></i> Data Admin</a> <a href="#" class="current">Tambah Data Admin</a> </div>
    <h1>Tambah Data Walikelas</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
    <div class="span12">
      <div class="widget-box">
        <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
          <h5>Form Tambah Data</h5>
        </div>
        <div class="widget-content nopadding">
          <form action="../pages/wk/prosestambah.php" method="POST" class="form-horizontal">           
            <div class="control-group">
              <label class="control-label">ID GURU :</label>
              <div class="controls">
              <select class="span3" name="idguru" id="idguru" onchange="changeValueguru(this.value)">
                    <option>---------------- Pilih ------------------</option>
                       <?php 

                      $result3= mysqli_query($koneksi,"SELECT * FROM `guru`");

                      $jsArray3 = "var guru = new Array();\n";

                      while ($ROW = mysqli_fetch_array($result3)) {

                          echo '<option name="idguru" value="'.$ROW['idguru'].'">
                          '.$ROW['idguru'].'  </option>';
                          


                          $jsArray3 .= "guru['" . $ROW['idguru'] . "'] = {
                            idguru:'" . addslashes($ROW['idguru']) . "',
                            namaguru:'" . addslashes($ROW['namaguru']) . "'
                            };\n";
                      }
                   ?>                   
                 </select>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">NAMA GURU :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Nama Guru" id="namaguru" name="namaguru">
              </div>
            </div>
            <script type="text/javascript">
              <?php 
                echo $jsArray3;
               ?>
                  function changeValueguru(idguru){
                  document.getElementById('idguru').value = guru[idguru].
                  idguru;
                  document.getElementById('namaguru').value = guru[idguru].
                  namaguru;
              }
             </script>
             <div class="control-group">
              <label class="control-label">KELAS :</label>
              <div class="controls">
              <select name="kelas" class="span3">
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
            <button class="btn-md btn btn-primary" data-toogle="tooltip" data-placement="bottom" title="tambah">
            <i class="icon icon-plus" value></i> Tambahkan</button>
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
</body>
</html>
