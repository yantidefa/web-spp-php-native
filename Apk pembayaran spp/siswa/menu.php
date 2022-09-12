<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
<!--page start-->
  <section class="">
    <header class="panel-heaading">
    </header>
    <?php 
      @$page = $_get['aksi'];
      switch ($page) {
        case 'tambah':
          include 'tambah.php';
          break;
        case 'siswa_tambah':
          include 'proses_tambah.php';
          break;
        case 'siswa_edit':
          include 'edit.php';
          break;
        case 'hapus':
          include 'hapus.php';
          break;
        case 'proses_hapus':
          include 'proses_hapus.php';
          break;
        case 'detail':
          include 'detail.php';
          break;
        default:
          include 'siswa.php';
          break;
      }
    ?>
  </section>
<!--page end-->