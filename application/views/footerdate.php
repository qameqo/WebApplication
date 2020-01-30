

</body>

<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>game/css/jquery.datetimepicker.min.css"/>
<script type='text/javascript' src="<?php echo base_url(); ?>game/js/jquery.datetimepicker.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#datetimepicker').datetimepicker();
    });
    $('#datetimepicker').datetimepicker({
     format:'Y-m-d',
     timepicker:false,
     minDate:'-1970/01/01', //yesterday is minimum date
     maxDate:'+1970/01/04' //tomorrow is maximum date
});
jQuery(function(){
 jQuery('#datetimepickerstart').datetimepicker({
  format:'Y/m/d',
  onShow:function( ct ){
   this.setOptions({
    maxDate:jQuery('#datetimepickerend').val()?jQuery('#datetimepickerend').val():false
   })
  },
  timepicker:false
 });
 jQuery('#datetimepickerend').datetimepicker({
  format:'Y/m/d',
  maxDate:'+1970/01/05',
  onShow:function( ct ){
   this.setOptions({
    minDate:jQuery('#datetimepickerstart').val()?jQuery('#datetimepickerstart').val():false
   })
  },
  timepicker:false
 });
});
</script>
