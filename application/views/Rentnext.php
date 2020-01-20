<?php 
      $this->db->select('*');
     $this->db->from('Carregis');
     $this->db->join('Brand', 'Carregis.Brand = Brand.idBrand');
     $this->db->join('Generation', 'Carregis.id_Gen = Generation.id_Gen');
     $this->db->join('Member', 'Carregis.id_Member = Member.id_Member');
     $this->db->where('idCarregis',$idc);
     $query = $this->db->get();
     $qq = $query->result_array();
    ?>
    <div class="col-md-13 text-center"><br>
    <?php foreach($qq as $data){ ?>
	<h4 style="color:#000000"><?php echo $data['Name_Brand'];?>&nbsp;<?php echo $data['Name_Gen'];?>&nbsp;<?php echo $data['Yearcar'];?></h4>
    <?php } ?>
</div>
<form class="form-signin" id="edit" name="edit" method="post" action="">
	<div class="row justify-content-center">
      
		<div class="col-sm-5 shadow p-3 mb-5 bg-white rounded"
			style="background-color: #FFFFFF; border-radius: 10px ; margin-left: 1em ; margin-right: 1em ;">
            <H4 style="text-align:center;">รูปภาพเกี่ยวกับรถคันนี้</H4>
            <br>
            <?php 
      $this->db->select('*');
      $this->db->from('Images');
      $this->db->where('idCarregis',$idc);
      $query = $this->db->get();
      $q2 = $query->result_array();
    ?>
            <?php foreach($q2 as $data){ ?>
			<img src="<?php echo base_url('./pic/'.$data['Name_image']);?>" style="height:80px; weight:80px;">
            <?php } ?>
		</div>
		<div class="col-sm-3 shadow p-3 mb-5 bg-white rounded"
			style="background-color: #FFFFFF; border-radius: 10px ; margin-left: 1em ; margin-right: 1em ;">
	</div>
</form>