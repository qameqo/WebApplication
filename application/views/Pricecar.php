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
					<div class="col-sm text-center">
						<label class="bmd-label-floating">
							<h4>ราคาปล่อยเช่ารถยนต์</h4>
						</label>
						<?php foreach($qq as $data){
								
                                ?>
						<h5><?php echo $data['Name_Brand']; ?> <?php echo $data['Name_Gen']; ?></h5>
						<?php  } ?>
					</div>
				</div>
				<?php  
							foreach($qq as $data){
								$ei = $data['Price'];
								$eii = 0.25;
								$eiii = 0.15;
								$e = 10;
								$ee = 1000;
								$total = $ei * $eii * $e / $ee;
								$total2 = $ei * $eiii * $e / $ee;
						?>
				<div class="row justify-content-center">
				<span style=""> เรทราคาปล่อยเช่าอยู่ที่ <?php echo number_format($total2,0);?> ถึง <?php echo number_format($total,0);?> บาท/วัน</span>
				</div>
							<?php } ?>
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
								$eii = 0.2;
								$e = 10;
								$ee = 1000;
								$total = $ei * $eii * $e / $ee;
						?>
						<input type="text" class="form-control" name="Price2" id="Price2" value="<?php echo number_format($total,0) ?>"
							style="width: 200px; height:25px;" disabled>
						<?php } ?>
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
							style="width: 200px; height:25px;" required placeholder="Ex. 7442930761">
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

<script type="text/javascript">
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

</script>