<div class="container" style="text-align: center;"><br>
    <div style="background-color: white; border-radius: 5px;">
        <div class="row  justify-content-center">
            <div class="col-sm-8 shadow p-3 mb-5 bg-white rounded">
                <h4 class="title">รายละเอียดรถยนต์</h4>

                <form action="<?php echo site_url('Emp_car/add_status_2'); ?>" method="POST" class="form-horizontal">

                    <div class="table-responsive">
                        <table class="table table-bordered">

                            <tr>
                                <td width="30%"><label>รหัส</label></td>
                                <td width="70%"><?php //echo $data['idCarregis']; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>ยี่ห้อ</label></td>
                                <td width="70%"><?php //echo $rs->Name_Brand; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>รุ่น</label></td>
                                <td width="70%"><?php //echo $rs->Name_Gen; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>ปีรถยนต์</label></td>
                                <td width="70%"><?php //echo $rs->Yearcar; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>ที่นั่ง</label></td>
                                <td width="70%"><?php //echo $rs->Seat; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>เชื้อเพลิง</label></td>
                                <td width="70%"><?php //echo $rs->Fuel; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>ระบบเกียร์</label></td>
                                <td width="70%"><?php //echo $rs->Gear; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>เลขไมล์</label></td>
                                <td width="70%"><?php //echo $rs->Mileage; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>ทะเบียน</label></td>
                                <td width="70%"><?php //echo $rs->License; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>ปีที่ออกทะเบียน</label></td>
                                <td width="70%"><?php //echo $rs->Yearlicense; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>เลขตัวถัง</label></td>
                                <td width="70%"><?php //echo $rs->Carbody; ?></td>
                            </tr>
                            <!-- <tr>
                                <td width="30%"><label>สถานะ</label></td>
                                <?php if($rs->Status == 'รออนุมัติ')
                                {
                                    echo'<td width="70%"><span class="badge badge-primary" style="font-size:13px;">';
                                    //echo $rs->Status; 
                                    echo '</span></td>';
                                }
                                else if ($rs->Status == 'ผ่าน') 
                                {
                                    echo'<td width="70%"><span class="badge badge-info" style="font-size:13px;">';
                                    // echo $rs->Status; 
                                    echo '</span></td>';
                                }
                                else if ($rs->Status == 'ไม่ผ่าน') 
                                {
                                    echo'<td width="70%"><span class="badge badge-default" style="font-size:13px;">';
                                    // echo $rs->Status; 
                                    echo '</span></td>';
                                }
                                else if($rs->Status == 'กำลังดำเนินการ')
                                {
                                    echo'<td width="70%"><span class="badge badge-warning" style="font-size:13px;">';
                                    // echo $rs->Status; 
                                    echo '</span></td>';
                                }
                                else if ($rs->Status == 'พร้อม') 
                                {
                                    echo'<td width="70%"><span class="badge badge-success" style="font-size:13px;">';
                                    // echo $rs->Status; 
                                    echo '</span></td>';
                                }
                                else if($rs->Status == 'ยกเลิก')
                                {
                                    echo'<td width="70%"><span class="badge badge-danger" style="font-size:13px;">';
                                    // echo $rs->Status; 
                                    echo '</span></td>';
                                } ?>
                            </tr>  -->
                            <tr>
                                <td width="30%"><label>รหัสพนักงาน</label></td>
                                <td width="70%"><?php //echo $rs->id_Employee; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>รหัสสมาชิก</label></td>
                                <td width="70%"><?php //echo $rs->id_Member; ?></td>
                            </tr>

                            <?php 

                            // $query = $this->db->query("SELECT Images.Name_image FROM Carregis, Images WHERE Carregis.idCarregis = Images.idCarregis AND Carregis.idCarregis = $rs->idCarregis;");

                            // foreach ($query->result_array() as $data ) { ?>

                            <tr>
                                <td width="30%"><label>รูปภาพ</label></td>
                                <td width="70%">
                                
                                <img src="<?php //echo base_url('./pic/'.$data['Name_image']); ?>" style="height: 50px; weight:50px;">
                                
                                </td>
                            </tr>

                            <?php 
                            
                            // }

                            ?>
                        </table>
                    </div>

                    <input type="hidden" name="idCarregis" id="idCarregis" class="form-control" value="<?php// echo $rs->idCarregis; ?>">

                    <?php //if ($rs->Status == 'ผ่าน') {
                        echo '<input type="hidden" name="Status" id="Status" value="พร้อม" class="form-control" required>';
                        echo '<button type="submit" class="btn btn-warning mt-5" style="font-size:20px;" onclick="return confirm("คุณต้องการยืนยันหรือไม่ ?");">ยืนยันการรถยนต์</button>';
                    //}else if($rs->Status == ''){
                        echo '<input type="submit" name="Status" id="Status" value="ผ่าน" class="btn btn-success mt-5 mr-5" style="font-size:20px;" required>';
                        // echo '<input type="submit" name="Status" id="Status" value="ไม่ผ่าน" class="btn btn-danger mt-5" style="font-size:20px;" required>';
                        // echo '<button type="submit" class="btn btn-success mt-5" style="font-size:20px;" onclick="return confirm("คุณต้องการยืนยันหรือไม่ ?");">ผ่าน</button>';
                    //}?>


                </form>
            </div>
        </div>
    </div>
</div>