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
                                <td width="70%"><?php echo $rs->startDate; ?></td>
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
                                <td width="70%"><?php echo $rs->Name_Insurance; ?>&nbsp;<?php echo $rs->PriceIns; ?>&nbsp;บาท</td>
                            </tr>
                            <tr>
                                <td width="30%"><label>ราคารถยนต์</label></td>
                                <td width="70%"><?php echo $rs->PriceCar; ?>&nbsp;บาท</td>
                            </tr>
                            <tr>
                                <td width="30%"><label>ราคามัดจำ (30%)</label></td>
                                <td width="70%"><?php echo $rs->PriceDe; ?>&nbsp;บาท</td>
                            </tr>
                            <tr>
                                <td width="30%"><label>ราคาส่วนที่เหลือ (70%)</label></td>
                                <td width="70%"><?php echo $rs->PriceOver; ?>&nbsp;บาท</td>
                            </tr>
                            <tr>
                                <td width="30%"><label>ภาษีมูลค่าเพิ่ม (7%)</label></td>
                                <td width="70%"><?php echo $rs->PriceVat; ?>&nbsp;บาท</td>
                            </tr>

                            <?php if($rs->PriceFive == null){}else{?>

                            <tr>
                                <td width="30%"><label>ราคามัดจำรถยนต์</label></td>
                                <td width="70%"><?php echo $rs->PriceFive; ?>&nbsp;บาท</td>
                            </tr>

                            <?php }?>

                            <?php if ($rs->Fines_price == 0 || $rs->Fines_price == null) {}else{ ?>

                            <tr>
                                <td width="30%"><label>ราคาค่าปรับ</label></td>
                                <td width="70%"><?php echo $rs->Fines_price; ?>&nbsp;บาท</td>
                            </tr>

                            <?php } ?>
                            <tr>
                                <td width="30%"><label>ราคาทั้งหมด</label></td>
                                <td width="70%"><?php echo $rs->totalprice; ?>&nbsp;บาท</td>
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

                            if($rs->id_Employee_2 != null)
                            {
                                $query = $this->db->query('SELECT * FROM Rental, Employee WHERE Rental.id_Employee_2 = Employee.id_Employee AND Rental.idRental = '.$rs->idRental);

                                $qq = $query->result_array();

                                foreach ($qq as $data) {

                                    echo '<tr>
                                    <td width="30%"><label>พนักงานที่ยืนยันการรับรถยนต์</label></td>
                                    <td width="70%">';
                                    echo $data['F_Name'];
                                    echo '&nbsp;';
                                    echo $data['L_Name'];
                                    echo '</td></tr>';
                                }
                            }

                            if($rs->id_Employee_3 != null)
                            {
                                $query = $this->db->query('SELECT * FROM Rental, Employee WHERE Rental.id_Employee_3 = Employee.id_Employee AND Rental.idRental = '.$rs->idRental);

                                $qq = $query->result_array();

                                foreach ($qq as $data) {

                                    echo '<tr>
                                    <td width="30%"><label>พนักงานที่ยืนยันการคืนรถยนต์</label></td>
                                    <td width="70%">';
                                    echo $data['F_Name'];
                                    echo '&nbsp;';
                                    echo $data['L_Name'];
                                    echo '</td></tr>';
                                }
                            }
                                    
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

                            <?php 
                              
                            if($rs->id_status == '3')
                            {
                                $query = $this->db->query('SELECT * FROM Not_passed_rent WHERE Not_passed_rent.idRental = '.$rs->idRental);

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
                                                        
                        </table>
                    </div>

                    <?php 

                    // if($rs->id_status == '9'){

                    //     $d=strtotime("-1 day");

                    //     if ($rs->Datebooking <= date("Y-m-d",$d)) {

                    //         echo '<form action="'; 
                    //         echo site_url('Emp_rental/add_status_3/'); 
                    //         echo '" method="POST" class="form-horizontal">';
                    //         echo '<input type="hidden" name="idRental" id="idRental" class="form-control" value="';
                    //         echo $rs->idRental; 
                    //         echo '">';
                    //         echo '<input type="hidden" name="idCarregis" id="idCarregis" class="form-control" value="';
                    //         echo $rs->idCarregis; 
                    //         echo '">'; 
                    //         echo '<input type="hidden" class="btn btn-danger mt-5 mr-5" name="id_status" id="id_status" value="6" style="font-size:20px;" required>';

                    //         echo '<button class="btn btn-danger mt-5 mr-5" type="submit" style="font-size:20px;">ยกเลิกการเช่ารถยนต์</button>';
                    //         echo '</form>';
                        
                    //     }

                    // }?>

                    <?php 
                        if($rs->id_status == '1'){ //รออนุมัติหลังจากโอนเงิน 30%
                        
                        echo '<form action="'; 
                        echo site_url('Emp_rental/add_status_2'); 
                        echo '" method="POST" class="form-horizontal">';
                        echo '<input type="hidden" name="idRental" id="idRental" class="form-control" value="';
                        echo $rs->idRental; 
                        echo '">';
                        echo '<input type="hidden" class="btn btn-success mt-5 mr-5" name="id_status" id="id_status" value="10" style="font-size:20px;" required>';
                        echo '<button class="btn btn-success mt-5" type="submit" style="font-size:20px;">อนุมัติ</button>';
                        echo '</form>';

                        echo '<form action="'; 
                        echo site_url('Emp_rental/add_status/'.$rs->idRental); 
                        echo '" method="POST" class="form-horizontal">';
                        echo '<input type="hidden" name="idRental" id="idRental" class="form-control" value="';
                        echo $rs->idRental; 
                        echo '">';
                        echo '<input type="hidden" class="btn btn-danger mt-5 mr-5" name="id_status" id="id_status" value="3" style="font-size:20px;" required>';
                        echo '<button class="btn btn-danger" type="submit" style="font-size:20px;">ไม่อนุมัติ</button>';
                        echo '</form>';
                                           
                    }?>

                    <?php 
                        if($rs->id_status == '10'){ //สมาชิกมารับรถยนต์
                        
                        echo '<form action="'; 
                        echo site_url('Emp_rental/add_status_22'); 
                        echo '" method="POST" class="form-horizontal">';
                        echo '<input type="hidden" name="idRental" id="idRental" class="form-control" value="';
                        echo $rs->idRental; 
                        echo '">';
                        
                        echo '<input type="hidden" class="btn btn-success mt-5 mr-5" name="id_status" id="id_status" value="11" style="font-size:20px;" required>';
                        echo '<input type="hidden" class="btn btn-success mt-5 mr-5" name="totalprice" id="totalprice" value="';
                        echo $rs->totalprice + 5000;
                        echo '" style="font-size:20px;" required>';
                        echo '<button class="btn btn-success mt-5" type="submit" style="font-size:20px;">ยืนยันการรับรถยนต์เช่า</button>';
                        echo '</form>';

                        // echo '<form action="'; 
                        // echo site_url('Emp_rental/add_status_33/'); 
                        // echo '" method="POST" class="form-horizontal">';
                        // echo '<input type="hidden" name="idRental" id="idRental" class="form-control" value="';
                        // echo $rs->idRental; 
                        // echo '">';
                        // echo '<input type="hidden" name="idCarregis" id="idCarregis" class="form-control" value="';
                        // echo $rs->idCarregis; 
                        // echo '">';
                        // echo '<input type="hidden" class="btn btn-danger mt-5 mr-5" name="id_status" id="id_status" value="6" style="font-size:20px;" required>';
                        // echo '<button class="btn btn-danger mt-5 mr-5" type="submit" style="font-size:20px;">ยกเลิกการเช่ารถยนต์</button>';
                        // echo '</form>';
                        
                               ?>
                               
                               <!-- Large modal -->
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg" style="font-size:20px;">เปลี่ยนรถยนต์</button>

                                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">รายการเช่ารถใหม่</h4>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>

                                            <form action="<?php echo site_url('manager_emp/add_emp'); ?>" method="POST" id="insert_form">

                                                <div class="modal-body">

                                                    <input type="hidden" name="id_emp" id="id_emp" class="form-control">

                                                    <div class="form-group">
                                                        <label for="Username">Username</label>
                                                        <input type="text" name="Username" id="Username" class="form-control" placeholder="Username"
                                                            required>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="Password">Password</label>
                                                        <input type="password" class="form-control" name="Password" id="Password" placeholder="Password"
                                                            required >

                                                    </div>

                                                    <div class="form-row">
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <label for="First name">First name</label>
                                                                <input type="text" name="F_Name" id="F_Name" class="form-control"
                                                                    placeholder="First name" required>
                                                            </div>
                                                        </div>
                                                        <div class="col">
                                                            <div class="form-group">
                                                                <label for="Last name">Last name</label>
                                                                <input type="text" name="L_Name" id="L_Name" class="form-control"
                                                                    placeholder="Last name" required>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="Address">Address</label>
                                                        <textarea class="form-control" name="Address" id="Address" rows="3" required></textarea>
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="Tel">Tel.</label>
                                                        <input type="text" class="form-control" name="Tel" id="Tel" placeholder="0881234567" required
                                                            pattern="[0-9]{3}[0-9]{3}[0-9]{4}" title="กรุณากรอกให้ครบ 10 หลัก 0800000000">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="Row">Row select</label>
                                                        <select class="form-control selectpicker" data-style="btn btn-link" name="Row" id="Row">
                                                            <option value="1">พนักงาน</option>
                                                            <option value="2">ช่างซ่อมบำรุง</option>
                                                            <option value="3">เจ้าหน้าที่ประกัน</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <input style="font-size:16px" type="submit" name="adding_btn" id="adding_btn" class="btn btn-success" value="บันทึกข้อมูล" />
                                                </div>
                                        </div>
                                    </div>
                                </div>

                                

                               <?php            
                    }?>



                    <?php 
                    if($rs->id_status == '11'){ //วันที่คืนรถยนต์

                        $d=strtotime("-1 day");
                        $dd=strtotime("-2 day");
                        $ddd=strtotime("-3 day");

                        if (date("Y-m-d") >=  $rs->endDate) {

                            echo '<form action="'; 
                            echo site_url('Emp_rental/add_status_4/'); 
                            echo '" method="POST" class="form-horizontal">';

                            echo '<input type="hidden" class="btn btn-success mt-5 mr-5" name="id_Status" id="id_Status" value="5" style="font-size:20px;" required>';
                            ?>
                            
                            <!-- <div class="row justify-content-center"> 
                                <div class="col-3">
                                    <label class="label mt-5">ราคามัดจำรถยนต์</label>
                                    <input type="number" name="PriceFive" id="PriceFive" class="form-control mt-1" value="<?php //echo $rs->PriceFive;?>">
                                    <label class="label mt-1" style="color: red;">*ถ้าคืนเงินมัดจำให้กรอกราคาเป็น 0*</label>
                                </div>
                            </div>   -->

                            <div class="row justify-content-center mt-5">
                                <div class="col-3"> 
                                    <input class="form-check-input" type="checkbox" name="PriceFive" value="0"> คืนเงินมัดจำ 5000
                                </div>
                            </div>  

                            <?php
                            
                            echo '<input type="hidden" name="idRental" id="idRental" class="form-control" value="';
                            echo $rs->idRental; 
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
                                    <input type="number" name="Fines_price" id="Fines_price" class="form-control mt-1" value="<?php echo $rs->PriceCar * 4; ?>">
                                </div>

                            <?php }elseif($rs->endDate ==  date('Y-m-d',$dd)){ ?>

                                <div class="col-3">
                                    <label class="label mt-5">ราคาเช่าต่อวัน</label>
                                    <input type="number" disabled class="form-control mt-1" value="<?php echo $rs->PriceCar; ?>">
                                </div>

                                <div class="col-3">
                                    <label class="label mt-5">ราคาค่าปรับ</label>
                                    <input type="number" name="Fines_price" id="Fines_price" class="form-control mt-1" value="<?php echo $rs->PriceCar * 6; ?>">
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