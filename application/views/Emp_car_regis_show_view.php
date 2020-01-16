<div class="container" style="text-align: center;"><br><br><br><br><br>
    <div style="background-color: white; border-radius: 5px;">
        <div class="row  justify-content-center">
            <div class="col-sm-8 shadow p-3 mb-5 bg-white rounded">
                <h4 class="title">Show Detail Car Register</h4>

                <form action="<?php echo site_url('Manager_car_regis/add_status'); ?>" method="POST" class="form-horizontal">

                    <div class="table-responsive">
                        <table class="table table-bordered">

                            <tr>
                                <td width="30%"><label>ID</label></td>
                                <td width="70%"><?php echo $rs->idCarregis; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>Brand</label></td>
                                <td width="70%"><?php echo $rs->Brand; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>Generation</label></td>
                                <td width="70%"><?php echo $rs->Generation; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>Yearcar</label></td>
                                <td width="70%"><?php echo $rs->Yearcar; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>Seat</label></td>
                                <td width="70%"><?php echo $rs->Seat; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>Fuel</label></td>
                                <td width="70%"><?php echo $rs->Fuel; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>Gear</label></td>
                                <td width="70%"><?php echo $rs->Gear; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>Mileage</label></td>
                                <td width="70%"><?php echo $rs->Mileage; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>License</label></td>
                                <td width="70%"><?php echo $rs->License; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>Yearlicense</label></td>
                                <td width="70%"><?php echo $rs->Yearlicense; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>Carbody</label></td>
                                <td width="70%"><?php echo $rs->Carbody; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>Status</label></td>
                                <td width="70%"><?php echo $rs->Status; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>id_Employee</label></td>
                                <td width="70%"><?php echo $rs->id_Employee; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>id_Member</label></td>
                                <td width="70%"><?php echo $rs->id_Member; ?></td>
                            </tr>

                            <?php 

                            $query = $this->db->query("SELECT Images.Name_image FROM Carregis, Images WHERE Carregis.idCarregis = Images.idCarregis AND Carregis.idCarregis = $rs->idCarregis;");

                            foreach ($query->result_array() as $data ) { ?>

                            <tr>
                                <td width="30%"><label>Image</label></td>
                                <td width="70%">
                                
                                <img src="<?php echo base_url('./pic/'.$data['Name_image']); ?>" style="height: 50px; weight:50px;">
                                
                                </td>
                            </tr>

                            <?php 
                            
                            }

                            ?>
                        </table>
                    </div>

                    <input type="hidden" name="idCarregis" id="idCarregis" class="form-control" value="<?php echo $rs->idCarregis; ?>">


                    <input type="hidden" name="id_Employee" id="id_Employee" value="2" class="form-control" required>

                    <?php if ($rs->Status == 'พร้อม') {
                        echo '<input type="hidden" name="Status" id="Status" value="ยกเลิก" class="form-control" required>';
                        echo '<button type="submit" class="btn btn-danger mt-5" style="font-size:20px;" onclick="return confirm("คุณต้องการยกเลิกหรือไม่ ?");">ยกเลิกการลงทะเบียน</button>';
                    }else if($rs->Status == 'รออนุมัติ'){
                        echo '<input type="submit" name="Status" id="Status" value="ผ่าน" class="btn btn-success mt-5 mr-5" style="font-size:20px;" required>';
                        echo '<input type="submit" name="Status" id="Status" value="ไม่ผ่าน" class="btn btn-danger mt-5" style="font-size:20px;" required>';
                        // echo '<button type="submit" class="btn btn-success mt-5" style="font-size:20px;" onclick="return confirm("คุณต้องการยืนยันหรือไม่ ?");">ผ่าน</button>';
                    }?>


                </form>
            </div>
        </div>
    </div>
</div>