<div id="content-header">
    <div id="breadcrumb"> <a href="../index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">Data Wali Kelas</a> </div>
    <h1>Data Wali Kelas</h1>
  </div>
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-th"></i> </span>
            <h5>Tabel Walikelas</h5>
         </div>
          <div class="widget-content ">
          <div>
          <a href="index.php?page=wk&aksi=tambah" class="btn btn-round btn-primary " data-toogle="tooltip" data-placement="bottom" title="Tamba Data"><i class="icon-plus"></i> Tambah</a>
          </div>
            <table class="table table-bordered table-striped with-check" style="margin-top:10px;">
              <thead>
                <tr>
                  <th>No</th>
                  <th>ID Guru</th>
                  <th>Nama</th>
                  <th>Kelas</th>   
                  <th>Aksi</th>
                </tr>
              </thead>
              <?php 
             $tampil = "SELECT * FROM walikelas INNER JOIN guru ON walikelas.idguru=guru.idguru
             ORDER BY walikelas.kelas ASC";
             $hasil  = @mysqli_query($koneksi , $tampil);
             $no=1;
             while ($row = @mysqli_fetch_array($hasil)) {
               $SATU  = $row['idguru'];  
               $DUA     = $row['namaguru'];
               $aa     = $row['kelas'];
              ?>
              <tbody>
                <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $SATU; ?></td>
                  <td><?php echo $DUA; ?></td>
                  <td><?php echo $aa; ?></td>
                  <td><a href="../pages/wk/hapus.php?kelas=<?php echo $row['kelas'];?>" style="border-radius:3px;" class="btn btn-mini btn-danger" data-toogle="tooltip" data-placement="bottom" title="Hapus"><i class="icon-trash"></i>Hapus</a>    
                     <!-- <a href="index.php?page=wk&aksi=edit&id=<?php echo $aa; ?>" style="border-radius:3px;" class="btn btn-mini btn-success" data-toogle="tooltip" data-placement="bottom" title="Edit"><i class="icon-pencil"> </i>Edit</a> -->
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