<div class="container" style="text-align: center;"><br><br><br><br><br>
    <div style="background-color: white; border-radius: 5px;">
        <div class="row  justify-content-center">
            <div class="col-sm-8 shadow p-3 mb-5 bg-white rounded">
                <h4 class="title">Show Detail Car Rental</h4>


                    <div class="table-responsive">
                        <table class="table table-bordered">

                            <tr>
                                <td width="30%"><label>รหัส</label></td>
                                <td width="70%"><?php echo $rs->idRental; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>วันที่จอง</label></td>
                                <td width="70%"><?php echo $rs->Datebooking; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>ชื่อสมาชิก</label></td>
                                <td width="70%"><?php echo $rs->FName; ?>&nbsp;<?php echo $rs->LName; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>วันที่เริ่มเช่า</label></td>
                                <td width="70%"><?php echo $rs->StartDate; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>วันที่คืน</label></td>
                                <td width="70%"><?php echo $rs->endDate; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>ราคาทั้งหมด</label></td>
                                <td width="70%"><?php echo $rs->totalprice; ?></td>
                            </tr>

                            <tr>
                                <td width="30%"><label>สถานะ</label></td>
                                <?php if($rs->idStatus == '1')
                                {
                                    echo'<td width="70%"><span class="badge badge-primary" style="font-size:13px;">';
                                    echo $rs->Name_Status; 
                                    echo '</span></td>';
                                }
                                else if ($rs->idStatus == '2') 
                                {
                                    echo'<td width="70%"><span class="badge badge-info" style="font-size:13px;">';
                                    echo $rs->Name_Status; 
                                    echo '</span></td>';
                                }
                                else if ($rs->idStatus == '3') 
                                {
                                    echo'<td width="70%"><span class="badge badge-default" style="font-size:13px;">';
                                    echo $rs->Name_Status; 
                                    echo '</span></td>';
                                }
                                else if($rs->idStatus == '4')
                                {
                                    echo'<td width="70%"><span class="badge badge-warning" style="font-size:13px;">';
                                    echo $rs->Name_Status; 
                                    echo '</span></td>';
                                }
                                else if ($rs->idStatus == '5') 
                                {
                                    echo'<td width="70%"><span class="badge badge-success" style="font-size:13px;">';
                                    echo $rs->Name_Status; 
                                    echo '</span></td>';
                                }
                                else if($rs->idStatus == '6')
                                {
                                    echo'<td width="70%"><span class="badge badge-danger" style="font-size:13px;">';
                                    echo $rs->Name_Status; 
                                    echo '</span></td>';
                                }
                                else if($rs->idStatus == '7')
                                {
                                    echo'<td width="70%"><span class="badge badge-danger" style="font-size:13px;">';
                                    echo $rs->Name_Status; 
                                    echo '</span></td>';
                                }
                                else if($rs->idStatus == '8')
                                {
                                    echo'<td width="70%"><span class="badge badge-danger" style="font-size:13px;">';
                                    echo $rs->Name_Status; 
                                    echo '</span></td>';
                                }
                                else if($rs->idStatus == '9')
                                {
                                    echo'<td width="70%"><span class="badge badge-warning" style="font-size:13px;">';
                                    echo $rs->Name_Status; 
                                    echo '</span></td>';
                                } ?>
                            </tr> 

                            <?php 

                            $query = $this->db->query("SELECT Images3.Name_image3 FROM Rental, Images3 WHERE Rental.idRental = Images3.idrent AND Rental.idRental = $rs->idRental");

                            foreach ($query->result_array() as $data ) { ?>

                            <tr>
                                <td width="30%"><label>รูปภาพหลักฐาน</label></td>
                                <td width="70%">
                              
                                <img src="<?php echo base_url('./img3/'.$data['Name_image3']); ?>" style="height: 50px; weight:50px;">
                                
                                </td>
                            </tr>

                            <?php 
                            
                            }

                            ?>
                            
                        </table>
                    </div>

                    <?php if ($rs->idStatus == '5') {
                        echo '<input type="hidden" name="idStatus" id="idStatus" value="6" class="form-control" required>';
                        echo '<button type="submit" class="btn btn-danger mt-5" style="font-size:20px;" onclick="return confirm("คุณต้องการยกเลิกหรือไม่ ?");">ยกเลิกการลงทะเบียน</button>';
                    }else if($rs->idStatus == '1'){
                        
                        $startdate=strtotime("l");

                        echo '<form action="'; 
                        echo site_url('Manager_car_regis/add_status'); 
                        echo '" method="POST" class="form-horizontal">';
                        echo '<input type="hidden" name="Dayfirst" id="Dayfirst" class="form-control" value="';
                        echo date("Y-m-d", $startdate);
                        echo '">';
                        echo '<input type="hidden" name="idCarregis" id="idCarregis" class="form-control" value="';
                        echo $rs->idCarregis; 
                        echo '">';
                        echo '<input type="hidden" class="btn btn-success mt-5 mr-5" name="idStatus" id="idStatus" value="2" style="font-size:20px;" required>';
                        echo '<button class="btn btn-success mt-5 mr-5" type="submit" style="font-size:20px;">อนุมัติ</button>';
                        echo '</form>';

                        echo '<form action="'; 
                        echo site_url('Manager_car_regis/add_status/'.$rs->idCarregis); 
                        echo '" method="POST" class="form-horizontal">';
                        echo '<input type="hidden" name="idCarregis" id="idCarregis" class="form-control" value="';
                        echo $rs->idCarregis; 
                        echo '">';
                        echo '<input type="hidden" class="btn btn-danger mt-5 mr-5" name="idStatus" id="idStatus" value="3" style="font-size:20px;" required>';
                        echo '<button class="btn btn-danger mt-5 mr-5" type="submit" style="font-size:20px;">ไม่อนุมัติ</button>';
                        echo '</form>';
                                           
                    }?>
            </div>
        </div>
    </div>
</div>