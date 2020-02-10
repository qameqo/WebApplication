<div class="container" style="text-align: center;"><br>
    <div style="background-color: white; border-radius: 5px;">
        <div class="row  justify-content-center">
            <div class="col-sm-8 shadow p-3 mb-5 bg-white rounded">
                <h4 class="title">รายละเอียดรถยนต์</h4>

                <form action="<?php echo base_url('Dataregis2/can/'.$idc); ?>" method="POST" class="form-horizontal">

                    <?php $this->db->select('*');
                    $this->db->from('Carregis');
                    $this->db->join('Brand', 'Carregis.id_Brand = Brand.idBrand');
                    $this->db->join('Generation', 'Carregis.id_Gen = Generation.id_Gen');
                    $this->db->join('Member', 'Carregis.id_Member = Member.id_Member');
                    $this->db->join('Seat', 'Carregis.id_Seat = Seat.id_Seat');
                    $this->db->join('Fuel', 'Carregis.idFuel = Fuel.idFuel');
                    $this->db->join('Status_car', 'Carregis.idStatus = Status_car.id_Status');
                    $this->db->where('idCarregis',$idc);
                    $query = $this->db->get();
                    $qq = $query->result_array();
                    
                     ?>

                    <div class="table-responsive">
                        <table class="table table-bordered">

                           <?php foreach($qq as $data){
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
                                <td width="30%"><label>ทะเบียน</label></td>
                                <td width="70%"><?php echo $data['License'];?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>ปีที่ออกทะเบียน</label></td>
                                <td width="70%"><?php echo $data['Yearlicense'];?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>เลขตัวถัง</label></td>
                                <td width="70%"><?php echo $data['Carbody'];?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>ราคาปล่อยเช่า</label></td>
                                <td width="70%"><?php echo number_format($data['RentalPrice'],0)?>&nbsp;บาท/วัน</td>
                            </tr>
                            <tr>
                                <td width="30%"><label>บัญชีธนาคาร</label></td>
                                <td width="70%"><?php echo $data['Bankaccount'];?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>ผู้ลงทะเบียน</label></td>
                                <td width="70%"><?php echo $data['FName']; ?>&nbsp;<?php echo $data['LName']; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>สถานะ</label></td>
                                <?php if($data['Name_Status']== 'รออนุมัติ')
                                {
                                    echo'<td width="70%"><span class="badge badge-primary" style="font-size:13px;">'; ?>
                                    <?php echo $data['Name_Status']; ?>
                                    </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <a href="<?php echo base_url('Dataregis2/can/'.$idc);?>"
                                    onclick="return confirm('คุณต้องการที่จะยกเลิกใช่หรือไม่ ?')"
                                    class="btn btn-danger btn-sm">ยกเลิกการลงทะเบียน</a>
                                    </td>
                                    <?php
                                }
                                else if ($data['Name_Status']== 'อนุมัติ') 
                                {
                                    $idc = $data['idCarregis']; ?>
                                    <td><span class="badge badge-success" style="font-size:13px;"><?php echo $data['Name_Status'];?></span>
                                    &nbsp;&nbsp;&nbsp;<a type="button" class="btn btn-success btn-sm" style="font-size:13px; color:white;"
                                    href="<?php echo base_url('Datecar/gam/'.$idc);?>">กำหนดวันส่งรถ</a></td>
                                    <?php
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
                                }   ?>

                            <?php 
                     
                            if($data['Name_Status']=='ไม่อนุมัติ')
                            {
                                $this->db->select('*');
                                $this->db->from('Not_passed');
                                $this->db->where('idCarregis', $idc);
                                $query = $this->db->get();
                                $qa = $query->result_array();
                                
                                foreach ($qa as $data) {

                                    echo '<tr>
                                    <td width="30%"><label>หมายเหตุ</label></td>
                                    <td width="70%">';
                                    echo $data['Name_not'];
                                    echo '</td></tr>';
                                }
                            } 
                            else if($data['Name_Status']== 'กำลังดำเนินการ')
                            {
                                foreach ($qq as $data) {

                                    echo '<tr>
                                    <td width="30%"><label>วันส่งรถ</label></td>
                                    <td width="70%">';
                                    echo $data['StartDate'];
                                    echo '</td></tr>';
                                }
                            }
                            else if($data['Name_Status']== 'พร้อม')
                            {
                                foreach ($qq as $data) {

                                    echo '<tr>
                                    <td width="30%"><label>วันเริ่มต้น</label></td>
                                    <td width="70%">';
                                    echo $data['StartDate'];
                                    echo '</td></tr>';
                                    echo '<tr>
                                    <td width="30%"><label>วันสิ้นสุด</label></td>
                                    <td width="70%">';
                                    echo $data['EndDate'];
                                    echo '</td></tr>';
                                }
                            }
                            ?>
                            </tr>
                            <?php } ?>
                            <?php 
                         $this->db->select('*');
                         $this->db->from('Images2');
                         $this->db->where('idCarregis',$idc);
                         $query = $this->db->get();
                         $qq = $query->result_array();
                         ?>
                            <?php foreach($qq as $data){ 
                            ?>       
                            <tr>
                                <td width="30%"><label>รูปเอกสารรถยนต์</label></td>
                                <td width="70%">
                                
                                <img src="<?php echo base_url('./img2/'.$data['Name_image2']);?>" style="height: 50px; weight:50px;">
                                
                                </td>
                            </tr>
                            <?php } ?>
                         <?php 
                         $this->db->select('*');
                         $this->db->from('Images');
                         $this->db->where('idCarregis',$idc);
                         $query = $this->db->get();
                         $qq = $query->result_array();
                         
                         ?>
                            <?php foreach($qq as $data){ 
                            ?>

                            <tr>
                                <td width="30%"><label>รูปภาพรถยนต์</label></td>
                                <td width="70%">
                                
                                <img src="<?php echo base_url('./img/'.$data['Name_image']);?>" style="height: 50px; weight:50px;">
                                
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