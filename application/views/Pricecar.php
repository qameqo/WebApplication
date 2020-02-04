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
						<input type="text" class="form-control" name="Price2" id="Price" value="<?php echo $total ?>"
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
					<div class="col-sm text-center">
						<button class="btn btn-danger" style="background-color: #F60200;" href="#"
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