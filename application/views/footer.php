<!--   Core JS Files   -->
 <!-- Core -->
 <script src="<?php echo base_url(); ?>assets argon/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets argon/vendor/popper/popper.min.js"></script>
  <script src="<?php echo base_url(); ?>assets argon/vendor/bootstrap/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>assets argon/vendor/headroom/headroom.min.js"></script>
  <!-- Argon JS -->
  <script src="<?php echo base_url(); ?>assets argon/js/argon.js?v=1.1.0"></script>
  <!--Datepicker -->
  <script src="<?php echo base_url('/assets argon/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js'); ?>"></script>

  <script src="<?php echo base_url('/EZview/EZView.js'); ?>"></script>
  <script src="<?php echo base_url('/EZview/draggable.js'); ?>"></script>

  
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
     maxDate:'+1970/01/03' //tomorrow is maximum date
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




<script type="text/javascript">

      function Change_Brand()
      {
          var val = $("#Brand1").val()
          
          $.get("<?=base_url('Owner/select/')?>"+val, 
              function (data) {
                  
                $("#gen1").html(data)

              }
          );
      }
      function Change_Gen()
      {
          var val = $("#gen1").val()
          
          $.get("<?=base_url('Owner/selectseat/')?>"+val, 
              function (data) {
                  
                $("#seat1").html(data)

              }
          );

          var val = $("#gen1").val()

          $.get("<?=base_url('Owner/selectfuel/')?>"+val, 
              function (data) {
                  
                $("#fuel1").html(data)

              }
          );

          var val = $("#gen1").val()

          $.get("<?=base_url('Owner/selectfuel/')?>"+val, 
              function (data) {
                  
                $("#fuel3").html(data)

              }
          );

      }
      function Change_Fuel()
      {
          var val = $("#fuel1").val()
          
          $.get("<?=base_url('Owner/selectfuel2/')?>"+val, 
              function (data) {
                  
                $("#fuel2").html(data)

              }
          );
      }
     

      // Year Picker 
    
       $(".toggle-password").click(function() {

        $(this).toggleClass("fa-eye fa-eye-slash");
        var input = $($(this).attr("toggle"));
        if (input.attr("type") == "password") {
        input.attr("type", "text");
        } else {
        input.attr("type", "password");
}
});
  </script>
  <script>
  $(function(){

  $('img').EZView();
});
</script>

<!-- <script type='text/javascript'>
$('input:radio[name="ins"]').change(
    function(){
        if ($(this).is(':checked') && $(this).val() == 'Yes') {
            // append goes here
            alert("Allot Thai Gayo Bhai");
        }
    });
</script> -->
<script type='text/javascript'>
$("input:radio[name='ins']").change(function(){
    
    if(this.value =='0.25'){
      console.log('0.25');
        //$('#select-table > .roomNumber').attr('enabled',false);
    }else
    {
      console.log('0.3');
    }
});
</script>

<script>
  var ngo = 0;
  var id = 0;
  $("input[name='end']").change(function(){
         var x = document.getElementById("datetimepickerstart").value; 
         var y = document.getElementById("datetimepickerend").value;
         var dateFirst = moment(x, 'YYYY/MM/DD');
         var dateSecond = moment(y, 'YYYY/MM/DD');
         ngo = moment.duration(dateSecond.diff(dateFirst)).add(1,'days').asDays();
        console.log(ngo);
        console.log(x,y);
        console.log(<?php echo $idc ?>);
        id = <?php echo $idc ?>;

          

            $.get("<?=base_url('Rentnext/selectdate3/')?>"+id, 
              function (data) {
                var total = data * ngo; 
                var game =  total.toFixed(0);
                $("#totalcar").text(game + " บาท")
                $("#totalcar2").val(game)
                 } // รถ
          );  
            $.get("<?=base_url('Rentnext/selectdate4/')?>"+id, 
              function (data) {
                var total1 = data * ngo; 
                var game1 =  total1.toFixed(0);
                $("#totalvat").val(game1)
                 } // vat
          );  
          
  });

  $("input:radio[name='ins']").change(function(){
        
        if(this.value =='1'){
          $.get("<?=base_url('Rentnext/selectdate2/')?>"+id, 
                    function (data) {
                      var total2 = data * ngo; 
                      var game2 =  total2.toFixed(0);
                    $("#ins").text(game2 + " บาท")
                    $("#totalins").val(game2) // ประกันพื้นฐาน
                  }
              ); 
          $.get("<?=base_url('Rentnext/selectdate/')?>"+id, 
                  function (data) {
                    var total3 = data * ngo; 
                    var game3 =  total3.toFixed(0);
                    $("#total").text(game3 + " บาท")
                    $("#total2").val(game3)
                    } // รวม
              );  
        }
        else
        {
          $.get("<?=base_url('Rentnext/selectdate5/')?>"+id, 
                    function (data) {
                      var total4 = data * ngo; 
                      var game4 =  total4.toFixed(0);
                    $("#ins").text(game4 + " บาท")
                    $("#totalins").val(game4) // ประกันพรีเมี่ยม
                    
                  }
              ); 
          $.get("<?=base_url('Rentnext/selectdate6/')?>"+id, 
                  function (data) {
                    var total5 = data * ngo; 
                    var game5 =  total5.toFixed(0);
                    $("#total").text(game5 + " บาท")
                    $("#total2").val(game5)
                    } // รวม
              );  
        }
    });
</script>
 
 
