<form action="<?php echo base_url('Dataregis/show'); ?>">
    <div class="col-md-12 text-center"><br>
        <h4 class="" style="color:#000000">ข้อมูลการเช่า</h4>
        <div class="row justify-content-center">
            <div class="col-sm-10 shadow p-4 mb-4 bg-white rounded">
                <?php 
                        
                        $this->db->select('*');
                        $this->db->from('RentalDetail','Carregis');
                        $this->db->join('Rental', 'Rental.idRental = RentalDetail.idRent');
                        $this->db->join('Brand', 'Brand.idBrand = Carregis.Brand');
                        $this->db->join('Generation', 'Generation.id_Gen = Carregis.id_Gen');
                        $this->db->where('Carregis.idCarregis = RentalDetail.idCarregis');
                        $this->db->where('id_Member', $this->session->userdata('ID'));
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
                                <th data-column-id="Name_image" style="width: 150px;">ทะเบียน</th>
                                <th data-column-id="Name_image" style="width: 200px;">วันเริ่มเช่า</th>
                                <th data-column-id="Name_image" style="width: 200px;">วันส่งคืน</th>
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
                                <td><?php echo $data['Dayfirst'];?></td>
                                <td><?php echo $data['EndDate'];?></td>
                            
                                <!-- <td><span class="badge badge-warning"><?php //echo $data['Status'];?></span></td> -->

                                <?php if($data['Status'] == '1')
                                {
                                    echo'<td><span class="badge badge-primary" style="font-size:13px;">';
                                    echo $data['Status']; 
                                    echo '</span></td>';
                                }
                                else if ($data['Status'] == '2') 
                                {   $idc = $data['Status']; ?>
                                    <td><span class="badge badge-success" style="font-size:13px;">ผ่าน</span><a type="button" class="btn btn-success btn-sm" style="font-size:13px; color:white;"
                                    href="<?php echo base_url('Datecar/gam/'.$idc);?>">กำหนดวันส่งรถ</a></td>
                                    <?php
                               } 
                                else if ($data['Status'] == '3') 
                                {
                                    echo'<td><span class="badge badge-danger" style="font-size:13px;">';
                                    echo $data['Status']; 
                                    echo '</span></td>';
                                }
                                else if($data['Status'] == '4')
                                {
                                    echo'<td><span class="badge badge-warning" style="font-size:13px;">';
                                    echo $data['Status']; 
                                    echo '</span></td>';
                                }
                                else if ($data['Status'] == '5') 
                                {
                                    echo'<td><span class="badge badge-info" style="font-size:13px;">';
                                    echo $data['Status']; 
                                    echo '</span></td>';
                                }
                                else if($data['Status'] == '6')
                                {
                                    echo'<td><span class="badge badge-secondary" style="font-size:13px;">';
                                    echo $data['Status']; 
                                    echo '</span></td>';
                                }
                                else if($data['Status'] == '7')
                                {
                                    echo'<td><span class="badge badge-secondary" style="font-size:13px;">';
                                    echo $data['Status']; 
                                    echo '</span></td>';
                                }
                                else if($data['Status'] == '8')
                                {
                                    echo'<td><span class="badge badge-secondary" style="font-size:13px;">';
                                    echo $data['Status']; 
                                    echo '</span></td>';
                                }
                                ?>

                                <td>
                                <?php $idc = $data['idCarregis']; ?>
                                    <a href="<?php echo site_url('Dataregis2/show/'.$idc); ?>" class="btn btn-info btn-sm">View</a>
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