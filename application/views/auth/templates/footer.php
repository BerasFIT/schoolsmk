<footer class="footer">
   <div class=" container ">
      <div class="copyright" id="copyright">
         &copy;
         <script>
            document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
         </script> | Designed by SMK KESEHATAN DARUSSALAM BERGAS
      </div>
   </div>
</footer>
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