
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
  <script type="text/javascript">
  $(function(){
     
     // เมื่อเปลี่ยนค่าของ select id เท่ากับ list1
      $("select#Brand").change(function(){  
          // ส่งค่า ตัวแปร list1 มีค่าเท่ากับค่าที่เลือก ส่งแบบ get ไปที่ไฟล์ data_for_list2.php
          $.get("Car_owner.php",{
              Brand:$(this).val()
          },function(data){ // คืนค่ากลับมา
                 $("select#Gen").html(data);  // นำค่าที่ได้ไปใส่ใน select id เท่ากับ list2      
                 $("select#Gen").trigger("change"); // อัพเดท list2 เพื่อให้ list2 ทำงานสำหรับรีเซ็ตค่า
          });
     });     
      
     // เมื่อเปลี่ยนค่าของ select id เท่ากับ list2
      $("select#Gen").change(function(){  
          // ส่งค่า ตัวแปร list2 มีค่าเท่ากับค่าที่เลือก ส่งแบบ get ไปที่ไฟล์ data_for_list3.php
          $.get("Car_owner.php",{
              Gen:$(this).val()
          },
          });
     });         
 });
 </script>      

</body>
</html>
