<?php 
    @$page = $_GET['aksi'];
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
<title>SMK MVP ARS INTERNASIONAL</title>
</head>
<body>
<div id="">
  <div id="content-header">
    <div id="breadcrumb"> <a href="../index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Data Admin</a> </div>
    <h1>Daftar Pembayaran SPP</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5>Tabel Pembayaran SPP</h5>
         </div>
          <div class="widget-content ">
          <div>
          <a href="index.php?page=Daftar&aksi=tambah" class="btn btn-round btn-primary " data-toogle="tooltip" data-placement="bottom" title="Tamba Data"><i class="icon-plus"></i> Tambah</a>
          </div>
            <table class="table table-bordered table-striped with-check" style="margin-top:10px;">
              <thead>
                <tr>
                  <th>NO</th>
                  <th>NO BUKTI</th>
                  <th>NIS</th> 
                  <th>NAMA SISWA</th>
                  <th>KELAS</th>
                  <th>BULAN</th>
                  <th>TANGGAL BAYAR</th>
                  <th>JUMLAH</th>
                  <th>METODE</th> 
                  <th>KETERANGAN</th>
                  <th>NAMA PETUGAS</th>  
                  <th>Aksi</th>
                </tr>
              </thead>
              <?php 
                $tampil = "SELECT * FROM spp INNER JOIN petugas ON spp.id_petugas=petugas.id_petugas
                INNER JOIN siswa ON spp.nis=siswa.nis
                ORDER BY spp.no_bukti ASC";
                $hasil  = @mysqli_query($koneksi , $tampil);
                $no=1;
                while ($row = @mysqli_fetch_array($hasil)) {
                  $SATU  = $row['no_bukti'];  
                  $DUA     = $row['nis'];
                  $aa     = $row['nama_siswa'];
                  $bb     = $row['kelas'];
                  $TIGA = $row['bulan'];
                  $EMPAT = $row['tgl_bayar'];
                  $LIMA = $row['jumlah'];
                  $ENAM = $row['metode'];
                  $TUJUH = $row['ket'];
                  $DELAPAN = $row['nama_petugas'];
              ?>
              <tbody>
                <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $SATU; ?></td>
                  <td><?php echo $DUA; ?></td>
                  <td><?php echo $aa; ?></td>
                  <td><?php echo $bb; ?></td>
                  <td><?php echo $TIGA; ?></td>
                  <td><?php echo $EMPAT; ?></td>
                  <td><?php echo $LIMA; ?></td>
                  <td><?php echo $ENAM; ?></td>
                  <td><?php echo $TUJUH; ?></td>
                  <td><?php echo $DELAPAN; ?></td>
                  <td><a href="../pages/Daftar Pembayaran/hapus.php?no_bukti=<?php echo $row['no_bukti'];?>" style="border-radius:3px;" class="btn btn-mini btn-danger" data-toogle="tooltip" data-placement="bottom" title="Hapus"><i class="icon-trash"></i>Hapus</a>    
                     <!-- <a href="#" style="border-radius:3px;" class="btn btn-mini btn-success" data-toogle="tooltip" data-placement="bottom" title="Edit"><i class="icon-book"> </i>Kwitansi</a> -->
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
<!--End-breadcrumbs-->  
  </div>
</div>

</body>
</html>
