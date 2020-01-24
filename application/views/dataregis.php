<form action="<?php echo base_url('Dataregis/show'); ?>">
    <div class="col-md-12 text-center"><br>
        <h4 class="" style="color:#000000">ข้อมูลการลงทะเบียนรถยนต์</h4>
        <div class="row justify-content-center">
            <div class="col-sm-10 shadow p-4 mb-4 bg-white rounded">
                <?php 
                        
                        $this->db->select('*');
                        $this->db->from('Carregis');
                        $this->db->join('Brand', 'Carregis.Brand = Brand.idBrand');
                        $this->db->join('Generation', 'Carregis.id_Gen = Generation.id_Gen');
                        $this->db->join('Status_car', 'Carregis.Status = Status_car.id_Status');
                        $this->db->where('id_Member', $this->session->userdata('ID'));
                        $this->db->order_by('idCarregis', 'desc');
						$query = $this->db->get();
                        $qq = $query->result_array();
                        
						?>
                <div class="col-md-12 mb-5 text-center">
                    <br>
                    <table id="employee_data" class="table table-striped table-bordered text-center"
                        style="width: 1200px;">
                        <thead>
                            <tr>
                                <th data-column-id="Name_image" style="width: 150px;">ยี่ห้อ</th>
                                <th data-column-id="Name_image" style="width: 200px;">รุ่น</th>
                                <th data-column-id="Name_image" style="width: 200px;">ทะเบียน</th>
                                <th data-column-id="Name_image" style="width: 100px;">สี</th>
                                <th data-column-id="Name_image" style="width: 250px;">เลขตัวถัง</th>
                                <th data-column-id="Name_image" style="width: 150px;">สถานะ</th>
                                <th data-column-id="Name_image" style="width: 150px;"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($qq as $data){
								
                                ?>
                            <tr>
                                <td><?php echo $data['Name_Brand'];?></td>
                                <td><?php echo $data['Name_Gen'];?></td>
                                <td><?php echo $data['License'];?></td>
                                <td><?php echo $data['Color'];?></td>
                                <td><?php echo $data['Carbody'];?></td>
                                <!-- <td><span class="badge badge-warning"><?php //echo $data['Status'];?></span></td> -->

                                <?php if($data['Name_Status'] == 'รออนุมัติ')
                                {
                                    echo'<td><span class="badge badge-primary" style="font-size:13px;">';
                                    echo $data['Name_Status']; 
                                    echo '</span></td>';
                                }
                                else if ($data['Name_Status'] == 'อนุมัติ') 
                                {   $idc = $data['idCarregis']; ?>
                                    <td><span class="badge badge-success" style="font-size:13px;">อนุมัติ</span><a type="button" class="btn btn-success btn-sm" style="font-size:13px; color:white;"
                                    href="<?php echo base_url('Datecar/gam/'.$idc);?>">กำหนดวันส่งรถ</a></td>
                                    <?php
                               } 
                                else if ($data['Name_Status'] == 'ไม่อนุมัติ') 
                                {
                                    echo'<td><span class="badge badge-danger" style="font-size:13px;">';
                                    echo $data['Name_Status']; 
                                    echo '</span></td>';
                                }
                                else if($data['Name_Status'] == 'กำลังดำเนินการ')
                                {
                                    echo'<td><span class="badge badge-warning" style="font-size:13px;">';
                                    echo $data['Name_Status']; 
                                    echo '</span></td>';
                                }
                                else if ($data['Name_Status'] == 'พร้อม') 
                                {
                                    echo'<td><span class="badge badge-info" style="font-size:13px;">';
                                    echo $data['Name_Status']; 
                                    echo '</span></td>';
                                }
                                else if($data['Name_Status'] == 'ยกเลิก')
                                {
                                    echo'<td><span class="badge badge-secondary" style="font-size:13px;">';
                                    echo $data['Name_Status']; 
                                    echo '</span></td>';
                                }
                                else if($data['Name_Status']== 'ไม่มีการส่งรถ')
                                {
                                    echo'<td><span class="badge badge-secondary" style="font-size:13px;">';
                                    echo $data['Name_Status'];  
                                    echo '</span></td>';
                                }
                                else if($data['Name_Status']== 'ไม่ว่าง')
                                {
                                    echo'<td><span class="badge badge-secondary" style="font-size:13px;">';
                                    echo $data['Name_Status'];  
                                    echo '</span></td>';
                                } ?>

                                <td>
                                <?php $idc = $data['idCarregis']; ?>
                                    <a href="<?php echo site_url('Dataregis2/show/'.$idc); ?>" class="btn btn-info btn-sm">รายละเอียด</a>
                                </td>

                            </tr>
                            <?php 
							} ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</form>