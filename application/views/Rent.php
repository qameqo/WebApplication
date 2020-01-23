<div class="col-md-13 text-center"><br>
	<h1 class="h1" style="color:#000000">เช่ารถยนต์</h1>
</div>
<!-- <div class="row justify-content-center">
	<div class="col-sm-6 shadow p-3 mb-5 bg-white rounded"
		style="background-color: #FFFFFF; border-radius: 10px ; margin-left: 1em ; margin-right: 1em ;"> -->
<form class="form-signin" id="edit" name="edit" method="post" action="">
	<?php 		
			
				
			
				$query = $this->db->query('select Carregis.*, Images.Name_image, Brand.Name_Brand, Generation.Name_Gen from Carregis INNER JOIN Images on Images.idCarregis = Carregis.idCarregis INNER JOIN Brand on Brand.idBrand = Carregis.Brand INNER JOIN Generation on Generation.id_Gen = Carregis.id_Gen WHERE Images.id_image = (SELECT Images.id_image FROM Images WHERE Images.idCarregis = Carregis.idCarregis LIMIT 1) and Carregis.Status="5"');
				$qq = $query->result_array();
			?>
	<div class="row justify-content-center">
		<div class="col-sm-2 shadow p-3 mb-5 bg-white rounded"
			style="background-color: #FFFFFF; border-radius: 10px ; margin-left: 1em ; margin-right: 1em ;">
			<div class="row justify-content-center">
				<span>ค้นหารถจากยี่ห้อหรือรุ่น</span>
				<input type="text" class="form-control" id="exampleFormControlInput1" style="width:200px;"
					placeholder="ค้นหายี่ห้อหรือรุ่นรถ">
			</div>
			<br>
			<div class="row justify-content-center">
            <a class="badge badge-danger" href="<?php echo base_url('Rentdesc'); ?>" style="font-size: 17px;">เรียงราคาจากสูงไปต่ำ</a>
			</div>
            <br>
            <div class="row justify-content-center">
            <a class="badge badge-danger" href="<?php echo base_url('Rentasc'); ?>" style="font-size: 17px;">เรียงราคาจากต่ำไปสูง</a>
			</div>
		</div>
		<div class="col-sm-6 shadow p-3 mb-5 bg-white rounded"
			style="background-color: #FFFFFF; border-radius: 10px ; margin-left: 1em ; margin-right: 1em ;">
			<?php 
				foreach($qq as $data){
			?>
			<div class="row">
				<div class="col-sm shadow p-3 mb-2 bg-white rounded"
					style="background-color: #FFFFFF; border-radius: 10px ; margin-left: 1em ; margin-right: 1em ;">
					<div class="row">
						<div class="col-sm-8">
							<?php echo $data['Name_Brand'];?> <?php echo $data['Name_Gen'];?>
							<?php echo $data['Yearcar'];?>
						</div>
						<div class="col-sm-6">
							<img src="<?php echo base_url('./pic/car-gear.png');?>"
								style="width:10px; height:10px;">&nbsp;<?php echo $data['Gear'];?>
							<img src="<?php echo base_url('./pic/seat-belt.png');?>"
								style="width:10px; height:10px;">&nbsp;<?php echo $data['Seat']; ?>
							<br><span style="color: #F60200;"><?php echo $data['RentalPrice'];?></span>&nbsp;บาท/วัน
							<a class="badge badge-secondary" type="button" href="#" data-toggle="modal"
								data-target="#modal-default">เอกสารเช่ารถ</a>
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
							
							<img src="<?php echo base_url('./img/'.$data['Name_image']);?>" style="height: 50px; weight:50px;">
							<?php $idc = $data['idCarregis']; ?>
							<a class="btn btn-outline" style="background-color: #F60200; color: white; height:45px;"
								href="<?php echo site_url('Rentnext/one/'.$idc); ?>">จองรถ</a>
						</div>
					</div>
				</div>
			</div>	
			<?php } ?>
		</div>
	</div>
</form>