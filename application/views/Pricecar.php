<br> <H4 style="text-align: center;">เงื่อนไขราคาปล่อยเช่ารถยนต์</H4>
<div class="container">
	<div class="photo mt-5 mb-3" style="text-align: center;">
	</div>
	<div class="row justify-content-center">
		<div class="col-sm-8 shadow p-3 mb-5 bg-white rounded"
			style="background-color: #FFFFFF; border-radius: 10px ; margin-left: 1em ; margin-right: 1em ;">
			<form class="form-signin" id="carregister" name="carregister" method="post"
				action="<?php echo base_url();?>Pricecar/price">

				<?php 
				$this->db->select('*');
				$this->db->from('Generation');
				$this->db->join('Brand', 'Brand.idBrand = Generation.idBrand');
				$this->db->where('id_Gen');
				$query = $this->db->get();
				$qi = $query->result_array();
				?>

                <div class="row">
					<div class="col-sm text-center" >
						<label class="bmd-label-floating"><h4>ราคาปล่อยเช่ารถยนต์</h4></label>
						</div>
					</div>
				<div class="row">
					<div class="col-sm text-right">
						<label class="bmd-label-floating"><h5>ราคาปล่อยเช่ารถต่อวัน :</h5></label>
						</div>
                        <div class="col-sm">
						<?php 
							foreach($qi as $data){
						?>
						<input type="text" class="form-control" name="pricecar" value= "<?php echo $data['Price']; ?>" style="width: 200px; height:25px;">
							<?php } ?> 
						</div>
                        <div class="col-sm">
						<h5>บาท/วัน</h5>
						</div>
					</div>
					<?php 
				
				$this->db->select('*');
				$this->db->from('Brand');
				$this->db->join('Carregis', 'Carregis.Brand = Brand.idBrand');
				$this->db->where('idCarregis', $id);
				$this->db->where('id_Member', $this->session->userdata('ID'));
				$query = $this->db->get();
				$qq = $query->result_array();
				
				?>
                    <div class="row">
					<div class="col-sm">
					<?php foreach($qq as $data){
								
                                ?>
						<h5>ราคาแนะนำสำหรับ <?php echo $data['Name_Brand']; ?> <?php echo $data['Generation']; ?></h5>
					<?php  } ?>
						</div>
					</div>
                    <div class="row">
					<div class="col-sm text-center">
                        <button class="btn btn-danger" href="#" type="submit">ยืนยันราคาปล่อยเช่า</button>
						</div>
					</div>


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

