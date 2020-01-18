<div class="container" style="text-align: center;"><br>
    <div style="background-color: white; border-radius: 5px;">
        <div class="row  justify-content-center">
            <div class="col-sm-8 shadow p-3 mb-5 bg-white rounded">
                <h4 class="title">รายละเอียดรถยนต์</h4>

                <form action="" method="POST" class="form-horizontal">

                    <?php $this->db->select('*');
                    $this->db->from('Carregis');
                    $this->db->join('Brand', 'Carregis.Brand = Brand.idBrand');
                    $this->db->join('Generation', 'Carregis.id_Gen = Generation.id_Gen');
                    $this->db->join('Member', 'Carregis.id_Member = Member.id_Member');
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
                                <td width="70%"><?php echo $data['Seat'];?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>เชื้อเพลิง</label></td>
                                <td width="70%"><?php echo $data['Fuel'];?></td>
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
                                <td width="70%"><?php echo $data['RentalPrice'];?><span>&nbsp;บาท/วัน</span></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>สถานะ</label></td>
                                <?php if($data['Status']== 'รออนุมัติ')
                                {
                                    echo'<td width="70%"><span class="badge badge-primary" style="font-size:13px;">';
                                    echo $data['Status'];  
                                    echo '</span></td>';
                                }
                                else if ($data['Status']== 'ผ่าน') 
                                {
                                    echo'<td width="70%"><span class="badge badge-success" style="font-size:13px;">';
                                    echo $data['Status']; 
                                    echo '</span></td>';
                                }
                                else if ($data['Status']== 'ไม่ผ่าน') 
                                {
                                    echo'<td width="70%"><span class="badge badge-danger" style="font-size:13px;">';
                                    echo $data['Status'];  
                                    echo '</span></td>';
                                }
                                else if($data['Status']== 'กำลังดำเนินการ')
                                {
                                    echo'<td width="70%"><span class="badge badge-warning" style="font-size:13px;">';
                                    echo $data['Status'];  
                                    echo '</span></td>';
                                }
                                else if ($data['Status']== 'พร้อม') 
                                {
                                    echo'<td width="70%"><span class="badge badge-info" style="font-size:13px;">';
                                    echo $data['Status'];  
                                    echo '</span></td>';
                                }
                                else if($data['Status']== 'ยกเลิก')
                                {
                                    echo'<td width="70%"><span class="badge badge-secondary" style="font-size:13px;">';
                                    echo $data['Status'];  
                                    echo '</span></td>';
                                } ?>
                            </tr>
                            <tr>
                                <td width="30%"><label>ผู้ลงทะเบียน</label></td>
                                <td width="70%"><?php echo $data['FName']; ?></td>
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
                                <td width="30%"><label>รูปภาพ</label></td>
                                <td width="70%">
                                
                                <img src="<?php echo base_url('./pic/'.$data['Name_image']);?>" style="height: 50px; weight:50px;">
                                
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