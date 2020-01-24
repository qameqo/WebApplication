<div class="col-md-13 text-center"><br>
	<h4 class="h4" style="color:#000000">กำหนดวันส่งรถ</h4>
    <form method ="post" action="<?php echo base_url('Datecar/upd/'.$idc);?>">
    <div class="row justify-content-center">
		<div class="col-sm-5 shadow p-3 mb-5 bg-white rounded">
            <?php 
             $this->db->select('*');
             $this->db->from('Carregis');
             $this->db->join('Brand', 'Carregis.Brand = Brand.idBrand');
             $this->db->join('Generation', 'Carregis.id_Gen = Generation.id_Gen');
             $this->db->where('idCarregis', $idc);
             $query = $this->db->get();
             $qi = $query->result_array();
            ?>

            <?php foreach($qi as $data){ ?>
            <div class="row">
                <div class="col-sm">
            <p><?php echo $data['Name_Brand'];?>&nbsp;&nbsp;&nbsp;<?php echo $data['Name_Gen'];?>&nbsp;&nbsp;&nbsp;
            <?php echo $data['License'];?></P>
            <span style="color:red;">* กรุณากำหนดวันส่งรถไม่เกิน 3 วัน</span>
                </div>
                <div class="col-sm">
                <input type="text" name="date" value="" id="date" style="width:150;">
                <button type="submit" class="btn btn-danger" style="background-color: #F60200;">ยืนยัน</button>
                </div>
            </div>
            <?php } ?>
<div>
</div>
</div>
</div>
</form>
