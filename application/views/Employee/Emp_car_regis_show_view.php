<div class="container" style="text-align: center;"><br><br><br><br><br>
    <div style="background-color: white; border-radius: 5px;">
        <div class="row  justify-content-center">
            <div class="col-sm-8 shadow p-3 mb-5 bg-white rounded">
                <h4 class="title">รายละเอียดรถยนต์ลงทะเบียนปล่อยเช่า</h4>

                

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

                            <?php 
                                if($rs->RentalPrice == null)
                                {

                                }else{ 
                            ?>
                            <tr>
                                <td width="30%"><label>ราคาปล่อยเช่า</label></td>
                                <td width="70%"><?php echo $rs->RentalPrice; ?></td>
                            </tr>
                            <?php } ?>

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
                                }
                                else if($rs->idStatus == '10')
                                {
                                    echo'<td width="70%"><span class="badge badge-success" style="font-size:13px;">';
                                    echo $rs->Name_Status; 
                                    echo '</span></td>';
                                }
                                else if($rs->idStatus == '11')
                                {
                                    echo'<td width="70%"><span class="badge badge-primary" style="font-size:13px;">';
                                    echo $rs->Name_Status; 
                                    echo '</span></td>';
                                }  ?>
                            </tr> 
                            
                            <?php
                            if ($rs->idStatus == '2') {
                                echo'<tr>
                                <td width="30%"><label>วันที่อนุมัติ</label></td><td width="70%">';
                                echo $rs->Dayfirst; 
                                echo '</span></td></tr>';
                            }elseif($rs->idStatus == '4'){
                                echo'<tr>
                                <td width="30%"><label>วันส่งรถ</label></td><td width="70%">';
                                echo $rs->StartDate; 
                                echo '</span></td></tr>';
                            }elseif ($rs->idStatus == '8') {
                                echo'<tr>
                                <td width="30%"><label>วันส่งรถ</label></td><td width="70%">';
                                echo $rs->Dayfirst; 
                                echo '</span></td></tr>';
                            }
                            

                            ?>

                            <?php
                            
                            if($rs->idStatus == '5')
                            {
                                echo'<tr>
                                <td width="30%"><label>วันสิ้นสุด</label></td><td width="70%">';
                                echo $rs->EndDate; 
                                echo '</span></td></tr>';
                            }elseif ($rs->idStatus == '8') {
                                echo'<tr>
                                <td width="30%"><label>วันสิ้นสุด</label></td><td width="70%">';
                                echo $rs->EndDate; 
                                echo '</span></td></tr>';
                            }
                        
                            ?>      
                            
                            <tr>
                                <td width="30%"><label>สมาชิก</label></td>
                                <td width="70%"><?php echo $rs->FName; ?>&nbsp;<?php echo $rs->LName; ?></td>
                            </tr>
                            

                            <?php 
                            
                            if($rs->idStatus == '3')
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

                            ?>

                        </table>
                    </div>

                    <?php if ($rs->idStatus == '4') { ?>

                    <form action="<?php echo site_url('Manager_car_regis/add_status_2'); ?>" method="POST" class="form-horizontal">

                    <input type="hidden" name="idCarregis" id="idCarregis" class="form-control" value="<?php echo $rs->idCarregis; ?>">

                    <div class="row justify-content-center">
                        <div class="col-3">
                            <label class="label mt-5">ราคาทางร้าน</label>
                            <input type="text" disabled name="RentalPrice" id="RentalPrice" class="form-control mt-1" value="<?php echo ($rs->Price * 0.2)/100; ?>">
                        </div>
                        <div class="col-3">
                            <label class="label mt-5">แก้ไขราคาใหม่</label>
                            <input type="text" name="RentalPrice" id="RentalPrice" class="form-control mt-1" value="<?php echo $rs->RentalPrice; ?>">
                        </div>
                    </div>                 

                    
                    <?php

                        $startdate=strtotime("l");
                        $enddate=strtotime("+89 days", $startdate);

                        echo '<input type="hidden" class="btn btn-success mt-5" name="idStatus" id="idStatus" value="5" style="font-size:20px;" required>';
                        echo '<input type="hidden" name="EndDate" id="EndDate" value="';
                        echo date("Y-m-d", $enddate);
                        echo '">';
                        echo '<button class="btn btn-success mt-5" type="submit" style="font-size:20px;">ส่งรถเรียบร้อย</button>';
                        echo '</form>';

                        $d=strtotime("-2 day");

                        if ($rs->Dayfirst <= date("Y-m-d",$d)) {

                            echo '<form action="'; 
                            echo site_url('Manager_car_regis/add_status_3'); 
                            echo '" method="POST" class="form-horizontal">';
                            echo '<input type="hidden" name="idCarregis" id="idCarregis" class="form-control" value="';
                            echo $rs->idCarregis; 
                            echo '">';
                            echo '<input type="hidden" name="StartDate" id="StartDate" value="';
                            echo date("Y-m-d", $enddate);
                            echo '">';
                            echo '<input type="hidden" class="btn btn-danger mt-5" name="idStatus" id="idStatus" value="6" style="font-size:20px;" required>';
                            echo '<button class="btn btn-danger mt-5" type="submit" style="font-size:20px;">ไม่มีการส่งรถ</button>';
                            echo '</form>';

                        }

                    }elseif ($rs->idStatus == '2') {

                        $d=strtotime("-2 Days");

                        if ($rs->Dayfirst <= date("Y-m-d",$d)) {

                        $startdate=strtotime("l");

                        echo '<form action="'; 
                        echo site_url('Manager_car_regis/add_status_3'); 
                        echo '" method="POST" class="form-horizontal">';
                        echo '<input type="hidden" name="idCarregis" id="idCarregis" class="form-control" value="';
                        echo $rs->idCarregis; 
                        echo '">';
                        echo '<input type="hidden" name="StartDate" id="StartDate" value="';
                        echo date("Y-m-d", $startdate);
                        echo '">';
                        echo '<input type="hidden" class="btn btn-danger mt-5" name="idStatus" id="idStatus" value="7" style="font-size:20px;" required>';
                        echo '<button class="btn btn-danger mt-5" type="submit" style="font-size:20px;">ไม่มีการส่งรถ</button>';
                        echo '</form>';

                        }

                    }?>



            </div>
        </div>
    </div>
</div>