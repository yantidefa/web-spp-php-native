
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
                <input type="text" class="span11" placeholder="NO " id="no_bukti" name="no_bukti">
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
              <label class="control-label">ID PETUGAS :</label>
              <div class="controls">
              <select class="span3" name="id_petugas" id="id_petugas" onchange="changeValuepetugas(this.value)">
                    <option>---------------- Pilih ------------------</option>
                       <?php 

                      $result3= mysqli_query($koneksi,"SELECT * FROM `petugas`");

                      $jsArray3 = "var petugas = new Array();\n";

                      while ($ROW = mysqli_fetch_array($result3)) {

                          echo '<option name="id_petugas" value="'.$ROW['id_petugas'].'">
                          '.$ROW['id_petugas'].'  </option>';
                          


                          $jsArray3 .= "petugas['" . $ROW['id_petugas'] . "'] = {
                            id_petugas:'" . addslashes($ROW['id_petugas']) . "',
                            nama_petugas:'".addslashes($ROW['nama_petugas'])."'
                            };\n";
                      }
                   ?>                   
                 </select>
              </div>
            </div>
            <div class="control-group">
              <label class="control-label">NAMA PETUGAS :</label>
              <div class="controls">
                <input type="text" class="span11" placeholder="Nama Petugas" id="nama_petugas" name="nama_petugas">
              </div>
            </div>
            <script type="text/javascript">
              <?php 
                echo $jsArray3;
               ?>
                  function changeValuepetugas(id_petugas){
                  document.getElementById('id_petugas').value = petugas[id_petugas].
                  id_petugas;
                  document.getElementById('nama_petugas').value = petugas[id_petugas].
                  nama_petugas;
              }
             </script>
            <div class="controls"> 
            <button class="btn-md btn btn-primary" data-toogle="tooltip" data-placement="bottom" title="tambah"><i class="icon icon-plus" value></i> Tambahkan</button>
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
