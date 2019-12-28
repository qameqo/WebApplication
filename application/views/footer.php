<!--   Core JS Files   -->
<script src="<?php echo base_url(); ?>assets/js/core/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/moment.min.js"></script>
    <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
    <script src="<?php echo base_url(); ?>assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="<?php echo base_url(); ?>assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
    <!--  Google Maps Plugin  -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
    <script src="<?php echo base_url(); ?>assets/js/material-kit.js?v=2.0.6" type="text/javascript"></script>
</body>
<script type="text/javascript">

<<<<<<< HEAD
      function Change_Brand()
      {
          var val = $("#Brand1").val()
          
          $.get("<?=base_url('Owner/select/')?>"+val, 
              function (data) {
                  
                $("#gen1").html(data)

              }
          );
      }

      // Year Picker 
      $('.date-own').datepicker({
         minViewMode: 2,
         format: 'yyyy'
       });

  </script>

=======
     <script type="text/javascript" src="//code.jquery.com/jquery.min.js"></script>
    <!-- Core -->
  <script src="<?php echo base_url(); ?>assets argon/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets argon/vendor/popper/popper.min.js"></script>
  <script src="<?php echo base_url(); ?>assets argon/vendor/bootstrap/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>assets argon/vendor/headroom/headroom.min.js"></script>
  <!-- Argon JS -->
  <script src="<?php echo base_url(); ?>assets argon/js/argon.js?v=1.1.0"></script>
  <!--Datepicker -->
  <script src="<?php echo base_url('/assets argon/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js'); ?>"></script>
  <script>
  $(function() {
  $("#datepicker").datepicker({dateFormat: 'yyyy-MM-dd'});
  });
  </script>
</body>
>>>>>>> parent of ac83654... l,;;
</html>
