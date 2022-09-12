<?php
$id=$_GET['id'];
$edit= "SELECT * FROM siswa WHERE siswa.nis='$id'" or die("Gagal melakukan query".mysql_error());
$hasiledit = mysqli_query($koneksi,$edit);
while ($row = mysqli_fetch_array($hasiledit)) {
    $SATU  = $row['nis'];  
    $DUA     = $row['nama_siswa'];
    $TIGA     = $row['kelas'];
    $EMPAT     = $row['tahun'];
    $LIMA     = $row['biaya'];
}
?>

<div id="content-header">
    <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a><a href="pegawai.php" title="Go to Data Admin" class="tip-bottom"><i class="icon-home"></i> Data Admin</a> <a href="#" class="current">Tambah Data Admin</a> </div>
    <h1>Tambah Data Siswa</h1>
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
          <form action="../pages/siswa/prosesedit.php" method="post" class="form-horizontal">
          <div class="control-group">
              <label class="control-label">Tahun Ajaran :</label>
              <div class="controls">
              <select class="span4" name="tahun" id="tahun" onchange="changeValuetahun_ajaran(this.value)" readonly>
                    <option>------------------- Pilih --------------------</option>
                       <?php 

                      $result3= mysqli_query($koneksi,"SELECT * FROM `tahun_ajaran`");

                      $jsArray3 = "var tahun_ajaran = new Array();\n";

                      while ($ROW = mysqli_fetch_array($result3)) {

                          echo '<option name="tahun" value="'.$ROW['tahun'].'">
                          '.$ROW['tahun'].'  </option>';
                          


                          $jsArray3 .= "tahun_ajaran['" . $ROW['tahun'] . "'] = {
                            tahun:'" . addslashes($ROW['tahun']) . "',
                            nis:'" . addslashes($ROW['nis']) . "'
                            };\n";
                      }
                   ?>                   
                 </select>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">NIS :</label>
              <div class="controls">
                <input type="text" class="span4" id="nis" name="nis" placeholder=" NIS " value="<?php echo $SATU; ?>" readonly >
              </div>
            </div>
            <script type="text/javascript">
              <?php 
                echo $jsArray3;
               ?>
                  function changeValuetahun_ajaran(tahun){
                  document.getElementById('tahun').value = tahun_ajaran[tahun].
                  tahun;
                  document.getElementById('nis').value = tahun_ajaran[tahun].
                  nis;
              }
             </script>
            <div class="control-group">
              <label class="control-label">Nama Lengkap :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Nama Lengkap" id="nama_siswa" name="nama_siswa" value="<?php echo $DUA; ?>">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Kelas :</label>
              <div class="controls">
              <select name="kelas" class="span4">
              <option>------------------- Pilih --------------------</option>
                       <?php 
                       $TAMPIL = mysqli_query($koneksi, "SELECT * FROM walikelas INNER JOIN guru ON walikelas.idguru=guru.idguru ORDER BY walikelas.kelas ASC");
                                        $NO=1;
                                        while ($ROW=@mysqli_fetch_array($TAMPIL)) {
                                           $NO;
                                            $KODE             =$ROW['kelas'];
                                            $HARI             =$ROW['namaguru'];
                   
                   ?>
                   <option value="<?php echo $KODE ?>"><?php echo $KODE; echo ","; echo $HARI; echo ",";  ?></option>
                 <?php } ?>
                </select>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">Biaya :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Biaya" id="biaya" name="biaya" value="<?php echo $LIMA; ?>">
              </div>
            </div>
            <div class="controls"> 
            <button class="btn-md btn btn-primary" data-toogle="tooltip" data-placement="bottom" title="tambah"><i class="icon icon-pencil" value></i> Edit</button>
            <a href="../Admin/index.php?page=siswa" class="btn-md btn btn-warning" data-toogle="tooltip" data-placement="bottom" title="Batal"><i class="fa fa-times"></i> Batal</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!--End-breadcrumbs-->  
  </div>