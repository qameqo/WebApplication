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
                            <td width="30%"><label>ราคาปล่อยเช่าต่อวัน</label></td>
                            <td width="70%"><?php echo $rs->RentalPrice; ?></td>
                        </tr>
                        <tr>
                            <td width="30%"><label>จำนวนที่นั่ง</label></td>
                            <td width="70%"><?php echo $rs->id_Seat; ?></td>
                        </tr>
                        <tr>
                            <td width="30%"><label>วันที่ทำรายการเช่า</label></td>
                            <td width="70%"><?php echo $rs->Datebooking; ?></td>
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
                            <td width="70%">
                                <?php echo $rs->Name_Insurance; ?>&nbsp;<?php echo $rs->PriceIns; ?>&nbsp;บาท</td>
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

                                <img src="<?php echo base_url('./img3/'.$data['Name_image3']); ?>"
                                    style="height: 50px; weight:50px;">

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
                                } 
                                else if($rs->id_status == '13')
                                {
                                    echo'<span class="badge badge-default" style="font-size:13px;">';
                                    echo $rs->Name_Status; 
                                }
                                else if($rs->id_status == '14')
                                {
                                    echo'<span class="badge badge-warning" style="font-size:13px;">';
                                    echo $rs->Name_Status; 
                                } 
                                else if($rs->id_status == '15')
                                {
                                    echo'<span class="badge badge-warning" style="font-size:13px;">';
                                    echo $rs->Name_Status; 
                                }   ?>
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

                            <?php 
                                $query = $this->db->query('SELECT * FROM Rental 
                                                            INNER JOIN Problem ON Problem.idRental = Rental.idRental
                                                            INNER JOIN Type_Problem ON Type_Problem.id_Type_Problem = Problem.id_Type_Problem
                                                            WHERE Rental.idRental = '.$rs->idRental); 
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

                            <?php if ($rs->idCarregis2 != null) {
                                
                                $query = $this->db->query('SELECT * FROM Carregis 
                                                            INNER JOIN Brand ON Brand.idBrand = Carregis.idBrand
                                                            INNER JOIN Generation ON Generation.id_Gen = Carregis.id_Gen 
                                                            WHERE Carregis.idCarregis = '.$rs->idCarregis2);

                                $qq = $query->result();

                                foreach ($qq as $data) {
                                
                                ?>

                            <tr>
                                <td width="30%"><label>รหัสรถยนต์สำรอง</label></td>
                                <td width="70%"><?php echo $data->idCarregis; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>ยี่ห้อ</label></td>
                                <td width="70%"><?php echo $data->Name_Brand; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>รุ่น</label></td>
                                <td width="70%"><?php echo $data->Name_Gen; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>ที่นั่ง</label></td>
                                <td width="70%"><?php echo $data->id_Seat; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>ราคาปล่อยเช่า</label></td>
                                <td width="70%"><?php echo $data->RentalPrice; ?></td>
                            </tr>

                            <?php }} ?>
                            
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
                        echo '
                            <div class="row justify-content-center">    
                            <div class="col-3">
                                <label class="label mt-5">ราคามัดจำ 5000 บาท</label>
                                <input type="number" name="PriceFive" id="PriceFive" class="form-control mt-1" value="5000" readonly>
                            </div></div>';
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
                                  
                    }?>

                <?php // เปลี่ยนรถยนต์

                    if ($rs->id_status == '15') {

                        echo '<form action="'; 
                        echo site_url('Emp_problem/reserve_car/'.$rs->idRental); 
                        echo '" method="POST" class="form-horizontal">';
                        echo '<input type="hidden" name="idRental" id="idRental" class="form-control" value="';
                        echo $rs->idRental; 
                        echo '">';
                        echo '<button class="btn btn-warning mt-5" type="submit" style="font-size:20px;">เปลี่ยนรถยนต์</button>';
                        echo '</form>';

                    ?>


                <?php } ?>


                <?php 
                    if($rs->id_status == '11'){ //วันที่คืนรถยนต์

                        $d=strtotime("-1 day");
                        $dd=strtotime("-2 day");
                        $ddd=strtotime("-3 day");

                        if (date("Y-m-d") >=  $rs->endDate) {

                            echo '<form action="'; 
                            echo site_url('Emp_rental/add_status_4/'.$rs->idRental); 
                            echo '" method="POST" class="form-horizontal">';

                            ?>


                <?php 

                            echo '<input type="hidden" class="btn btn-success mt-5 mr-5" name="id_Status" id="id_Status" value="5" style="font-size:20px;" required>';
                            ?>

                <!-- <div class="row justify-content-center"> 
                                <div class="col-3">
                                    <label class="label mt-5">ราคามัดจำรถยนต์</label>
                                    <input type="number" name="PriceFive" id="PriceFive" class="form-control mt-1" value="<?php //echo $rs->PriceFive;?>">
                                    <label class="label mt-1" style="color: red;">*ถ้าคืนเงินมัดจำให้กรอกราคาเป็น 0*</label>
                                </div>
                            </div>   -->

                            <br><h4>รายการตรวจสอบรถยนต์</h4>

                <div class="row justify-content-center mt-5">

                    <div class="col-4">
                        <div class="form-group prc2">
                            <label class="label">ยางรถยนต์</label>
                            <input type="number" id="Car_tire" name="Car_tire" class="form-control prc2"
                                value="0" required>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="form-group prc2">
                            <label class="label">น้ำมัน</label>
                            <input type="number" id="Fuel" name="Fuel" class="form-control prc2"
                                value="0" required>
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="form-group prc">
                            <label class="label">รวมเงินค่าปรับรถยนต์</label>
                            <input type="number" id="Total_fines" name="Total_fines" class="form-control"
                                value="0" readonly>
                        </div>
                    </div>

                    <?php
                    //  $idRental = $rs->idRental;
                    echo '<input type="hidden" name="idRental" id="idRental" class="form-control" value="';
                    echo $rs->idRental; 
                    echo '">';

                    // if ($rs->idCarregis2 != null) {
                        echo '<input type="hidden" name="idCarregis2" id="idCarregis2" class="form-control" value="';
                        echo $rs->idCarregis2; 
                        echo '">';
                    // }else {
                    //     echo '<input type="hidden" name="idCarregis" id="idCarregis" class="form-control" value="';
                    //     echo $rs->idCarregis; 
                    //     echo '">';
                    // }

                    

                    echo '<input type="hidden" name="ReturnDate" id="ReturnDate" value="';
                    echo date("Y-m-d");
                    echo '">';
                    ?>

                    <?php if($rs->endDate ==  date('Y-m-d',$d)){ ?>

                    <div class="col-4">
                        <div class="form-group prc">
                            <label class="label ">ราคาค่าปรับคืนช้า</label>
                            <input type="number" name="Fines_price" id="Fines_price" class="form-control prc"
                                value="<?php echo $rs->RentalPrice; ?>">
                        </div>
                    </div>

                    <?php }elseif($rs->endDate ==  date('Y-m-d',$dd)){ ?>
                    <div class="col-4">
                        <div class="form-group prc">
                            <label class="label ">ราคาค่าปรับคืนช้า</label>
                            <input type="number" name="Fines_price" id="Fines_price" class="form-control prc"
                                value="<?php echo $rs->RentalPrice * 2; ?>">
                        </div>
                    </div>

                    <?php }elseif($rs->endDate ==  date('Y-m-d',$dd)){ ?>

                    <div class="col-4">
                        <div class="form-group prc">
                            <label class="label ">ราคาค่าปรับคืนช้า</label>
                            <input type="number" name="Fines_price" id="Fines_price" class="form-control prc"
                                value="<?php echo $rs->RentalPrice * 3; ?>">
                        </div>
                    </div>

                    <?php }else{ ?>

                    <input type="hidden" name="Fines_price" id="Fines_price" class="form-control prc" value="0">

                    <?php }?>

                    <div class="col-4">
                        <!-- <input class="form-check-input" type="checkbox" name="PriceFive" value="0"> คืนเงินมัดจำ 5000 -->
                        <div class="form-group prc">
                            <label class="label">เงินคืนลูกค้า</label>
                            <input type="number" name="PriceFive" id="PriceFive" class="form-control" value="5000" readonly>
                        </div>
                    </div>

                </div>

                <?php
                            echo '<input type="hidden" class="btn btn-danger mt-5" name="id_status" id="id_status" value="12" style="font-size:20px;" required>';
                            echo '<input type="hidden" class="btn btn-danger mt-5" name="id_Status" id="id_Status" value="5" style="font-size:20px;" required>';
                            echo '<button class="btn btn-info mt-5" type="submit" style="font-size:20px;">ยืนยันการคืนรถยนต์</button>';
                            echo '</form>';
                        
                        }

                    }?>

                <script>
                    $('.form-group').on('input', '.prc2', function () {
                        var totalSum = 5000;
                        $('.form-group .prc2').each(function () {
                            var inputVal = $(this).val();
                            if ($.isNumeric(inputVal)) {
                                totalSum -= parseInt(inputVal);
                            }
                        });
                        $('#PriceFive').val(totalSum);
                    });

                    $('.form-group').on('input', '.prc2', function () {
                        var totalSum = 0;
                        $('.form-group .prc2').each(function () {
                            var inputVal = $(this).val();
                            if ($.isNumeric(inputVal)) {
                                totalSum += parseInt(inputVal);
                            }
                        });
                        $('#Total_fines').val(totalSum);
                    });
                </script>

            </div>
        </div>
    </div>
</div>