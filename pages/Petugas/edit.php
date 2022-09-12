
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
    <h1>Tambah Data Admin</h1>
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
          <form action="../pages/Detail/proses_tambah.php" method="POST" class="form-horizontal">
            <div class="control-group">
              <label class="control-label">NO BUKTI :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="NO " id="no_bayar" name="no_bayar">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">NIS :</label>
              <div class="controls">
              <select class="span3" name="nis" id="nis" onchange="changeValuesiswa(this.value)">
                    <option>---------------- Pilih ------------------</option>
                       <?php 

                      $result2= mysqli_query($koneksi,"SELECT * FROM `siswa`");

                      $jsArray2 = "var siswa = new Array();\n";

                      while ($ROW = mysqli_fetch_array($result2)) {

                          echo '<option name="nis" value="'.$ROW['nis'].'">
                          '.$ROW['nis'].'  </option>';
                          


                          $jsArray2 .= "siswa['" . $ROW['nis'] . "'] = {
                            nis:'" . addslashes($ROW['nis']) . "',
                            nama_siswa:'" . addslashes($ROW['nama_siswa']) . "',
                            kelas:'".addslashes($ROW['kelas'])."'
                            };\n";
                      }
                   ?>                   
                 </select>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">NAMA :</label>
              <div class="controls">
                <input type="text"  class="span11" placeholder="Nama Siswa" id="nama_siswa" name="nama_siswa">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">KELAS :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Kelas" id="kelas" name="kelas">
              </div>
            </div>            
            <script type="text/javascript">
                                      <?php 
                                        echo $jsArray2;
                                      ?>
                                      function changeValuesiswa(nis){
                                        document.getElementById('nis').value = siswa[nis].
                                        nis;
                                        document.getElementById('nama_siswa').value = siswa[nis].
                                        nama_siswa;
                                        document.getElementById('kelas').value = siswa[nis].
                                        kelas;
                                      }
                                    </script>
            
            <div class="control-group">
              <label class="control-label">NAMA PEMBAYARAN :</label>
              <div class="controls">
                <input type="text"  class="span11" placeholder="Nama Pembayaran" id="nama_pem" name="nama_pem">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">TANGGAL BAYAR :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Tanggal Bayar" id="date" name="tgl_bayar" value="<?php echo date ('y-m-d'); ?>">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">METODE PEMBAYARAN :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Metode" id="metode" name="metode">
              </div>
            </div>   
            <div class="control-group">
              <label class="control-label">JUMLAH :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Jumlah" id="jumlah" name="jumlah">
              </div>
            </div>   
            <div class="control-group">
              <label class="control-label">KETERANGAN :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Ket" id="ket" name="ket">
              </div>
            </div>            
            <div class="control-group">
              <label class="control-label">NAMA PETUGAS :</label>
              <div class="controls">
              <select name="nama_petugas" class="span3">
                    <option>---------------- Pilih ------------------</option>
                       <?php 
                       $TAMPIL = mysqli_query($koneksi, "SELECT * FROM petugas ORDER BY petugas.id_petugas ASC");
                                        $NO=1;
                                        while ($ROW=@mysqli_fetch_array($TAMPIL)) {
                                           $NO;
                                            $KODE             =$ROW['id_petugas'];
                                            $SATU             =$ROW['nama_petugas'];
                   ?>
                   <option value="<?php echo $KODE ?>"><?php echo $SATU; ?></option>
                 <?php } ?>
                 </select>
              </div>
            </div>
            <div class="controls"> 
               <a name="tambah" type="submit" class="btn btn-round btn-primary" data-toogle="tooltip" 
               data-placement="bottom" title="Tamba Data"><i class="icon-plus"></i> Tambah</a>
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
