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
        case 'guru_tambah':
          include 'proses_tambah.php';
          break;
        case 'guru_edit':
          include 'edit.php';
          break;
        case 'hapus':
          include 'hapus.php';
          break;
        case 'proses_hapus':
          include 'proses_hapus.php';
          break;
        default:
          include 'guru.php';
          break;
      }
    ?>
  </section>
<!--page end-->