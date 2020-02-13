<div class="col-md-13 text-center"><br>
	<h1 class="h1" style="color:#000000">เช่ารถยนต์</h1>
</div>
<!-- <div class="row justify-content-center">
	<div class="col-sm-6 shadow p-3 mb-5 bg-white rounded"
		style="background-color: #FFFFFF; border-radius: 10px ; margin-left: 1em ; margin-right: 1em ;"> -->
<form class="form-signin" id="edit" name="edit" method="post" action="">
	<?php 		
			
				
			
				$query = $this->db->query('select Carregis.*, Images.Name_image, Brand.Name_Brand, Generation.Name_Gen, Seat.Number_Seat from Carregis INNER JOIN Images on Images.idCarregis = Carregis.idCarregis INNER JOIN Brand on Brand.idBrand = Carregis.idBrand INNER JOIN Generation on Generation.id_Gen = Carregis.id_Gen INNER JOIN Seat on Seat.id_Seat = Carregis.id_Seat WHERE Images.id_image = (SELECT Images.id_image FROM Images WHERE Images.idCarregis = Carregis.idCarregis LIMIT 1) and Carregis.id_Status="5"');
				$qq = $query->result_array();
			?>
	
	
	 <div class="row justify-content-center" >
	<!--	<div class="col-sm-2 shadow p-3 mb-5 bg-white rounded"
			style="background-color: #FFFFFF; border-radius: 10px ; margin-left: 1em ; margin-right: 1em ;">
			<div class="row justify-content-center"> -->
				<!-- <span>ค้นหารถจากยี่ห้อหรือรุ่น</span>
				<input type="text" class="form-control" id="exampleFormControlInput1" style="width:200px;"
					placeholder="ค้นหายี่ห้อหรือรุ่นรถ"> -->
			<!-- </div>
			<br>
			<div class="row justify-content-center">
            <a class="badge badge-danger" href="<?php echo base_url('Rentdesc'); ?>" style="font-size: 17px;">เรียงราคาจากสูงไปต่ำ</a>
			</div>
            <br>
            <div class="row justify-content-center">
            <a class="badge badge-danger" href="<?php echo base_url('Rentasc'); ?>" style="font-size: 17px;">เรียงราคาจากต่ำไปสูง</a>
			</div>
		</div> -->
		<div class="col-sm-6 shadow p-3 mb-5 bg-white rounded"
			style="background-color: #FFFFFF; border-radius: 10px ; margin-left: 1em ; margin-right: 1em ;">
			
			<div class="row">
			<div class="col-sm text-center">
					<H5>เลือกวันที่ต้องการเช่ารถ</H5>
			</div>
			</div>
			<div class="row">
			<div class="col-sm text-right">
					<input type="text" id="startdateee" name="startdateee" style="width:120px; text-align:center;" value="">
			</div>
			<div class="col-sm text-left">
					<input type="text" id="enddateee" name="enddateee" style="width:120px; text-align:center;" value="">
			</div>
			</div>
			<div class="row">
			<div class="col-sm text-center">
					<H6 style="color:red;">ระยะเวลาการเช่าได้ไม่เกิน 5 วัน</H6>
					
					<p id="gko"></p>
					
			</div>
			</div>
			<br>
		
			<div id="booking">
				
			</div>
</form>
<script>
    var start = 0;
    var end = 0;
    $(document).ready(function () {
        $('#startdateee').change(function () {
             start = $("#startdateee").val()
            if (start != '') {
                $('#enddateee').val(null)
   
            } else {
              
            }
        });
       
    });
</script>