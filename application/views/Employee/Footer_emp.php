    <!--   Core JS Files   -->

    <script src="<?php echo base_url('/EZview/EZView.js'); ?>"></script>
    <script src="<?php echo base_url('/EZview/draggable.js'); ?>"></script>
    
    <!-- <script src="<?php echo base_url(); ?>assets/js/core/jquery.min.js" type="text/javascript"></script> -->
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
    <!--Datepicker -->
    <script src="<?php echo base_url('/assets argon/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js'); ?>"></script>
</body>

<script>

    $(document).ready( function () {
        $('.table').dataTable();
    } );

    $('#add_button').click(function(){
        $('#employee_form')[0].reset();
        $('.modal-title').text("Add Employee");
        $('#action').val("Add");
        $('#operation').val("Add");
    });

    $(function(){
        $('img').EZView();
    });

    // setTimeout(function(){
    //     window.location.href = '<?php base_url() ?>Emp_car/refresh_car';
    // },14400000);

    // function autoRefreshPage()
    // {
    //     window.location = window.location.href = '<?php base_url() ?>Emp_car/refresh_car';
    // }
    // setInterval('autoRefreshPage()', 3000);

</script>
