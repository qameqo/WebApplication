<div class="container" style="text-align: center;"><br>
    <div style="background-color: white; border-radius: 5px;">
        <div class="row  justify-content-center">
            <div class="col-sm-8 shadow p-3 mb-5 bg-white rounded">
                <h4 class="title">รายละเอียดการเช่า</h4>

                <form action="<?php echo base_url('Datarent2/can/'.$idr); ?>" method="POST" class="form-horizontal">

                   <?php
                    // $query = $this->db->query('SELECT RentalDetail.*,Rental.* FROM RentalDetail,Rental WHERE Rental.idRental = RentalDetail.idRent and Rental.idMember="61"');
                    $this->db->select('*');
                    $this->db->from('Rental');
                    $this->db->join('Member', 'Member.id_Member = Rental.idMember');
                    $this->db->join('RentalDetail', 'Rental.idRental = RentalDetail.idRent');
                    $this->db->join('Carregis','Carregis.idCarregis = RentalDetail.idCarregis');
                    $this->db->join('Brand', 'Brand.idBrand = Carregis.id_Brand');
                    $this->db->join('Generation', 'Generation.id_Gen = Carregis.id_Gen');
                    $this->db->join('Status_car', 'Status_car.id_Status = Rental.idstatus');
                    $this->db->join('Seat', 'Seat.id_Seat = Carregis.id_Seat');
                    $this->db->join('Fuel', 'Fuel.idFuel = Carregis.idFuel');
                    $this->db->join('Type_Insurance', 'Type_Insurance.id_Insurance = Rental.id_Insurance');
                    
                    $this->db->where('idRental',$idr);
                    $query = $this->db->get();
                    $qone = $query->result_array();  
                    
                    // echo '<pre>';
                    // print_r($qone);
                    // echo '</pre>';

                    // exit;
                ?>

                    <div class="table-responsive">
                        <table class="table table-bordered">

                           <?php foreach($qone as $data){
                           ?>
                            <tr>
                                <td width="30%"><label>ยี่ห้อ</label></td>
                                <td width="70%"><?php echo $data['Name_Brand'];?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>รุ่น</label></td>
                                <td width="70%"><?php echo $data['Name_Gen'];?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>ทะเบียน</label></td>
                                <td width="70%"><?php echo $data['License'];?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>ปีรถยนต์</label></td>
                                <td width="70%"><?php echo $data['Yearcar'];?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>สี</label></td>
                                <td width="70%"><?php echo $data['Color'];?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>ที่นั่ง</label></td>
                                <td width="70%"><?php echo $data['Number_Seat'];?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>เชื้อเพลิง</label></td>
                                <td width="70%"><?php echo $data['Name_Fuel'];?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>ระบบเกียร์</label></td>
                                <td width="70%"><?php echo $data['Gear'];?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>เลขไมล์</label></td>
                                <td width="70%"><?php echo $data['Mileage'];?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>ราคารวมรวมvat 7%</label></td>
                                <td width="70%"><?php echo $data['totalprice'];?><span>&nbsp;บาท</span></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>ราคารถ</label></td>
                                <td width="70%"><?php echo $data['PriceCar'];?><span>&nbsp;บาท</span></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>ราคาประกัน</label></td>
                                <td width="70%"><?php echo $data['PriceIns'];?><span>&nbsp;บาท</span></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>วันเริ่มเช่า</label></td>
                                <td width="70%"><?php echo $data['StartDate'];?><span></span></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>วันสิ้นสุด</label></td>
                                <td width="70%"><?php echo $data['endDate'];?><span></span></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>ประกันภัย</label></td>
                                <td width="70%"><?php echo $data['Name_Insurance'];?><span></span></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>สถานะ</label></td>
                                <?php if($data['Name_Status']== 'รออนุมัติ')
                                {
                                    echo'<td width="70%"><span class="badge badge-primary" style="font-size:13px;">';
                                    echo $data['Name_Status'];
                                    echo '</span></td>';
                                }
                                else if ($data['Name_Status']== 'อนุมัติ') 
                                {
                                    echo'<td width="70%"><span class="badge badge-success" style="font-size:13px;">';
                                    echo $data['Name_Status']; 
                                    echo '</span></td>';
                                }
                                else if ($data['Name_Status']== 'ไม่อนุมัติ') 
                                {
                                    echo'<td width="70%"><span class="badge badge-danger" style="font-size:13px;">';
                                    echo $data['Name_Status'];  
                                    echo '</span></td>';
                                }
                                else if($data['Name_Status']== 'กำลังดำเนินการ')
                                {
                                    echo'<td width="70%"><span class="badge badge-warning" style="font-size:13px;">';
                                    echo $data['Name_Status'];  
                                    echo '</span></td>';
                                }
                                else if ($data['Name_Status']== 'พร้อม') 
                                {
                                    echo'<td width="70%"><span class="badge badge-info" style="font-size:13px;">';
                                    echo $data['Name_Status'];  
                                    echo '</span></td>';
                                }
                                else if($data['Name_Status']== 'ยกเลิก')
                                {
                                    echo'<td width="70%"><span class="badge badge-secondary" style="font-size:13px;">';
                                    echo $data['Name_Status'];  
                                    echo '</span></td>';
                                } 
                                else if($data['Name_Status']== 'ไม่มีการส่งรถ')
                                {
                                    echo'<td width="70%"><span class="badge badge-secondary" style="font-size:13px;">';
                                    echo $data['Name_Status'];  
                                    echo '</span></td>';
                                } 
                                else if($data['Name_Status']== 'ไม่ว่าง')
                                {
                                    echo'<td width="70%"><span class="badge badge-secondary" style="font-size:13px;">';
                                    echo $data['Name_Status'];  
                                    echo '</span></td>';
                                } 
                                else if($data['Name_Status']== 'รอการชำระเงินมัดจำ')
                                { ?>
                                    <td><span class="badge badge-primary" style="font-size:13px;">รอการชำระเงินมัดจำ</span>&nbsp;&nbsp;&nbsp;<a type="button" class="btn btn-primary btn-sm" style="font-size:13px; color:white;"
                                   href="<?php echo base_url('Deposit/de/'.$idr);?>">ชำระเงินมัดจำ</a>&nbsp;&nbsp;
                                   <button type="submit" class="btn btn-danger">ยกเลิกการจอง</button>
                                   </td>
                                   <?php
                                }
                                else if($data['Name_Status']== 'จองรถ')
                                {
                                    echo'<td width="70%"><span class="badge badge-success" style="font-size:13px;">';
                                    echo $data['Name_Status'];  
                                    echo '</span></td>';
                                }
                                else if($data['Name_Status']== 'กำลังใช้รถ')
                                {
                                    echo'<td width="70%"><span class="badge badge-success" style="font-size:13px;">';
                                    echo $data['Name_Status'];  
                                    echo '</span></td>';
                                }  
                                ?>
                            </tr>
                            <tr>
                                <td width="30%"><label>ผู้เช่า</label></td>
                                <td width="70%"><?php echo $data['FName']; ?>&nbsp;<?php echo $data['LName']; ?></td>
                            </tr>
                            <?php } ?>
                            <?php 
                         $this->db->select('*');
                         $this->db->from('Images3');
                         $this->db->where('idrent',$idr);
                         $query = $this->db->get();
                         $qq = $query->result_array();
                        
                         ?>
                            <?php foreach($qq as $data){ 
                            ?>       
                            <tr>
                                <td width="30%"><label>รูปสำหรับการเช่า</label></td>
                                <td width="70%">
                                
                                <img src="<?php echo base_url('./img3/'.$data['Name_image3']);?>" style="height: 50px; weight:50px;">
                                
                                </td>
                            </tr>
                            <?php } ?>
                           
                        </table>
                    </div>

                    <!-- <input type="hidden" name="idCarregis" id="idCarregis" class="form-control" value=""/> -->
                    <!-- // echo $rs->idCarregis;  -->
                    <!--  //if ($rs->Status == 'ผ่าน') {
                        echo '<input type="hidden" name="Status" id="Status" value="พร้อม" class="form-control" required>';
                        echo '<button type="submit" class="btn btn-warning mt-5" style="font-size:20px;" onclick="return confirm("คุณต้องการยืนยันหรือไม่ ?");">ยืนยันการรถยนต์</button>';
                    //}else if($rs->Status == ''){
                        echo '<input type="submit" name="Status" id="Status" value="ผ่าน" class="btn btn-success mt-5 mr-5" style="font-size:20px;" required>';
                        // echo '<input type="submit" name="Status" id="Status" value="ไม่ผ่าน" class="btn btn-danger mt-5" style="font-size:20px;" required>';
                        // echo '<button type="submit" class="btn btn-success mt-5" style="font-size:20px;" onclick="return confirm("คุณต้องการยืนยันหรือไม่ ?");">ผ่าน</button>';
                    //} -->


                </form>
            </div>
        </div>
    </div>
</div>