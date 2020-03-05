<br>
<H4 style="text-align: center;">เงื่อนไขราคาปล่อยเช่ารถยนต์</H4>
<div class="container">
	<div class="photo mt-5 mb-3" style="text-align: center;">
	</div>
	<div class="row justify-content-center">
		<div class="col-sm-8 shadow p-3 mb-5 bg-white rounded"
			style="background-color: #FFFFFF; border-radius: 10px ; margin-left: 1em ; margin-right: 1em ;">
			<form class="form-signin" id="carregister" name="carregister" method="post"
				action="<?php echo base_url();?>Pricecar/price">

				<?php 
				
				$query = $this->db->query("SELECT * FROM Carregis INNER JOIN Generation on Generation.id_Gen = Carregis.id_Gen INNER JOIN 
				Brand on Brand.idBrand = Carregis.idBrand
				WHERE Generation.id_Gen = '$id'");
				// $this->db->select('*');
				// $this->db->from('Brand' , 'Generation');
				// $this->db->where('Genaretion.idBrand');
				// $this->db->where('Brand.idBrand');
				// $this->db->where('id_Gen', $id);
				// $query = $this->db->get();
				$qq = $query->result_array();
				
				?>
				<div class="row">
					<div class="col-sm text-center">
						<label class="bmd-label-floating">
							<h4>ราคาปล่อยเช่ารถยนต์</h4>
						</label>
						<?php foreach($qq as $data){
								
                                ?><?php  } ?>
						<h5><?php echo $data['Name_Brand']; ?> <?php echo $data['Name_Gen']; ?></h5>
						
					</div>
				</div>
				<?php  
							foreach($qq as $data){
								$ei = $data['Price'];
								$eii = 0.23;
								$eiii = 0.17;
								$e = 10;
								$ee = 1000;
								$total = $ei * $eii * $e / $ee;
								$total2 = $ei * $eiii * $e / $ee;
								/////////////////////////////
								$ei = $data['Price'];
								$year = date('Y');
								$yearcar = $data['Yearlicense'];
								$yl = $year - $yearcar; //จำนวนปี
								$yl = $yl / 10000;
								$raka = 0.0018 - $yl;
								$raka3 = 0.0022 - $yl;
								$raka2 = $ei * $raka;	//ราคารถต่ำ
								$raka1 = $ei * $raka3; //ราคารถสูง
						?>
				<?php $query = $this->db->query("select * from Carregis where idCarregis='$idc'");
					  $nm = $query->result_array();

				 ?>
				 <?php foreach($nm as $data){ ?>
					 
					 <input type="hidden" id="year" value="<?php echo $data['Yearlicense']; ?>">
					 <input type="hidden" id="now" value="<?php echo date('Y') ?>">
			<?php	 } ?><?php } ?>
				<div class="row justify-content-center">
				<span style=""> เรทราคาปล่อยเช่าอยู่ที่ <?php echo number_format($raka2,0);?> ถึง <?php echo number_format($raka1,0);?> บาท/วัน</span>
				<input type="hidden" id="up"name="up" value="<?php echo round($raka1,0);?>">
				<input type="hidden" id="down"name="down" value="<?php echo round($raka2,0);?>">
				</div>
							
				<br>
				<div class="row">
					<div class="col-sm text-right">
						<label class="bmd-label-floating">
							<h5>ราคาที่แนะนำ :</h5>
						</label>
					</div>
					<div class="col-sm">
						<?php  
							foreach($qq as $data){
								$ei = $data['Price'];
								$year = date('Y');
								$yearcar = $data['Yearlicense'];
								$yl = $year - $yearcar; //จำนวนปี
								$yl = $yl / 10000;
								$raka = 0.002 - $yl;
								$raka2 = $ei * $raka; //ราคารถแนะนำ
								
						?>
						<?php } ?>
						<input type="text" class="form-control" name="Price2" id="Price2" value="<?php echo number_format($raka2,0) ?>"
							style="width: 200px; height:25px;" disabled>
							<input type="hidden" id="pow"name="pow" value="<?php echo round($total,0);?>">
						
					</div>
					<div class="col-sm">
						<h5>บาท/วัน</h5>
					</div>
				</div>
				<?php 
				
				$query = $this->db->query('SELECT * FROM Generation , Brand WHERE Brand.idBrand = Generation.idBrand and Generation.id_Gen = '. $id);
				// $this->db->select('*');
				// $this->db->from('Brand' , 'Generation');
				// $this->db->where('Genaretion.idBrand');
				// $this->db->where('Brand.idBrand');
				
				// $this->db->where('id_Gen', $id);
				// $query = $this->db->get();
				$qq = $query->result_array();
				
				?>
				
				<div class="row">
					<div class="col-sm text-right">
						<label class="bmd-label-floating">
							<h5>ราคาที่ลูกค้าต้องการ :</h5>
						</label>
					</div>
					<div class="col-sm">
						<input type="text" class="form-control" name="Price" id="Price" value=""
							style="width: 200px; height:25px;" pattern="[0-9]{3,}" title="กรอกเป็นตัวเลข" required>
					</div>
					<div class="col-sm">
						<h5>บาท/วัน</h5>
					</div>
				</div>
				<div class="row">
					<div class="col-sm text-right">
						<label class="bmd-label-floating">
							<h5>บัญชีธนาคาร :</h5>
						</label>
					</div>
					<div class="col-sm">
					
						<select class="form-control selectpicker" data-style="btn btn-link" name="bank" 
							 id="bank" required>
							
							<option value="">เลือกธนาคาร</option>
							<option value="กรุงเทพ">ธ.กรุงเทพ </option>
							<option value="กรุงไทย">ธ.กรุงไทย</option>
							<option value="กรุงศรีอยุธยา">ธ.กรุงศรีอยุธยา</option>
							<option value="กสิกรไทย">ธ.กสิกรไทย</option>
							<option value="เกียรตินาคิน">ธ.เกียรตินาคิน</option>
							<option value="ซีไอเอ็มบีไทย">ธ.ซีไอเอ็มบีไทย</option>
							<option value="ทหารไทย">ธ.ทหารไทย</option>
							<option value="ทิสโก้">ธ.ทิสโก้</option>
							<option value="ไทยพาณิชย์">ธ.ไทยพาณิชย์</option>
							<option value="ธนชาต">ธ.ธนชาต</option>
							<option value="ยูโอบี">ธ.ยูโอบี</option>
							<option value="แลนด์แอนด์เฮ้าส์">ธ.แลนด์แอนด์เฮ้าส์</option>
							<option value="สแตนดาร์ดชาร์เตอร์ด">ธ.สแตนดาร์ดชาร์เตอร์ด</option>
							<option value="ไอซีบีซี">ธ.ไอซีบีซี</option>
							<option value="ออมสิน">ธ.ออมสิน</option>
						</select>
					</div>
					<div class="col-sm">
					
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-sm text-right">
						<label class="bmd-label-floating">
							<h5>เลขบัญชี :</h5>
						</label>
					</div>
					<div class="col-sm">
						<input type="textarea" class="form-control" name="income" id="income" value=""
							style="width: 200px; height:25px;" required pattern="[0-9]{3,}" title="กรอกเป็นตัวเลข" placeholder="Ex. 7442930761">
					</div>
					<div class="col-sm">
					
					</div>
				</div>
				<div class="row">
					<div class="col-sm text-center">
						<h5 style="color:red;">* โปรดตรวจสอบบัญชีธนาคารให้ถูกต้องก่อนยืนยัน</h5>
					</div>
				</div>

				<div class="row">
					<div class="col-sm text-center">
						<button class="btn btn-danger" style="background-color: #F60200;" href="#" id="ok"
							type="submit">ยืนยันราคาปล่อยเช่า</button>
					</div>
				</div>

				<input type="hidden" name="idCarregis" id="idCarregis" class="form-control" value="<?php echo $idc; ?>">

				<!-- <input type="hidden" class="form-control" id="type" value="CarOwner">
				<div class="fileinput fileinput-new " data-provides="fileinput">
					<div>
							<label class="bmd-label-floating">image_DriverLicense</label>
							<input type="file" name="..." />
					</div>
				</div> -->

		</div>
	</div>
</div>
</form>

<!-- <script type="text/javascript">
// ฟังก์ชั่นรับการกดคีย์ เป็นตัวเลขเท่านั้น
// ฟังก์ชั่นตรวจสอบค่าเกินกำหนด (100)

$("#Price").change(function(){ 

	var id = <?php echo $id ?>;
    var de = $("#Price").val();
   $.get("<?=base_url('Pricecar/raka/')?>"+id, 
              function (data) {
				if(de > data) 
				{
     			alert('ราคาเกินที่ทางร้านกำหนดไว้');
				$('#ok').attr('disabled',true)
  				}
				else
				{
					$.get("<?=base_url('Pricecar/raka2/')?>"+id, 
              			function (data) {
							if(de < data) 
							{
							alert('ราคาต่ำกว่าที่ทางร้านกำหนดไว้');
							$('#ok').attr('disabled',true)
							}
							else
							{
								alert('ราคานี้อยู่ในข้อเสนอร้าน');
								$('#ok').removeAttr('disabled',true)
							}
						
          				}); 
				}
                
        });
           
	}); 
//   if(de > 100 || de < 80) {
//      alert('ไม่สามารถกรอกข้อมูลเกิน 100 ได้');
//   }
//   else
//   {
//     alert('ได้ครับ');
//   }

</script> -->
<script>

$("#Price").change(function(){ 

var id = <?php echo $id ?>;
var de = $("#Price").val();
var up = $("#up").val();
var down = $("#down").val();
var pow = $("#pow").val();
// var one = de.toFixed(0);
// var two = up.toFixed(0);
// var three = down.toFixed(0);
console.log("de ="+de)
console.log("up ="+up)
console.log(down)
console.log(pow)
var kk = parseInt(de)
//(de == pow && de > up) || (de == pow  && de < down)
if((kk >= down) && (kk <= up))
{

	
}
else
{
	
	alert('ราคานี้ไม่อยู่ในข้อเสนอของทางบริษัท');
	$("#Price").val(null);
	$("#Price").focus();
	
}


	   
}); 
</script>
<script>
var idc = 0;
var id = 0;
$('#check').change(function(){
	 idc = <?php echo $idc ?>;
	 id = <?php echo $id ?>;
	var da = $('#year').val();
	var now = $('#now').val();
	var ok = now - da;
	
	
	// if(ok == 2){
		//ปัจจุบัน
		$.get("<?=base_url('Pricecar/Price1/')?>"+id+"/"+idc, 
                  function (data) {
					  console.log(data)
					console.log(ok);
                     var vat = data * 0.002; //ปัจจุบัน
					 var vat2 = data * 0.0019;	//2019
					 var vat3 = data * 0.0018;  //2018
					 var vat3 = data * 0.0017;  //2017
					 var vat3 = data * 0.0016;  //2016
					 var vat3 = data * 0.0015;  //2015
					 var vat3 = data * 0.0014;  //2014
					
                    // var vat2 = vat * 7 / 107;
                    // var vat3 = vat2.toFixed(0);
                    // var total5 = data * ngo; 
                    // var game5 =  total5.toFixed(0);
                    // var tot5 = game5.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                    // $("#total").text(tot5 + " บาท")
                    // $("#total2").val(game5)
                    // $("#totalvat").val(vat3)
                    // $("#book").removeAttr('disabled',true)
				  });

               
        
	// }else if(){
	// 	//2019
	// }else if(){
	// 	//2018
	// }else if(){
	// 	//2017
	// }else if(){
	// 	//2016
	// }else if(){
	// 	//2015
	// }else if(){
	// 	//2014
	// }
	
});
	
</script>