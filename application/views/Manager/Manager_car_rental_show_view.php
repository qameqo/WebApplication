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
                                <td width="30%"><label>ทะเบียน</label></td>
                                <td width="70%"><?php echo $data->License; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>จังหวัดที่ออกทะเบียน</label></td>
                                <td width="70%"><?php echo $data->Province; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>ราคาปล่อยเช่า</label></td>
                                <td width="70%"><?php echo $data->RentalPrice; ?></td>
                            </tr>

                            <?php }} ?>
                            
                    </table>    
                </div>

            </div>
        </div>
    </div>
</div>