<div class="container" style="text-align: center;"><br><br><br><br><br>
    <div style="background-color: white; border-radius: 5px;">
        <div class="row  justify-content-center">
            <div class="col-sm-8 shadow p-3 mb-5 bg-white rounded">
                <h4 class="title">รายละเอียดการเช่ารถยนต์</h4>


                    <div class="table-responsive">
                        <table class="table table-bordered">

                            <tr>
                                <td width="30%"><label>รหัส</label></td>
                                <td width="70%"><?php echo $rs->idRental; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>ชื่อสมาชิก</label></td>
                                <td width="70%"><?php echo $rs->FName; ?>&nbsp;<?php echo $rs->LName; ?></td>
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
                                <td width="30%"><label>วันที่เริ่มเช่า</label></td>
                                <td width="70%"><?php echo $rs->StartDate; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>วันที่ต้องคืน</label></td>
                                <td width="70%"><?php echo $rs->endDate; ?></td>
                            </tr>
                            <?php if($rs->ReturnDate != null){ ?>
                            <tr>
                                <td width="30%"><label>วันที่คืนจริง</label></td>
                                <td width="70%"><?php echo $rs->ReturnDate; ?></td>
                            </tr>
                            <?php } ?>
                            <tr>
                                <td width="30%"><label>ประเภทประกันอุบัติเหตุและราคา</label></td>
                                <td width="70%"><?php echo $rs->Name_Insurance; ?>&nbsp;<?php echo $rs->PriceIns; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>ราคารถยนต์</label></td>
                                <td width="70%"><?php echo $rs->PriceCar; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>ราคามัดจำ (30%)</label></td>
                                <td width="70%"><?php echo $rs->PriceDe; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>ราคาส่วนที่เหลือ (70%)</label></td>
                                <td width="70%"><?php echo $rs->PriceOver; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>ภาษีมูลค่าเพิ่ม (7%)</label></td>
                                <td width="70%"><?php echo $rs->PriceVat; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>ราคามัดจำรถยนต์</label></td>
                                <td width="70%"><?php echo $rs->PriceFive; ?></td>
                            </tr>

                            <?php if ($rs->Fines_price != null) { ?>

                            <tr>
                                <td width="30%"><label>ราคาค่าปรับ</label></td>
                                <td width="70%"><?php echo $rs->Fines_price; ?></td>
                            </tr>

                            <?php } ?>
                            <tr>
                                <td width="30%"><label>ราคาทั้งหมด</label></td>
                                <td width="70%"><?php echo $rs->totalprice; ?></td>
                            </tr>

                            <?php 
                            
                            if($rs->id_Employee != null)
                            {
                                $query = $this->db->query('SELECT * FROM Rental, Employee WHERE Rental.id_Employee = Employee.id_Employee AND Rental.idRental = '.$rs->idRental);

                                $qq = $query->result_array();

                                foreach ($qq as $data) {

                                    echo '<tr>
                                    <td width="30%"><label>พนักงานที่ยืนยันการโอนเงิน</label></td>
                                    <td width="70%">';
                                    echo $data['F_Name'];
                                    echo '&nbsp;';
                                    echo $data['L_Name'];
                                    echo '</td></tr>';
                                }
                            }

                            // if($rs->id_Employee_2 != null)
                            // {
                            //     $query = $this->db->query('SELECT * FROM Rental, Employee WHERE Rental.id_Employee_2 = Employee.id_Employee_2 AND Rental.idRental = '.$rs->idRental);

                            //     $qq = $query->result_array();

                            //     foreach ($qq as $data) {

                            //         echo '<tr>
                            //         <td width="30%"><label>พนักงานที่ยืนยันการโอนเงิน</label></td>
                            //         <td width="70%">';
                            //         echo $data['F_Name'];
                            //         echo '&nbsp;';
                            //         echo $data['L_Name'];
                            //         echo '</td></tr>';
                            //     }
                            // }

                            // if($rs->id_Employee_3 != null)
                            // {
                            //     $query = $this->db->query('SELECT * FROM Rental, Employee WHERE Rental.id_Employee_3 = Employee.id_Employee_3 AND Rental.idRental = '.$rs->idRental);

                            //     $qq = $query->result_array();

                            //     foreach ($qq as $data) {

                            //         echo '<tr>
                            //         <td width="30%"><label>พนักงานที่ยืนยันการโอนเงิน</label></td>
                            //         <td width="70%">';
                            //         echo $data['F_Name'];
                            //         echo '&nbsp;';
                            //         echo $data['L_Name'];
                            //         echo '</td></tr>';
                            //     }
                            // }
                            
                            if($rs->id_status == '3')
                            {
                                $query = $this->db->query('SELECT * FROM Not_passed_rent, Rental WHERE Not_passed_rent.idRental = Rental.idRental AND Not_passed_rent.idRental = '.$rs->idRental);

                                $qq = $query->result_array();

                                foreach ($qq as $data) {

                                    echo '<tr>
                                    <td width="30%"><label>หมายเหตุ</label></td>
                                    <td width="70%">';
                                    echo $data['Name_not_rent'];
                                    echo '</td></tr>';
                                }
                            }
                            ?>

                            <?php 

                            $query = $this->db->query("SELECT Images3.Name_image3 FROM Rental, Images3 WHERE Rental.idRental = Images3.idRental AND Rental.idRental = $rs->idRental");

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

                            <tr>
                                <td width="30%"><label>สถานะ</label></td>
                                <td width="70%">
                                <?php 
                        
                                if($rs->id_status == '1')
                                {
                                    echo'<span class="badge badge-primary" style="font-size:13px;">';
                                    echo $rs->Name_Status; 
                                }
                                else if ($rs->id_status == '2') 
                                {
                                    echo'<span class="badge badge-info" style="font-size:13px;">';
                                    echo $rs->Name_Status; 
                                }
                                else if ($rs->id_status == '3') 
                                {
                                    echo'<span class="badge badge-default" style="font-size:13px;">';
                                    echo $rs->Name_Status; 
                                }
                                else if($rs->id_status == '4')
                                {
                                    echo'<span class="badge badge-warning" style="font-size:13px;">';
                                    echo $rs->Name_Status; 
                                }
                                else if ($rs->id_status == '5') 
                                {
                                    echo'<span class="badge badge-success" style="font-size:13px;">';
                                    echo $rs->Name_Status; 
                                }
                                else if($rs->id_status == '6')
                                {
                                    echo'<span class="badge badge-danger" style="font-size:13px;">';
                                    echo $rs->Name_Status; 
                                }
                                else if($rs->id_status == '7')
                                {
                                    echo'<span class="badge badge-danger" style="font-size:13px;">';
                                    echo $rs->Name_Status; 
                                }
                                else if($rs->id_status == '8')
                                {
                                    echo'<span class="badge badge-danger" style="font-size:13px;">';
                                    echo $rs->Name_Status; 
                                }
                                else if($rs->id_status == '9')
                                {
                                    echo'<span class="badge badge-warning" style="font-size:13px;">';
                                    echo $rs->Name_Status; 
                                }
                                else if($rs->id_status == '10')
                                {
                                    echo'<span class="badge badge-success" style="font-size:13px;">';
                                    echo $rs->Name_Status; 
                                }
                                else if($rs->id_status == '11')
                                {
                                    echo'<span class="badge badge-primary" style="font-size:13px;">';
                                    echo $rs->Name_Status; 
                                }
                                else if($rs->id_status == '12')
                                {
                                    echo'<span class="badge badge-success" style="font-size:13px;">';
                                    echo $rs->Name_Status; 
                                }  ?>
                                </span></td>
                            </tr> 
                            
                        </table>
                    </div>


                    
                    <?php 

                    if($rs->id_status == '9'){

                        $d=strtotime("-1 day");

                        if ($rs->Datebooking <= date("Y-m-d",$d)) {

                            echo '<form action="'; 
                            echo site_url('Emp_rental/add_status_3/'); 
                            echo '" method="POST" class="form-horizontal">';
                            echo '<input type="hidden" name="idRental" id="idRental" class="form-control" value="';
                            echo $rs->idRental; 
                            echo '">';
                            echo '<input type="hidden" name="idCarregis" id="idCarregis" class="form-control" value="';
                            echo $rs->idCarregis; 
                            echo '">'; 
                            echo '<input type="hidden" class="btn btn-danger mt-5 mr-5" name="id_status" id="id_status" value="6" style="font-size:20px;" required>';

                            echo '<button class="btn btn-danger mt-5 mr-5" type="submit" style="font-size:20px;">ยกเลิกการเช่ารถยนต์</button>';
                            echo '</form>';
                        
                        }

                    }?>

                    <?php 
                        if($rs->id_status == '1'){
                        
                        echo '<form action="'; 
                        echo site_url('Emp_rental/add_status_2'); 
                        echo '" method="POST" class="form-horizontal">';
                        echo '<input type="hidden" name="idRental" id="idRental" class="form-control" value="';
                        echo $rs->idRental; 
                        echo '">';
                        echo '<input type="hidden" name="idCarregis" id="idCarregis" class="form-control" value="';
                        echo $rs->idCarregis; 
                        echo '">';
                        echo '<input type="hidden" class="btn btn-success mt-5 mr-5" name="id_status" id="id_status" value="10" style="font-size:20px;" required>';
                        echo '<button class="btn btn-success mt-5 mr-5" type="submit" style="font-size:20px;">อนุมัติ</button>';
                        echo '</form>';

                        echo '<form action="'; 
                        echo site_url('Emp_rental/add_status_3/'.$rs->idRental); 
                        echo '" method="POST" class="form-horizontal">';
                        echo '<input type="hidden" name="idRental" id="idRental" class="form-control" value="';
                        echo $rs->idRental; 
                        echo '">';
                        echo '<input type="hidden" class="btn btn-danger mt-5 mr-5" name="id_status" id="id_status" value="3" style="font-size:20px;" required>';
                        echo '<button class="btn btn-danger mt-5 mr-5" type="submit" style="font-size:20px;">ไม่อนุมัติ</button>';
                        echo '</form>';
                                           
                    }?>

                    <?php 
                        if($rs->id_status == '10'){
                        
                        echo '<form action="'; 
                        echo site_url('Emp_rental/add_status_22'); 
                        echo '" method="POST" class="form-horizontal">';
                        echo '<input type="hidden" name="idRental" id="idRental" class="form-control" value="';
                        echo $rs->idRental; 
                        echo '">';
                        echo '<input type="hidden" name="idCarregis" id="idCarregis" class="form-control" value="';
                        echo $rs->idCarregis; 
                        echo '">';
                        echo '<input type="hidden" class="btn btn-success mt-5 mr-5" name="id_status" id="id_status" value="11" style="font-size:20px;" required>';
                        echo '<button class="btn btn-success mt-5 mr-5" type="submit" style="font-size:20px;">ยืนยันการรับรถยนต์เช่า</button>';
                        echo '</form>';

                        echo '<form action="'; 
                        echo site_url('Emp_rental/add_status_33/'); 
                        echo '" method="POST" class="form-horizontal">';
                        echo '<input type="hidden" name="idRental" id="idRental" class="form-control" value="';
                        echo $rs->idRental; 
                        echo '">';
                        echo '<input type="hidden" name="idCarregis" id="idCarregis" class="form-control" value="';
                        echo $rs->idCarregis; 
                        echo '">';
                        echo '<input type="hidden" class="btn btn-danger mt-5 mr-5" name="id_status" id="id_status" value="6" style="font-size:20px;" required>';
                        echo '<button class="btn btn-danger mt-5 mr-5" type="submit" style="font-size:20px;">ยกเลิกการเช่ารถยนต์</button>';
                        echo '</form>';
                                           
                    }?>

                    <?php 
                    if($rs->id_status == '11'){

                        $d=strtotime("-1 day");
                        $dd=strtotime("-2 day");
                        $ddd=strtotime("-3 day");

                        if (date("Y-m-d") >=  $rs->endDate) {

                            echo '<form action="'; 
                            echo site_url('Emp_rental/add_status_4/'); 
                            echo '" method="POST" class="form-horizontal">';

                            ?>
                            
                            <div class="row justify-content-center"> 
                                <div class="col-3">
                                    <label class="label mt-5">ราคามัดจำรถยนต์</label>
                                    <input type="number" name="PriceFive" id="PriceFive" class="form-control mt-1" value="<?php echo $rs->PriceFive;?>">
                                    <label class="label mt-1" style="color: red;">*ถ้าคืนเงินมัดจำให้กรอกราคาเป็น 0*</label>
                                </div>
                            </div>  

                            <?php

                            
                            echo '<input type="hidden" name="idRental" id="idRental" class="form-control" value="';
                            echo $rs->idRental; 
                            echo '">';
                            echo '<input type="hidden" name="idCarregis" id="idCarregis" class="form-control" value="';
                            echo $rs->idCarregis; 
                            echo '">';
                            echo '<input type="hidden" name="ReturnDate" id="ReturnDate" value="';
                            echo date("Y-m-d");
                            echo '">';
                            ?>
                            
                            <div class="row justify-content-center"> 

                            <?php if($rs->endDate ==  date('Y-m-d',$d)){ ?>
                                
                                <div class="col-3">
                                    <label class="label mt-5">ราคาเช่าต่อวัน</label>
                                    <input type="number" disabled class="form-control mt-1" value="<?php echo $rs->PriceCar; ?>">
                                </div>

                                <div class="col-3">
                                    <label class="label mt-5">ราคาค่าปรับ</label>
                                    <input type="number" name="Fines_price" id="Fines_price" class="form-control mt-1" value="<?php echo $rs->PriceCar * 2; ?>">
                                </div>

                            <?php }elseif($rs->endDate ==  date('Y-m-d',$dd)){ ?>

                                <div class="col-3">
                                    <label class="label mt-5">ราคาเช่าต่อวัน</label>
                                    <input type="number" disabled class="form-control mt-1" value="<?php echo $rs->PriceCar; ?>">
                                </div>

                                <div class="col-3">
                                    <label class="label mt-5">ราคาค่าปรับ</label>
                                    <input type="number" name="Fines_price" id="Fines_price" class="form-control mt-1" value="<?php echo $rs->PriceCar * 2; ?>">
                                </div>

                            <?php }elseif($rs->endDate ==  date('Y-m-d',$dd)){ ?>

                                <div class="col-3">
                                    <label class="label mt-5">ราคาเช่าต่อวัน</label>
                                    <input type="number" disabled class="form-control mt-1" value="<?php echo $rs->PriceCar; ?>">
                                </div>

                                <div class="col-3">
                                    <label class="label mt-5">ราคาค่าปรับ</label>
                                    <input type="number" name="Fines_price" id="Fines_price" class="form-control mt-1" value="<?php echo $rs->PriceCar * 2; ?>">
                                </div>

                            <?php }else{ ?>

                                <input type="hidden" name="Fines_price" id="Fines_price" class="form-control mt-1" value="0">

                            <?php }?>
                            
                            </div>  

                            <?php
                            echo '<input type="hidden" class="btn btn-danger mt-5" name="id_status" id="id_status" value="12" style="font-size:20px;" required>';

                            echo '<button class="btn btn-info mt-5" type="submit" style="font-size:20px;">ยืนยันการคืนรถยนต์</button>';
                            echo '</form>';
                        
                        }

                    }?>

            </div>
        </div>
    </div>
</div>