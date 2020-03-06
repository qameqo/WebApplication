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
                            
                            if($rs->id_Status == '5' || $rs->id_Status == '6' || $rs->id_Status == '8') //วันสิ้นสุดสัญญา
                            {
                                echo'<tr>
                                <td width="30%"><label>วันสิ้นสุดสัญญา (90 วัน)</label></td><td width="70%">';
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

                        </table>
                    </div>

                    <?php if ($rs->id_Status == '4') { ?>

                    <form action="<?php echo site_url('Manager_car_regis/add_status_2'); ?>" method="POST" class="form-horizontal">

                    <input type="hidden" name="idCarregis" id="idCarregis" class="form-control" value="<?php echo $rs->idCarregis; ?>">              
                    
                    <?php

                        if(date("Y-m-d") >  $rs->StartDate){

                            echo '<input type="hidden" class="btn btn-success mt-5" name="id_Status" id="id_Status" value="6" style="font-size:20px;" required>';
                            echo '<button class="btn btn-danger mt-5" type="submit" style="font-size:20px;">ยกเลิกการลงทะเบียน</button>';
                        }
                        else
                        { 
                            if ($rs->StartDate == date('Y-m-d')) 
                            {  
                                ?>
                            <br>
                                <?php $query = $this->db->query("SELECT * FROM Carregis INNER JOIN Generation on Generation.id_Gen = Carregis.id_Gen INNER JOIN 
                                Brand on Brand.idBrand = Carregis.idBrand
                                WHERE Generation.id_Gen = '$rs->id_Gen'");
                                $qqa = $query->result_array(); 
                                ?>
                           <?php foreach($qqa as $data){
								$ei = $data['Price'];
								$eii = 0.23;
								$eiii = 0.17;
								$e = 10;
								$ee = 1000;
								$total = $ei * $eii * $e / $ee;
								$total2 = $ei * $eiii * $e / $ee;
								/////////////////////////////
								$ei = $data['Price'];
								$year = date('Y');
								$yearcar = $data['Yearlicense'];
								$yl = $year - $yearcar; //จำนวนปี
								$yl = $yl / 10000;
								$raka = 0.0018 - $yl;
								$raka3 = 0.0022 - $yl;
								$raka2 = $ei * $raka;	//ราคารถต่ำ
								$raka1 = $ei * $raka3; //ราคารถสูง
						?>
                        <?php } ?>
                                <div class="row justify-content-center">
                                <span style=""> เรทราคาปล่อยเช่าอยู่ที่ <?php echo number_format($raka2,0);?> ถึง <?php echo number_format($raka1,0);?> บาท/วัน</span>
                                </div>
                                <div class="row justify-content-center">
                                    <div class="col-3">
                                        <label class="label mt-5">ราคาทางร้าน</label>
                                        <input type="text" disabled name="Price" id="Price" class="form-control mt-1" value="<?php echo ($rs->Price * 0.2)/100; ?>">
                                    </div>
                                    <div class="col-3">
                                        <label class="label mt-5">แก้ไขราคาใหม่</label>
                                        <input type="text" name="RentalPrice" id="RentalPrice" class="form-control mt-1" value="<?php echo $rs->RentalPrice; ?>">
                                        <input type="hidden" id="up"name="up" value="<?php echo ($rs->Price * 0.23)/100;?>">
				                        <input type="hidden" id="down"name="down" value="<?php echo ($rs->Price * 0.17)/100;?>">
                                    </div>
                                </div>   
                            
                                <?php
                                $startdate=strtotime("l");
                                $enddate=strtotime("+89 days", $startdate);

                                echo '<input type="hidden" name="EndDate" id="EndDate" value="';
                                echo date("Y-m-d", $enddate);
                                echo '">';

                                echo '<input type="hidden" class="btn btn-success mt-5" name="id_Status" id="id_Status" value="5" style="font-size:20px;" required>';
                                echo '<button class="btn btn-success mt-5" type="submit" style="font-size:20px;">ส่งรถเรียบร้อย</button>';
                                echo '</form>';

                                //---------------------------------------------------------ไม่ตกลงราคา

                                echo '<form action="';
                                echo site_url('Manager_car_regis/add_status_2'); 
                                echo '" method="POST" class="form-horizontal">';
                                echo '<input type="hidden" name="idCarregis" id="idCarregis" class="form-control" value="';
                                echo $rs->idCarregis; 
                                echo '">';
                                echo '<input type="hidden" name="RentalPrice" id="RentalPrice" class="form-control mt-1" value="';
                                echo $rs->RentalPrice; 
                                echo '">';
                                echo '<input type="hidden" class="btn btn-success" name="id_Status" id="id_Status" value="6" style="font-size:20px;" required>';
                                echo '<input type="hidden" name="EndDate" id="EndDate" value="';
                                echo date("Y-m-d");
                                echo '">';
                                echo '<button class="btn btn-danger" type="submit" style="font-size:20px;">ยกเลิกการลงทะเบียน</button>';
                                echo '</form>';

                            }
                        }
                        
                        

                        // $d=strtotime("-2 day");

                    //     if ($rs->Dayfirst <= date("Y-m-d",$d)) {

                    //         echo '<form action="'; 
                    //         echo site_url('Manager_car_regis/add_status_3'); 
                    //         echo '" method="POST" class="form-horizontal">';
                    //         echo '<input type="hidden" name="idCarregis" id="idCarregis" class="form-control" value="';
                    //         echo $rs->idCarregis; 
                    //         echo '">';
                    //         echo '<input type="hidden" name="StartDate" id="StartDate" value="';
                    //         echo date("Y-m-d", $enddate);
                    //         echo '">';
                    //         echo '<input type="hidden" class="btn btn-danger mt-5" name="id_Status" id="id_Status" value="6" style="font-size:20px;" required>';
                    //         echo '<button class="btn btn-danger mt-5" type="submit" style="font-size:20px;">ไม่มีการส่งรถ</button>';
                    //         echo '</form>';

                    //     }

                    // }elseif ($rs->id_Status == '2') {

                    //     $d=strtotime("-2 Days");

                    //     if ($rs->Dayfirst <= date("Y-m-d",$d)) {

                    //     $startdate=strtotime("l");

                    //     echo '<form action="'; 
                    //     echo site_url('Manager_car_regis/add_status_3'); 
                    //     echo '" method="POST" class="form-horizontal">';
                    //     echo '<input type="hidden" name="idCarregis" id="idCarregis" class="form-control" value="';
                    //     echo $rs->idCarregis; 
                    //     echo '">';
                    //     echo '<input type="hidden" name="StartDate" id="StartDate" value="';
                    //     echo date("Y-m-d", $startdate);
                    //     echo '">';
                    //     echo '<input type="hidden" class="btn btn-danger mt-5" name="id_Status" id="id_Status" value="7" style="font-size:20px;" required>';
                    //     echo '<button class="btn btn-danger mt-5" type="submit" style="font-size:20px;">ไม่มีการส่งรถ</button>';
                    //     echo '</form>';

                    //     }

                    }?>


                    <?php if ($rs->id_Status == '13') { //เปลี่ยนซ่อมเป็นพร้อมใช้ 13 เป็น 5?>  
                        <form action="<?php echo site_url('Manager_car_regis/add_status_13'); ?>" method="POST" class="form-horizontal">

                            <input type="hidden" name="idCarregis" id="idCarregis" class="form-control" value="<?php echo $rs->idCarregis; ?>">  
                            <input type="hidden" class="btn btn-success mt-5" name="id_Status" id="id_Status" value="5" style="font-size:20px;" required>
                            <button class="btn btn-success mt-5" type="submit" style="font-size:20px;">ซ่อมเสร็จเรียบร้อย</button>

                        </form>

                    <?php }?>              

            </div>
        </div>
    </div>
</div>

                                