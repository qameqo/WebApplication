
<div class="col-md-13 text-center"><br>
	<h1 class="h1" style="color:#000000">เช่ารถยนต์</h1>
</div>
<div class="row justify-content-center">
	<div class="col-sm-6 shadow p-3 mb-5 bg-white rounded"
		style="background-color: #FFFFFF; border-radius: 10px ; margin-left: 1em ; margin-right: 1em ;">
<form class="form-signin" id="edit" name="edit" method="post"action="">
			<?php 
				$this->db->select('*');
				$this->db->from('Carregis');
				$this->db->join('Brand', 'Carregis.Brand = Brand.idBrand');
				$this->db->join('Generation', 'Carregis.id_Gen = Generation.id_Gen');
				$this->db->where('Status', "พร้อม");
				$query = $this->db->get();
				$qq = $query->result_array();
			?>
            
			<?php 
				foreach($qq as $data){
					
			?>
			<div class="row justify-content-end">
			<div class="col-sm-8 shadow p-3 mb-2 bg-white rounded"
		style="background-color: #FFFFFF; border-radius: 10px ; margin-left: 1em ; margin-right: 1em ;">
			<div class="row">
			<div class="col-sm-8">
			<?php echo $data['Name_Brand'];?> <?php echo $data['Name_Gen'];?> <?php echo $data['Yearcar'];?>
			</div>
			<div class="col-sm-6">
			<img src="<?php echo base_url('./pic/car-gear.png');?>" style="width:10px; height:10px;">&nbsp;<?php echo $data['Gear'];?>
			<img src="<?php echo base_url('./pic/seat-belt.png');?>" style="width:10px; height:10px;">&nbsp;<?php echo $data['Seat']; ?>
			<br><span style = "color: #F60200;"><?php echo $data['RentalPrice'];?></span>&nbsp;บาท/วัน
			<a class="badge badge-secondary" href="#">เอกสารเช่ารถ</a>
			</div>
			<div  class="col-sm-6 text-right">
			<a class="btn btn-outline" style="background-color: #F60200; color: white; height:45px;" href="#">จองรถ</a>
			</div>
			</div>
			</div>
			</div>
           
				<?php } ?>
</div>
</div>
</form>
