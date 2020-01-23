<div class="container" style="text-align: center;"><br><br><br><br><br>
    <div style="background-color: white; border-radius: 5px;">
        <div class="row  justify-content-center">
            <div class="col-sm-8 shadow p-3 mb-5 bg-white rounded">
                <h4 class="title">Show Detail Car Register</h4>

                <form action="<?php echo site_url('Manager_car_regis/add_status'); ?>" method="POST" class="form-horizontal">

                    <div class="table-responsive">
                        <table class="table table-bordered">

                            <tr>
                                <td width="30%"><label>รหัส</label></td>
                                <td width="70%"><?php echo $rs->idCarregis; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>ยี่ห้อ</label></td>
                                <td width="70%"><?php echo $rs->Name_Brand; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>รุ่น</label></td>
                                <td width="70%"><?php echo $rs->Name_Gen; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>ปีรถยนต์</label></td>
                                <td width="70%"><?php echo $rs->Yearcar; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>ที่นั่ง</label></td>
                                <td width="70%"><?php echo $rs->Seat; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>เชื้อเพลิง</label></td>
                                <td width="70%"><?php echo $rs->Fuel; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>ระบบเกียร์</label></td>
                                <td width="70%"><?php echo $rs->Gear; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>เลขไมล์</label></td>
                                <td width="70%"><?php echo $rs->Mileage; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>ทะเบียน</label></td>
                                <td width="70%"><?php echo $rs->License; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>ปีที่ออกทะเบียน</label></td>
                                <td width="70%"><?php echo $rs->Yearlicense; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>เลขตัวถัง</label></td>
                                <td width="70%"><?php echo $rs->Carbody; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>ราคาปล่อยเช่า</label></td>
                                <td width="70%"><?php echo $rs->RentalPrice; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>สถานะ</label></td>
                                <?php if($rs->Status == 'รออนุมัติ')
                                {
                                    echo'<td width="70%"><span class="badge badge-primary" style="font-size:13px;">';
                                    echo $rs->Status; 
                                    echo '</span></td>';
                                }
                                else if ($rs->Status == 'ผ่าน') 
                                {
                                    echo'<td width="70%"><span class="badge badge-info" style="font-size:13px;">';
                                    echo $rs->Status; 
                                    echo '</span></td>';
                                }
                                else if ($rs->Status == 'ไม่ผ่าน') 
                                {
                                    echo'<td width="70%"><span class="badge badge-default" style="font-size:13px;">';
                                    echo $rs->Status; 
                                    echo '</span></td>';
                                }
                                else if($rs->Status == 'กำลังดำเนินการ')
                                {
                                    echo'<td width="70%"><span class="badge badge-warning" style="font-size:13px;">';
                                    echo $rs->Status; 
                                    echo '</span></td>';
                                }
                                else if ($rs->Status == 'พร้อม') 
                                {
                                    echo'<td width="70%"><span class="badge badge-success" style="font-size:13px;">';
                                    echo $rs->Status; 
                                    echo '</span></td>';
                                }
                                else if($rs->Status == 'ยกเลิก')
                                {
                                    echo'<td width="70%"><span class="badge badge-danger" style="font-size:13px;">';
                                    echo $rs->Status; 
                                    echo '</span></td>';
                                } ?>
                            </tr> 

                            <?php if ($rs->Status == 'พร้อม') {
                                echo '<tr>
                                <td width="30%"><label>วันส่งรถ</label></td>
                                <td width="70%">';
                                echo $rs->Dayfirst;
                                echo '</td>
                                </tr>';
                            }
                            else if($rs->Status == 'กำลังดำเนินการ')
                            {
                                echo '<tr>
                                <td width="30%"><label>วันส่งรถ</label></td>
                                <td width="70%">';
                                echo $rs->Dayfirst;
                                echo '</td>
                                </tr>';
                            } ?> 

                            <tr>
                                <td width="30%"><label>สมาชิก</label></td>
                                <td width="70%"><?php echo $rs->FName; ?>&nbsp;<?php echo $rs->LName; ?></td>
                            </tr>

                            <?php 
                            
                            
                            
                            if($rs->Status == 'ไม่ผ่าน')
                            {
                                $query = $this->db->query('SELECT * FROM Not_passed, Carregis WHERE Not_passed.idCarregis = Carregis.idCarregis AND Not_passed.idCarregis = '.$rs->idCarregis);

                                $qq = $query->result_array();

                                foreach ($qq as $data) {

                                    echo '<tr>
                                    <td width="30%"><label>หมายเหตุ</label></td>
                                    <td width="70%">';
                                    echo $data['Name_not'];
                                    echo '</td></tr>';
                                }
                            }
                            ?>

                            <?php 

                            $query = $this->db->query("SELECT Images.Name_image FROM Carregis, Images WHERE Carregis.idCarregis = Images.idCarregis AND Carregis.idCarregis = $rs->idCarregis;");

                            foreach ($query->result_array() as $data ) { ?>

                            <tr>
                                <td width="30%"><label>รูปภาพรถยนต์</label></td>
                                <td width="70%">
                              
                                <img src="<?php echo base_url('./img/'.$data['Name_image']); ?>" style="height: 50px; weight:50px;">
                                
                                </td>
                            </tr>

                            <?php 
                            
                            }

                            ?>

                            <?php 

                            $query = $this->db->query("SELECT Images2.Name FROM Carregis, Images2 WHERE Carregis.idCarregis = Images2.idCarregis AND Carregis.idCarregis = $rs->idCarregis;");

                            foreach ($query->result_array() as $data ) { ?>

                            <tr>
                                <td width="30%"><label>รูปภาพเอกสารรถยนต์</label></td>
                                <td width="70%">
                            
                                <img src="<?php echo base_url('./img2/'.$data['Name']); ?>" style="height: 50px; weight:50px;">
                                
                                </td>
                            </tr>

                            <?php 

                            }

                            ?>
                        </table>
                    </div>

                    <input type="hidden" name="idCarregis" id="idCarregis" class="form-control" value="<?php echo $rs->idCarregis; ?>">

                    <?php 
						
                    // $this->db->where( 'idCarregis',$idc);
                    
                    ?>

                    <?php if ($rs->Status == 'พร้อม') {
                        echo '<input type="hidden" name="Status" id="Status" value="ยกเลิก" class="form-control" required>';
                        echo '<button type="submit" class="btn btn-danger mt-5" style="font-size:20px;" onclick="return confirm("คุณต้องการยกเลิกหรือไม่ ?");">ยกเลิกการลงทะเบียน</button>';
                    }else if($rs->Status == 'รออนุมัติ'){
                        echo '<input type="submit" class="btn btn-success mt-5 mr-5" name="Status" id="Status" value="ผ่าน" style="font-size:20px;" required>';
                        echo '<input type="submit" class="btn btn-danger mt-5 mr-5" name="Status" id="Status" value="ไม่ผ่าน" style="font-size:20px;" required>';
                        // echo '<button class="btn btn-danger mt-5 mr-5" type="button" data-toggle="modal" data-target="#StatusModal" style="font-size:20px;">ไม่ผ่าน</button>';
                                           
                    }?>


                </form>
            </div>
        </div>
    </div>
</div>