<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8" />
   <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url() ?>/asset/landing_assets/img/apple-icon.png">
   <link rel="icon" type="image/png" href="<?= base_url() ?>/asset/landing_assets/img/favicon.png">
   <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
   <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
   <!--     Fonts and icons     -->
   <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
   <!-- CSS Files -->
   <link href="<?= base_url() ?>/asset/landing_assets/css/bootstrap.min.css" rel="stylesheet" />
   <link href="<?= base_url() ?>/asset/landing_assets/css/now-ui-kit.css?v=1.3.0" rel="stylesheet" />

   <title><?= $title ?> - SMK Kesehatan Darussalam Bergas</title>
</head>

<body class="index-page sidebar-collapse">

   <!-- Navbar -->
   <?php $this->load->view('front/layouts/_navbar'); ?>
   <!-- End of Navbar -->

   <!-- Content -->
   <?php $this->load->view('front/pages/' . $page); ?>
   <!-- End of Content -->

   <!-- Footer -->
   <?php $this->load->view('front/layouts/_footer'); ?>
   <!-- End of Footer -->


   <!--   Core JS Files   -->
   <script src="<?= base_url() ?>/asset/landing_assets/js/core/jquery.min.js" type="text/javascript"></script>
   <script src="<?= base_url() ?>/asset/landing_assets/js/core/popper.min.js" type="text/javascript"></script>
   <script src="<?= base_url() ?>/asset/landing_assets/js/core/bootstrap.min.js" type="text/javascript"></script>
   <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
   <script src="<?= base_url() ?>/asset/landing_assets/js/plugins/bootstrap-switch.js"></script>
   <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
   <script src="<?= base_url() ?>/asset/landing_assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
   <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
   <script src="<?= base_url() ?>/asset/landing_assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
   <!--  Google Maps Plugin    -->
   <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
   <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
   <script src="<?= base_url() ?>/asset/landing_assets/js/now-ui-kit.js?v=1.3.0" type="text/javascript"></script>
   <script>
      $(document).ready(function() {
         // the body of this function is in assets/js/now-ui-kit.js
         nowuiKit.initSliders();
      });

      function scrollToDownload() {

         if ($('.section-download').length != 0) {
            $("html, body").animate({
               scrollTop: $('.section-download').offset().top
            }, 1000);
         }
      }
   </script>
</body>

</html>