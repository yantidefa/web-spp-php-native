<div id="content-header">
    <div id="breadcrumb"> <a href="../index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Data Siswa</a> </div>
    <h1>Data siswa</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5>Tabel Siswa</h5>
         </div>
          <div class="widget-content ">
          <div>
          <a href="index.php?page=siswa&aksi=tambah" class="btn btn-round btn-primary " data-toogle="tooltip" data-placement="bottom" title="Tamba Data"><i class="icon-plus"></i> Tambah</a>
          </div>
            <table class="table table-bordered table-striped with-check" style="margin-top:10px;">
              <thead>
                <tr>
                  <th>No</th>
                  <th>NIS</th>
                  <th>NAMA SISWA</th>
                  <th>KELAS</th>
                  <th>TAHUN AJARAN</th>   
                  <th>BIAYA</th>   
                  <th>Aksi</th>
                </tr>
              </thead>
              <?php 
                $tampil = "SELECT * FROM siswa";
                $hasil  = @mysqli_query($koneksi , $tampil);
                $no=1;
                while ($row = @mysqli_fetch_array($hasil)) {
                  $SATU  = $row['nis'];  
                  $DUA     = $row['nama_siswa'];
                  $TIGA     = $row['kelas'];
                  $EMPAT     = $row['tahun'];
                  $LIMA     = $row['biaya'];
              ?>
              <tbody>
                <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $SATU; ?></td>
                  <td><?php echo $DUA; ?></td>
                  <td><?php echo $TIGA; ?></td>
                  <td><?php echo $EMPAT; ?></td>
                  <td><?php echo $LIMA; ?></td>
                  <td><a href="../pages/siswa/hapus.php?nis=<?php echo $row['nis'];?>" style="border-radius:3px;" class="btn btn-mini btn-danger" data-toogle="tooltip" data-placement="bottom" title="Hapus"><i class="icon-trash"></i>Hapus</a>    
                     <!-- <a href="index.php?page=siswa&aksi=edit&id=<?php echo $SATU; ?>" style="border-radius:3px;" class="btn btn-mini btn-success" data-toogle="tooltip" data-placement="bottom" title="Edit"><i class="icon-pencil"> </i>Edit</a> -->
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