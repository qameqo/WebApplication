<style>.fileUpload {
    position: relative;
    overflow: hidden;
}
.fileUpload input.upload {
    position: absolute;
    top: 0;
    right: 0;
    margin: 0;
    padding: 0;
    font-size: 20px;
    cursor: pointer;
    opacity: 0;
    filter: alpha(opacity=0);
}</style>
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
<form class="form-signin" id="edit" name="edit" method="POST" action="<?php echo base_url('Rentnext/insup/'.$idc);?>">
	<div class="row justify-content-center">
      
		<div class="col-sm-5 shadow p-3 mb-5 bg-white rounded"
			style="background-color: #FFFFFF; border-radius: 10px ; margin-left: 1em ; margin-right: 1em ;">
            <H4 style="text-align:center;">รูปภาพเกี่ยวกับรถ</H4>
            <br>
            <?php 
      $this->db->select('*');
      $this->db->from('Images');
      $this->db->where('idCarregis',$idc);
      $query = $this->db->get();
      $q2 = $query->result_array();
    ?>
            <?php foreach($q2 as $data){ ?>
			<img src="<?php echo base_url('./img/'.$data['Name_image']);?>" style="height:80px; weight:80px;">
            <?php } ?>


            <?php 
            $this->db->select('*');
            $this->db->from('Carregis');
            $this->db->where('idCarregis', $idc);
            $query = $this->db->get();
            $q1 = $query->result_array();
             ?>
		</div>
		<div class="col-sm-3 shadow p-3 mb-5 bg-white rounded"
			style="background-color: #FFFFFF; border-radius: 10px ; margin-left: 1em ; margin-right: 1em ;">
            <div class="row">
                <div class="col-sm">
                <p style="text-align:Left;">วันเริ่มเช่า</p>
                </div>
                <div class="col-sm text-right">
                <input type="text" name="start" id="date" value="" style="width:140;">
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                <p style="text-align:Left;">วันส่งคืน</p>
                </div>
                <div class="col-sm text-right">
                <input type="text" name="end" id="date" value="" style="width:140;">
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                <p style="text-align:Left;">ค่าเช่ารถ/วัน</p>
                </div>
                <div class="col-sm">
                <?php foreach($q1 as $data){ ?>
            <p style="text-align:right;"><?php echo number_format($data['RentalPrice']);?>&nbsp;บาท</p>
            <?Php } ?>
                </div>
            </div>
            <div class="row">
                    <div class="col-sm">
                    <p style="text-align:Left;">ประกันภัย</p>
                    </div>
                    <div class="col-sm">
                    <?php foreach($q1 as $data){
                        $ga = $data['RentalPrice'];
                        $gam = 25;
                        $game = 100;
                        $total = $ga * $gam / $game;
                        ?>
                    <p style="text-align:right;"><?php  echo number_format($total);?>&nbsp;บาท</p>
                    <?php } ?>
                    </div>
            </div>
            <div class="row">
                    <div class="col-sm">
                    <br>
                    <p style="text-align:Left; color:red;">รวมทั้งหมด</p>
                    </div>
                    <div class="col-sm">
                    <?php foreach($q1 as $data){
                        $ga = $data['RentalPrice'];
                        $gam = 25;
                        $game = 100;
                        $total = $ga * $gam / $game;
                        $total2 = $ga + $total;
                        ?>
                    <p style="text-align:right; color:red; font-size:35px;"><?php  echo number_format($total2);?>&nbsp;บาท</p>
                    <?php } ?>
                    </div>
            </div>
            <div class="row justify-content-center">
            <button type="submit" class="btn btn-danger" style="background-color: #F60200; color: white; width:370px;">จอง</button>
            </div>
	</div>
    </div>
    <div class="row justify-content-center">
    <div class="col-sm-5 shadow p-3 mb-5 bg-white rounded"
			style="background-color: #FFFFFF; border-radius: 10px ; margin-left: 1em ; margin-right: 1em ;">
            <?php 
            $this->db->select('*');
            $this->db->from('Carregis');
            $this->db->join('Brand', 'Carregis.Brand = Brand.idBrand');
            $this->db->join('Generation', 'Carregis.id_Gen = Generation.id_Gen');
            $this->db->where('idCarregis',$idc);
            $query = $this->db->get();
            $qq = $query->result_array();
             ?>
            <div class="row">
                <div class="col-sm">
                <H4 style="text-align:center;">ข้อมูลเกี่ยวกับรถ</H4>
                </div>
                </div>
                <?php foreach($qq as $data){?>
                <div class="row">
                    <div class="col-sm">
                        <div class="row">
                        <div class="col-sm">
                        <p>ยี่ห้อ</p>
                        </div>
                        <div class="col-sm">
                        <?php echo $data['Name_Brand'];?>
                        </div>
                    </div>
                    </div>
                    
                    <div class="col-sm">
                    <div class="row">
                        <div class="col-sm">
                        <p>รุ่น</p>
                        </div>
                        <div class="col-sm">
                        <?php echo $data['Name_Gen'];?>
                        </div>
                    </div>
                    </div>
            </div>
            <div class="row">
                    <div class="col-sm">
                        <div class="row">
                        <div class="col-sm">
                        <p>ปี</p>
                        </div>
                        <div class="col-sm">
                        <?php echo $data['Yearcar'];?>
                        </div>
                    </div>
                    </div>
                    
                    <div class="col-sm">
                    <div class="row">
                        <div class="col-sm">
                        <p>เลขไมล์ (กิโลเมตร)</p>
                        </div>
                        <div class="col-sm">
                        <?php echo $data['Mileage'];?>
                        </div>
                    </div>
                    </div>
            </div>
            <div class="row">
                    <div class="col-sm">
                        <div class="row">
                        <div class="col-sm">
                        <p>ระบบเกียร์</p>
                        </div>
                        <div class="col-sm">
                        <?php echo $data['Gear'];?>
                        </div>
                    </div>
                    </div>
                    
                    <div class="col-sm">
                    <div class="row">
                        <div class="col-sm">
                        <p>สี</p>
                        </div>
                        <div class="col-sm">
                        <?php echo $data['Color'];?>
                        </div>
                    </div>
                    </div>
            </div>
            <div class="row">
                    <div class="col-sm">
                        <div class="row">
                        <div class="col-sm">
                        <p>จำนวนที่นั่ง</p>
                        </div>
                        <div class="col-sm">
                        <?php echo $data['Seat'];?>
                        </div>
                    </div>
                    </div>
                    
                    <div class="col-sm">
                    <div class="row">
                        <div class="col-sm">
                        <p>ชนิดเชื้อเพลิง</p>
                        </div>
                        <div class="col-sm">
                        <?php echo $data['Fuel'];?>
                        </div>
                    </div>
                    </div>
            </div>
                <?php } ?>
	</div>
            <div class="col-sm-3 shadow p-3 mb-5 bg-white rounded"
			style="background-color: #FFFFFF; border-radius: 10px ; margin-left: 1em ; margin-right: 1em ;">
            <h4 style="color:#000000" class="text-center">อัปโหลดรูปใบขับขี่</h4>
			<div class="container mb-5">
                        <?php
						
						 $this->db->where( 'idrent');
						 $query = $this->db->get('Images3', 1);
						 $qi = $query->result_array();
						?>
							<div class="table-responsive">
								<table id="employee_data" class="table table-striped table-bordered text-center">
									<thead>
										<tr>
											<th data-column-id="Name_image">รูปภาพ</th>
											<th data-column-id="Action">ลบ</th>
										</tr>
									</thead>
									<tbody>
                                     <?php if(!empty($qi))
									{
										
									}else 
									 ?>
										<?php foreach($qi as $data){
											
							 	    ?>
									<tr>
											<td><img src="<?php echo base_url('./img3/'.$data['Name_img']);?>"
													style="width: 50px; height: 50px;" required/></td>

											<td><a href="<?php echo site_url('Payment/del/'.$data['idimg3'].'/'.$idr);?>"
													onclick="return confirm('คุณต้องการลบหรือไม่ ?');"
													class="btn btn-danger btn-sm">ลบ</a></td>
										</tr>
                                        <?php 
							} ?>
									</tbody>
								</table>

							</div>
							<div class="row">
								<div class="col-sm text-center">
									<h6 style="color: red;">* รูปใบขับขี่ 1 รูป</h6>
								</div>
							</div>
							<div class="row">
								<div class="col-sm text-center">
									กรุณาอัปโหลดรูปภาพตามจำนวนที่ระบุ
								</div>
							</div>
							<br>
							<div class="row">
							<div class="col-sm text-Right">
								<div class="fileUpload btn btn-lg" style="background-color: #FFC125">
								<span style="color: white;">+ เพิ่มรูป</span>
										<label for="file"><strong></strong><span class="box__dragndrop"></label>
										<input class="upload" type="file" name="file" id="piccar1"/>
								</div>
							</div>
							<div class="col-sm text-left">
								<div class="box__input">
									<button class="btn btn-primary btn-lg" type="submit"><span style="color: white;">อัปโหลด</span></button>
								</div>
							</div>
							</div>
							<!-- <input type="hidden" value="<?php echo $id; ?>" name="idCarregis" id="idCarregis" /> -->

							
							<br>
							<div class="col-sm text-center">		
			</div>
		</div>
    </div>
</form>