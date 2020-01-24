<form action="<?php echo base_url('Dataregis/show'); ?>">
    <div class="col-md-12 text-center"><br>
        <h4 class="" style="color:#000000">ข้อมูลการเช่า</h4>
        <div class="row justify-content-center">
            <div class="col-sm-10 shadow p-4 mb-4 bg-white rounded">
                <?php
                    // $query = $this->db->query('SELECT RentalDetail.*,Rental.* FROM RentalDetail,Rental WHERE Rental.idRental = RentalDetail.idRent and Rental.idMember="61"');
                    $this->db->select('*');
                    $this->db->from('RentalDetail');
                    $this->db->from('Rental');
                    $this->db->where('Rental.idRental = RentalDetail.idRent');
                    $this->db->where('idMember', $this->session->userdata('ID'));
                    $query = $this->db->get();
                    $qone = $query->result_array();     
                ?>
                <?php 
                        
                        $this->db->select('*');
                        $this->db->from('RentalDetail');
                        $this->db->join('Rental', 'Rental.idRental = RentalDetail.idRent');
                        $this->db->join('Carregis','Carregis.idCarregis = RentalDetail.idCarregis');
                        $this->db->where('idMember', $this->session->userdata('ID'));
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
                           <?php 
                      
                           $query = $this->db->query('SELECT Carregis.*, Brand.Name_Brand, Generation.Name_Gen FROM `Carregis` INNER JOIN Brand on Brand.idBrand = Carregis.Brand INNER JOIN Generation on Generation.id_Gen = Carregis.id_Gen WHERE (SELECT RentalDetail.idRentalDetail FROM RentalDetail WHERE RentalDetail.idCarregis = Carregis.idCarregis)');
                           $qm = $query->result_array();
                            ?>
                            <tr>
                            <?php foreach ($qone as $data){ ?>
                            <?php foreach($qm as $data){ ?>
                                <td><?php echo $data['Name_Brand'];?></td>
                                <td><?php echo $data['Name_Gen'];?></td>
                                <td><?php echo $data['License'];?></td>
                            <?php } ?>
                                <?php foreach($qq as $data){
                                ?>
                                <td><?php echo $data['StartDate'];?></td>
                                <td><?php echo $data['endDate'];?></td>
                                <?php 
							} ?>
                            <?php 
                            $this->db->select('*');
                            $this->db->from('Rental');
                            $this->db->join('Status_car', 'Status_car.id_Status = Rental.rentstatus');
                            $this->db->where('idMember',$this->session->userdata('ID'));
                            
                            $query = $this->db->get();
                            $qa = $query->result_array();
                            ?>
                                <!-- <td><span class="badge badge-warning"><?php //echo $data['Status'];?></span></td> -->
                            <?php foreach($qa as $data){?>
                                <?php if($data['rentstatus'] == '1')
                                {
                                    echo'<td><span class="badge badge-primary" style="font-size:13px;">';
                                    echo $data['Name_Status']; 
                                    echo '</span></td>';
                                }
                                else if ($data['rentstatus'] == '2') 
                                {   $idc = $data['Name_Status']; ?>
                                    <td><span class="badge badge-success" style="font-size:13px;">ผ่าน</span><a type="button" class="btn btn-success btn-sm" style="font-size:13px; color:white;"
                                    href="<?php echo base_url('Datecar/gam/'.$idc);?>">กำหนดวันส่งรถ</a></td>
                                    <?php
                               } 
                                else if ($data['rentstatus'] == '3') 
                                {
                                    echo'<td><span class="badge badge-danger" style="font-size:13px;">';
                                    echo $data['Name_Status']; 
                                    echo '</span></td>';
                                }
                                else if($data['rentstatus'] == '4')
                                {
                                    echo'<td><span class="badge badge-warning" style="font-size:13px;">';
                                    echo $data['Name_Status']; 
                                    echo '</span></td>';
                                }
                                else if ($data['rentstatus'] == '5') 
                                {
                                    echo'<td><span class="badge badge-info" style="font-size:13px;">';
                                    echo $data['Name_Status']; 
                                    echo '</span></td>';
                                }
                                else if($data['rentstatus'] == '6')
                                {
                                    echo'<td><span class="badge badge-secondary" style="font-size:13px;">';
                                    echo $data['Name_Status']; 
                                    echo '</span></td>';
                                }
                                else if($data['rentstatus'] == '7')
                                {
                                    echo'<td><span class="badge badge-secondary" style="font-size:13px;">';
                                    echo $data['Name_Status']; 
                                    echo '</span></td>';
                                }
                                else if($data['rentstatus'] == '8')
                                {
                                    echo'<td><span class="badge badge-secondary" style="font-size:13px;">';
                                    echo $data['Name_Status']; 
                                    echo '</span></td>';
                                }
                                ?>
                                 <?php 
							} ?>
                                <td>
                                <?php foreach($qq as $data){
                                ?>
                                <?php $idc = $data['idCarregis']; ?>
                                    <a href="<?php echo site_url('Dataregis2/show/'.$idc); ?>" class="btn btn-info btn-sm">View</a>
                                </td>
                                <?php } ?>
                            </tr>
                                <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</form>