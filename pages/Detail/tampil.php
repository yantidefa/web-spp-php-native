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
    <h1>Detail Pembayaran</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5>Tabel Detail</h5>
         </div>
          <div class="widget-content ">
           <!-- <a href="../../Laporan/laporan_detail.php" class="btn btn-round btn-primary" data-toogle="tooltip" data-placement="bottom" title="Kwitansi" target="_blank"><i class="glyphicon glyphicon-book"></i> Kwitansi</a> -->
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
                  <th>Aksi</th>
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
                  <td><a href="../pages/Detail/hapus.php?no_bukti=<?php echo $row['no_bukti'];?>" style="border-radius:3px;" class="btn btn-mini btn-danger" data-toogle="tooltip" data-placement="bottom" title="Hapus"><i class="icon-trash"> </i>Hapus</a>   
                  <a href="index.php?page=Detail&aksi=edit&id=<?php echo $SATU; ?>" style="border-radius:3px;" class="btn btn-mini btn-success" data-toogle="tooltip" data-placement="bottom" title="Edit"><i class="icon-pencil"> </i>Edit</a>
                     <!-- <a href="../../kwitansi/kwitansi.php" style="border-radius:3px;" class="btn btn-mini btn-success" data-toogle="tooltip" data-placement="bottom" title="Edit"><i class="icon-book"> </i>Kwitansi</a> -->
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
