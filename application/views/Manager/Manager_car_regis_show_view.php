<div class="container" style="text-align: center;"><br><br><br><br><br>
    <div style="background-color: white; border-radius: 5px;">
        <div class="row  justify-content-center">
            <div class="col-sm-8 shadow p-3 mb-5 bg-white rounded">
                <h4 class="title">รายละเอียดการลงทะเบียนปล่อยเช่า</h4>

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
                                <td width="70%"><?php echo $rs->id_Seat; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>เชื้อเพลิง</label></td>
                                <td width="70%"><?php echo $rs->Name_Fuel; ?></td>
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
                                <td width="30%"><label>เลขตัวถัง</label></td>
                                <td width="70%"><?php echo $rs->Carbody; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>ทะเบียน</label></td>
                                <td width="70%"><?php echo $rs->License; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>จังหวัดที่ออกทะเบียน</label></td>
                                <td width="70%"><?php echo $rs->Province; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>ปีที่ออกทะเบียน</label></td>
                                <td width="70%"><?php echo $rs->Yearlicense; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>ราคาปล่อยเช่า</label></td>
                                <td width="70%"><?php echo $rs->RentalPrice; ?></td>
                            </tr>
                                                        
                            <?php

                            if($rs->id_Status != '1' || $rs->id_Status != '3' || $rs->id_Status != '6'){ //วันที่อนุมัติ
                                echo'<tr>
                                <td width="30%"><label>วันที่อนุมัติ</label></td><td width="70%">';
                                echo $rs->Dayfirst; 
                                echo '</span></td></tr>';
                            }elseif($rs->id_Status == '3'){ //วันที่ไม่อนุมัติ
                                echo'<tr>
                                <td width="30%"><label>วันที่ไม่อนุมัติ</label></td><td width="70%">';
                                echo $rs->Dayfirst; 
                                echo '</span></td></tr>';
                            }
                            if($rs->id_Status == '7'){
                                echo'<tr>
                                <td width="30%"><label>วันที่ยกเลิก</label></td><td width="70%">';
                                echo $rs->EndDate; 
                                echo '</span></td></tr>';
                            }
                            
                            if($rs->id_Status == '4' || $rs->id_Status == '5' || $rs->id_Status == '6' || $rs->id_Status == '8') //วันส่งรถยนต์ลงทะเบียน
                            {
                                echo'<tr>
                                <td width="30%"><label>วันส่งรถยนต์และเริ่มต้นสัญญา</label></td><td width="70%">';
                                echo $rs->StartDate; 
                                echo '</span></td></tr>';
                            }
                            
                            if($rs->id_Status == '5' || $rs->id_Status == '8') //วันสิ้นสุดสัญญา
                            {
                                echo'<tr>
                                <td width="30%"><label>วันสิ้นสุดสัญญา (90 วัน)</label></td><td width="70%">';
                                echo $rs->EndDate; 
                                echo '</span></td></tr>';
                            }elseif($rs->id_Status == '6'){
                                echo'<tr>
                                <td width="30%"><label>วันยกเลิกการลงทะเบียน</label></td><td width="70%">';
                                echo $rs->EndDate; 
                                echo '</span></td></tr>';

                            }
                        
                            if($rs->id_Status == '3') //หมายเหตุ
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

                            <tr>
                                <td width="30%"><label>สมาชิก</label></td>
                                <td width="70%"><?php echo $rs->FName; ?>&nbsp;<?php echo $rs->LName; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>บัญชีธนาคาร</label></td>
                                <td width="70%"><?php echo $rs->Bankname; ?>&nbsp;<?php echo $rs->Bankaccount;?></td>
                            </tr>

                            <?php //รูปภาพรถ

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

                            <?php //รูปเอกสาร

                            $query = $this->db->query("SELECT Images2.Name_image2 FROM Carregis, Images2 WHERE Carregis.idCarregis = Images2.idCarregis AND Carregis.idCarregis = $rs->idCarregis;");

                            foreach ($query->result_array() as $data ) { ?>

                            <tr>
                                <td width="30%"><label>รูปภาพเอกสารรถยนต์</label></td>
                                <td width="70%">
                            
                                <img src="<?php echo base_url('./img2/'.$data['Name_image2']); ?>" style="height: 50px; weight:50px;">
                                
                                </td>
                            </tr>

                            <?php 

                            }

                            if($rs->id_Status != '1') //พนักงาน
                            {
                                $query = $this->db->query('SELECT * FROM Carregis, Employee WHERE Carregis.id_Employee = Employee.id_Employee AND Carregis.idCarregis = '.$rs->idCarregis);

                                $qq = $query->result_array();

                                foreach ($qq as $data) {

                                    echo '<tr>
                                    <td width="30%"><label>พนักงาน</label></td>
                                    <td width="70%">';
                                    echo $data['F_Name'];
                                    echo '&nbsp;';
                                    echo $data['L_Name'];
                                    echo '</td></tr>';
                                }
                            }
                            ?>

                            <tr>
                                <td width="30%"><label>สถานะ</label></td>
                                <td width="70%">
                                <?php 
                        
                                if($rs->id_Status == '1')
                                {
                                    echo'<span class="badge badge-primary" style="font-size:13px;">';
                                    echo $rs->Name_Status; 
                                }
                                else if ($rs->id_Status == '2') 
                                {
                                    echo'<span class="badge badge-info" style="font-size:13px;">';
                                    echo $rs->Name_Status; 
                                }
                                else if ($rs->id_Status == '3') 
                                {
                                    echo'<span class="badge badge-default" style="font-size:13px;">';
                                    echo $rs->Name_Status; 
                                }
                                else if($rs->id_Status == '4')
                                {
                                    echo'<span class="badge badge-warning" style="font-size:13px;">';
                                    echo $rs->Name_Status; 
                                }
                                else if ($rs->id_Status == '5') 
                                {
                                    echo'<span class="badge badge-success" style="font-size:13px;">';
                                    echo $rs->Name_Status; 
                                }
                                else if($rs->id_Status == '6')
                                {
                                    echo'<span class="badge badge-danger" style="font-size:13px;">';
                                    echo $rs->Name_Status; 
                                }
                                else if($rs->id_Status == '7')
                                {
                                    echo'<span class="badge badge-danger" style="font-size:13px;">';
                                    echo $rs->Name_Status; 
                                }
                                else if($rs->id_Status == '8')
                                {
                                    echo'<span class="badge badge-danger" style="font-size:13px;">';
                                    echo $rs->Name_Status; 
                                }
                                else if($rs->id_Status == '13')
                                {
                                    echo'<span class="badge badge-default" style="font-size:13px;">';
                                    echo $rs->Name_Status; 
                                }
                                ?>
                                </span></td>
                            </tr> 

                            <?php 
                                $query = $this->db->query('SELECT * FROM Carregis 
                                                            INNER JOIN Rental ON Carregis.idCarregis = Rental.idCarregis
                                                            INNER JOIN Problem ON Problem.idRental = Rental.idRental
                                                            INNER JOIN Type_Problem ON Type_Problem.id_Type_Problem = Problem.id_Type_Problem
                                                            WHERE Carregis.idCarregis = '.$rs->idCarregis); 
                                $qq = $query->result();

                                foreach ($qq as $data) {
                            
                            ?>

                            <tr>
                                <td width="30%"><label>รายละเอียดปัญหา</label></td>
                                <td width="70%"><?php echo $data->Detail; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>รายละเอียดจากช่าง</label></td>
                                <td width="70%"><?php echo $data->Detail_2; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>รายละเอียดปัญหา</label></td>
                                <td width="70%"><?php echo $data->Name_Type_problem; ?></td>
                            </tr>

                            <?php } ?>

                        </table>
                    </div>

                    <?php if ($rs->id_Status == '5') { //ยกเลิกการลงทะเบียน

                        echo '<form action="'; 
                        echo site_url('Manager_car_regis/add_status_6'); 
                        echo '" method="POST" class="form-horizontal">';
                        echo '<input type="hidden" name="idCarregis" id="idCarregis" class="form-control" value="';
                        echo $rs->idCarregis; 
                        echo '">';
                        echo '<input type="hidden" name="EndDate" id="EndDate" value="';
                        echo date("Y-m-d");
                        echo '">';
                        echo '<input type="hidden" name="id_Status" id="id_Status" value="6" class="form-control" required>';
                        echo '<button type="submit" class="btn btn-danger mt-5" style="font-size:20px;">ยกเลิกการลงทะเบียน</button>';
                        echo '</form>';

                    }else if($rs->id_Status == '1'){ //อนุมัติรถยนต์หรือไม่
                        
                        // $startdate=strtotime("l");

                        echo '<form action="'; 
                        echo site_url('Manager_car_regis/add_status'); 
                        echo '" method="POST" class="form-horizontal">';
                        echo '<input type="hidden" name="Dayfirst" id="Dayfirst" class="form-control" value="';
                        echo date("Y-m-d");
                        echo '">';
                        echo '<input type="hidden" name="idCarregis" id="idCarregis" class="form-control" value="';
                        echo $rs->idCarregis; 
                        echo '">';
                        echo '<input type="hidden" class="btn btn-success mt-5 mr-5" name="id_Status" id="id_Status" value="2" style="font-size:20px;" required>';
                        echo '<button class="btn btn-success mt-5" type="submit" style="font-size:20px;">อนุมัติ</button>';
                        echo '</form>';

                        echo '<form action="'; 
                        echo site_url('Manager_car_regis/add_status/'.$rs->idCarregis); 
                        echo '" method="POST" class="form-horizontal">';
                        echo '<input type="hidden" name="idCarregis" id="idCarregis" class="form-control" value="';
                        echo $rs->idCarregis; 
                        echo '">';
                        echo '<input type="hidden" class="btn btn-danger mt-5 mr-5" name="id_Status" id="id_Status" value="3" style="font-size:20px;" required>';
                        echo '<button class="btn btn-danger" type="submit" style="font-size:20px;">ไม่อนุมัติ</button>';
                        echo '</form>';
                                           
                    }?>


                
            </div>
        </div>
    </div>
</div>