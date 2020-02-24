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
// var date = new Date();
//     $(document).ready(function() {
//         $('#datetimepicker').datetimepicker();
//     });
//     $('#datetimepicker').datetimepicker({
//      format:'Y-m-d',
//      timepicker:false,
//      minDate:'-1970/01/01', //yesterday is minimum date
//      maxDate:'+1970/01/03' //tomorrow is maximum date
// });

jQuery(function(){
 var startDate = jQuery('#datetimepickerstart').datetimepicker({
  format:'Y/m/d',
  minDate:'-1970/01/01',
  //maxDate:'+1970/01/03',
  onShow:function( ct ){
   this.setOptions({
   })
  },
  timepicker:false
 });

});
</script>

<script>
jQuery(function(){
 var startDate = jQuery('#startdateee').datetimepicker({
  format:'Y/m/d',
  minDate:'-1970/01/01',
  // maxDate:'+1970/01/03',
  onShow:function( ct ){
   this.setOptions({
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
  var s = 0;
  var dateSong = 0;
  
$("input[name='date1']").ready(function(){
    s = document.getElementById("datetimepickerfirst").value; 
    dateSong = moment(s, 'YYYY-MM-DD');
    var start = dateSong.format('YYYY/MM/DD').toString();
    var end = (dateSong).add(2,'days').format('YYYY/MM/DD').toString();
          jQuery('#datetimepicker').datetimepicker({
            format:'Y/m/d',
            onShow:function( ct ){
            this.setOptions({
              minDate: start,
              maxDate: end,
            }) //.val(), 10)
            },
            timepicker:false
          });
  })

</script>

<!-- <script>
  var dateend = 0;
  var j = 0;
  
  $("input[name='startdateee']").change(function(){
    j = document.getElementById("startdateee").value; 
    dateend = moment(j, 'YYYY/MM/DD');
    console.log( dateend.format('YYYY/MM/DD').toString())
      var ga = dateend.format('YYYY/MM/DD').toString();
      var go = (dateend).add(4,'days').format('YYYY/MM/DD').toString();
          jQuery('#enddateee').datetimepicker({
            format:'Y/m/d',
            onShow:function( ct ){
            this.setOptions({
              minDate: ga,
              maxDate: go,
            }) //.val(), 10)
            },
            timepicker:false
          });
  })

  $("input[name='enddateee']").change(function(){
          
           
          $.get("<?=base_url('Rental/selectcar/')?>",{
            
          }, 
              function (data) {
                var tot = data;
                var bo = 0; 
                var en = document.getElementById("enddateee").value;
                var st = document.getElementById("startdateee").value;
                var dateen = moment(en, 'YYYY/MM/DD');
                var dateendd = dateen.format('YYYY-MM-DD').toString();
                var startda = moment(st, 'YYYY/MM/DD');
                var startdat = startda.format('YYYY-MM-DD').toString();
                
                $("#booking").html("")
                for(bo in data){
                  var book2 = data[bo];
                  var book = `<div class="row">
				<div class="col-sm shadow p-3 mb-2 bg-white rounded"
					style="background-color: #FFFFFF; border-radius: 10px ; margin-left: 1em ; margin-right: 1em ;">
					<div class="row">
						<div class="col-sm-8">
						${book2.Name_Brand} ${book2.Name_Gen} ${book2.Yearcar}
						</div>
						<div class="col-sm-6">
							<img src="./pic/car-gear.png"
								style="width:10px; height:10px;">&nbsp;${book2.Gear}
							<img src="./pic/seat-belt.png"
								style="width:10px; height:10px;">&nbsp;${book2.Number_Seat}
							<br><span style="color: #F60200;">${book2.RentalPrice}</span>&nbsp;บาท/วัน
							<a class="badge badge-secondary" type="button" href="#" data-toggle="modal"
								data-target="#modal-default"><u>เอกสารเช่ารถ</u></a>
							<div class="modal fade" id="modal-default" tabindex="-1" role="dialog"
								aria-labelledby="modal-default" aria-hidden="true">
								<div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
									<div class="modal-content">

										<div class="modal-header">
											<h6 class="modal-title" id="modal-title-default">เอกสารสำหรับการเช่ารถยนต์
											</h6>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">×</span>
											</button>
										</div>

										<div class="modal-body">
											<p>1.บัตรประชาชน หรือ หนังสือเดินทาง</p>
											<p>2.ใบขับขี่ หรือ ใบขับขี่ระหว่างประเทศ</p>
											<p>3.ใบเสร็จการโอนเงินค่ามัดจำ</p>
											<img src="./pic/logo55.png" style="width:450px; height:100;"
												alt="เช่ารถกับ G Dragon">
										</div>

										<div class="modal-footer">
											<button type="button" class="btn btn-link  ml-auto"
												data-dismiss="modal">ปิด</button>
										</div>

									</div>
								</div>
							</div>
						</div>
						
						<div class="col-sm-6 text-right">
							
							<img src="./img/${book2.Name_image}" style="height: 80px; width:80px;">
						
              <a class="btn btn-outline" style="background-color: #F60200; color: white; height:45px;"
								href="<?php echo site_url('Rentnext/one/');?>${book2.idCarregis}/${startdat}/${dateendd}">จองรถ</a>
						</div>
					</div>
				</div>
			</div>	
		</div>
	</div>`;
              $("#booking").append(book)
                }
               
                console.log(tot);

                 } // รถ
          );  
  })
  
  </script> -->

<script>
  var ngo = 0;
  var id = 0;
  var x = 0;
  var dateFirst = 0;
  var start = 0;
  var end = 0;
  var chonst = 0;

  $("input[name='start']").change(function(){
    x = document.getElementById("datetimepickerstart").value; 
    dateFirst = moment(x, 'YYYY/MM/DD');
    
    //console.log( dateFirst.format('YYYY/MM/DD').toString())
          jQuery('#datetimepickerend').datetimepicker({
            format:'Y/m/d',
            onShow:function( ct ){
            this.setOptions({
              minDate: dateFirst.format('YYYY/MM/DD').toString(),
              maxDate: (dateFirst).add(4,'days').format('YYYY/MM/DD').toString(),
            }) //.val(), 10)
            },
            timepicker:false
          });
  })
  $("input[name='end']").change(function(){
          x = document.getElementById("datetimepickerstart").value; 
         var y = document.getElementById("datetimepickerend").value;
         var xx = moment(x, 'YYYY/MM/DD');
         var xxx = xx.format('YYYY-MM-DD').toString();
         var yy = moment(y, 'YYYY/MM/DD');
         var yyy = yy.format('YYYY-MM-DD').toString();
          dateFirst = moment(x, 'YYYY/MM/DD');
         var dateSecond = moment(y, 'YYYY/MM/DD');
         ngo = moment.duration(dateSecond.diff(dateFirst)).add(1,'days').asDays();
        console.log(ngo);
        console.log(x,y);
       // console.log(<?php echo $idc ?>);
       
        id = <?php echo $idc ?>;
        end = $end = yyy;
        start = $start = xxx;
        console.log(start);
        console.log(end);
        console.log(id);
        
          $.get("<?=base_url('Rentnext/selectstart/')?>"+start+"/"+end+"/"+id, 
              function (data) {
                
               console.log(data);
              if(data.trim() == "55")
              {
						  console.log("จองได้");
					    }
              else
					    {
						  console.log("จองไม่ได้");
					
              }  
             
              
      });
                
          

         
        
       
            $.get("<?=base_url('Rentnext/selectdate3/')?>"+id, 
              function (data) {
                var total = data * ngo; 
                var game =  total.toFixed(0);
                var tot = game.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                $("#totalcar").text(tot + " บาท")
                $("#totalcar2").val(game)
                 } // รถ
          );  
          //   $.get("<?=base_url('Rentnext/selectdate4/')?>"+id, 
          //     function (data) {
          //       var total1 = data; 
          //       var game1 =  total1.toFixed(0);
          //       $("#totalvat").val(game1)
          //        } // vat
          // );  
         
          
  });

  $("input:radio[name='ins']").change(function(){
        
        if(this.value =='1'){
          $.get("<?=base_url('Rentnext/selectdate2/')?>"+id, 
                    function (data) {
                      var total2 = data * ngo; 
                      var game2 =  total2.toFixed(0);
                      var tot2 = game2.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                    $("#ins").text(tot2 + " บาท")
                    $("#totalins").val(game2) // ประกันพื้นฐาน
                  }
              ); 
          $.get("<?=base_url('Rentnext/selectdate/')?>"+id, 
                  function (data) {
                    var vat = data *ngo;
                    var vat2 = vat * 7 / 107;
                    var vat3 = vat2.toFixed(0);
                    var total3 = data * ngo + 5000; 
                    var game3 =  total3.toFixed(0);
                    var tot3 = game3.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                    $("#total").text(tot3 + " บาท")
                    $("#total2").val(game3)
                    $("#totalvat").val(vat3)
                    $("#book").removeAttr('disabled',true)
                    console.log(vat2);
                    } // รวม
              );  
        }
        else
        {
          $.get("<?=base_url('Rentnext/selectdate5/')?>"+id, 
                    function (data) {
                      var total4 = data * ngo; 
                      var game4 =  total4.toFixed(0);
                      var tot4 = game4.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                    $("#ins").text(tot4 + " บาท")
                    $("#totalins").val(game4) // ประกันพรีเมี่ยม
                    
                  }
              ); 
          $.get("<?=base_url('Rentnext/selectdate6/')?>"+id, 
                  function (data) {
                    var vat = data *ngo;
                    var vat2 = vat * 7 / 107;
                    var vat3 = vat2.toFixed(0);
                    var total5 = data * ngo + 5000; 
                    var game5 =  total5.toFixed(0);
                    var tot5 = game5.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                    $("#total").text(tot5 + " บาท")
                    $("#total2").val(game5)
                    $("#totalvat").val(vat3)
                    $("#book").removeAttr('disabled',true)
                    } // รวม
              );  
        }
    });
</script>
 
 
