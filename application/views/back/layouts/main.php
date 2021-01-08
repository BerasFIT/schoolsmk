<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url() ?>/asset/admin_assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?= base_url() ?>/asset/admin_assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    ADMIN SMK KESDA BERGAS
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="<?= base_url() ?>/asset/admin_assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="<?= base_url() ?>/asset/admin_assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?= base_url() ?>/asset/admin_assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php $this->load->view('back/layouts/_sidebar') ?>
    <!-- End of Sidebar -->

    <!-- Topbar Navbar -->
    <?php $this->load->view('back/layouts/_topbar') ?>
    </nav>
    <!-- End of Topbar -->

    <!-- Begin Page Content -->
    <?php $this->load->view('back/pages/' . $page) ?>

  </div>
  <!-- End of Main Content -->

  <!-- Footer -->
  <?php $this->load->view('back/layouts/_footer') ?>
  <!-- End of Footer -->

  </div>
  <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Anda yakin ingin keluar ?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Klik tombol "Logout" untuk keluar.</div>
        <div class="modal-footer">
          <button class="btn btn-success" type="button" data-dismiss="modal">Batal</button>
          <a class="btn btn-danger" href="<?= base_url('auth/logout') ?>">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!--   Core JS Files   -->
  <script src="<?= base_url() ?>/asset/admin_assets/js/core/jquery.min.js"></script>
  <script src="<?= base_url() ?>/asset/admin_assets/js/core/popper.min.js"></script>
  <script src="<?= base_url() ?>/asset/admin_assets/js/core/bootstrap.min.js"></script>
  <script src="<?= base_url() ?>/asset/admin_assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="<?= base_url() ?>/asset/admin_assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="<?= base_url() ?>/asset/admin_assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?= base_url() ?>/asset/admin_assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="<?= base_url() ?>/asset/admin_assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

    });
  </script>
  <script>
    $('#summernote').summernote({
      height: 300,
      toolbar: [
        // [groupName, [list of button]]
        ['style', ['bold', 'italic', 'underline', 'clear', 'fontname']],
        ['misc', ['undo', 'redo']],
        ['font', ['strikethrough', 'superscript', 'subscript']],
        ['fontsize', ['fontsize']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['height', ['height']],
        ['insert', ['table', 'link', 'hr', 'fullscreen']],
      ],
      placeholder: 'Masukkan konten berita disini...'
    });
  </script>

  <!-- For Datatable -->
  <?php
  if (isset($datatable)) {
    $this->load->view('back/pages/' . $datatable);
  }
  ?>

  <!-- For Chart in Dashboard -->
  <?php
  if (isset($pageChart)) {
    $this->load->view('back/layouts/' . $pageChart);
  }
  ?>

</body>

</html>