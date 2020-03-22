<div class="container" style="text-align: center;"><br><br><br><br><br>
    <div style="background-color: white; border-radius: 5px;">
        <div class="row  justify-content-center">
            <div class="col-sm-8 shadow p-3 mb-5 bg-white rounded">
                <h4 class="title">รายละเอียด</h4>

                    <div class="table-responsive">
                        <table class="table table-bordered">

                            <tr>
                                <td width="30%"><label>รหัส</label></td>
                                <td width="70%"><?php echo $rs[0]->id_Problem; ?></td>
                            </tr>

                            <tr>
                                <td width="30%"><label>รายละเอียดจากลูกค้า</label></td>
                                <td width="70%"><?php echo $rs[0]->Detail; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>วันที่ & เวลาแจ้ง</label></td>
                                <td width="70%"><?php echo $rs[0]->Date; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>รายละเอียดจากช่าง</label></td>
                                <td width="70%"><?php echo $rs[0]->Detail_2; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>วันที่ & เวลาบันทึก</label></td>
                                <td width="70%"><?php echo $rs[0]->Date_2; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>ตำแหน่ง</label></td>
                                <td width="70%"><?php echo $rs[0]->Lat; ?>, <?php echo $rs[0]->Lng; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>รหัสเจ้าหน้าที่</label></td>
                                <td width="70%"><?php echo $rs[0]->id_employee; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>รหัสการเช่า</label></td>
                                <td width="70%"><?php echo $rs[0]->idRental; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>ประเภท</label></td>
                                <td width="70%"><?php echo $rs[0]->Name_Type_problem; ?></td>
                            </tr>
                            <tr>
                                <?php 
                        
                                $this->db->where('id_Problem', $rs[0]->id_Problem);
                                $query = $this->db->get('Images4');
                                $qi = $query->result_array();
                                if(!empty($qi))
                                {
                                    
                                }
                                foreach($qi as $data){
								?>
                                    <td width="30%"><label>รูปภาพประกัน</label></td>
                                    <td width="70%"><img src="<?php echo base_url('./img4/'.$data['Name_image4']);?>"
 											style="width: 50px; height: 50px;" /></td>
                                <?php } ?>
                            </tr>
                                                        
                        </table>
                    </div>    

            </div>
        </div>
    </div>
</div>