<form action="<?php echo base_url('Dataregis/show'); ?>">
    <div class="col-md-12 text-center"><br>
        <h4 class="" style="color:#000000">ข้อมูลการเช่า</h4>
        <div class="row justify-content-center">
            <div class="col-sm-10 shadow p-4 mb-4 bg-white rounded">
                <?php
                    // $query = $this->db->query('SELECT RentalDetail.*,Rental.* FROM RentalDetail,Rental WHERE Rental.idRental = RentalDetail.idRent and Rental.idMember="61"');
                    $this->db->select('*');
                    $this->db->from('Rental');
                    $this->db->join('Carregis','Carregis.idCarregis = Rental.idCarregis');
                    $this->db->join('Brand', 'Brand.idBrand = Carregis.idBrand');
                    $this->db->join('Generation', 'Generation.id_Gen = Carregis.id_Gen');
                    $this->db->join('Status_car', 'Status_car.id_Status = Rental.id_status');
                    $this->db->order_by('idRental', 'desc');
                    $this->db->where('Rental.id_Member', $this->session->userdata('ID'));
                    $query = $this->db->get();
                    $qone = $query->result_array();  
                    
                    // echo '<pre>';
                    // print_r($qone);
                    // echo '</pre>';

                    // exit;
                ?>
                <div class="col-md-12 mb-5 text-center">
                    <br>
                    <table id="employee_data" class="table table-striped table-bordered text-center"
                        style="width: 1200px;">
                        <thead>
                            <tr>
                                <th data-column-id="Name_image" style="width: 150px;">ยี่ห้อ</th>
                                <th data-column-id="Name_image" style="width: 150px;">รุ่น</th>
                                <th data-column-id="Name_image" style="width: 150px;">ทะเบียน</th>
                                <th data-column-id="Name_image" style="width: 200px;">วันเริ่มเช่า</th>
                                <th data-column-id="Name_image" style="width: 200px;">วันส่งคืน</th>
                                <th data-column-id="Name_image" style="width: 150px;">สถานะ</th>
                                <th data-column-id="Name_image" style="width: 150px;"></th>
                            </tr>
                        </thead>
                        <tbody>
                           <?php 
                      
                        //    $query = $this->db->query('SELECT Carregis.*, Brand.Name_Brand, Generation.Name_Gen FROM `Carregis` INNER JOIN Brand on Brand.idBrand = Carregis.Brand INNER JOIN Generation on Generation.id_Gen = Carregis.id_Gen WHERE (SELECT RentalDetail.idRentalDetail FROM RentalDetail WHERE RentalDetail.idCarregis = Carregis.idCarregis)');
                        //    $qm = $query->result_array();
                            ?>
                            <tr>
                           
                            <?php foreach($qone as $data){ ?>
                                <td><?php echo $data['Name_Brand'];?></td>
                                <td><?php echo $data['Name_Gen'];?></td>
                                <td><?php echo $data['License'];?></td>
                                <td><?php echo $data['startDate'];?></td>
                                <td><?php echo $data['endDate'];?></td>
                             
                        
                            
                                <?php if($data['id_status'] == '1')
                                {
                                    echo'<td><span class="badge badge-primary" style="font-size:13px;">';
                                    echo $data['Name_Status']; 
                                    echo '</span></td>';
                                }
                                else if ($data['id_status'] == '2') 
                                {   $idc = $data['Name_Status']; ?>
                                    <td><span class="badge badge-success" style="font-size:13px;"><?php echo $data['Name_Status']; ?></span></td>
                                    <?php
                               } 
                                else if ($data['id_status'] == '3') 
                                {
                                    echo'<td><span class="badge badge-danger" style="font-size:13px;">';
                                    echo $data['Name_Status']; 
                                    echo '</span></td>';
                                }
                                else if($data['id_status'] == '4')
                                {
                                    echo'<td><span class="badge badge-warning" style="font-size:13px;">';
                                    echo $data['Name_Status']; 
                                    echo '</span></td>';
                                }
                                else if ($data['id_status'] == '5') 
                                {
                                    echo'<td><span class="badge badge-info" style="font-size:13px;">';
                                    echo $data['Name_Status']; 
                                    echo '</span></td>';
                                }
                                else if($data['id_status'] == '6')
                                {
                                    echo'<td><span class="badge badge-secondary" style="font-size:13px;">';
                                    echo $data['Name_Status']; 
                                    echo '</span></td>';
                                }
                                else if($data['id_status'] == '7')
                                {
                                    echo'<td><span class="badge badge-secondary" style="font-size:13px;">';
                                    echo $data['Name_Status']; 
                                    echo '</span></td>';
                                }
                                else if($data['id_status'] == '8')
                                {
                                    echo'<td><span class="badge badge-secondary" style="font-size:13px;">';
                                    echo $data['Name_Status']; 
                                    echo '</span></td>';
                                } 
                                else if($data['id_status']== '9')
                                { ?><?php $idr = $data['idRental']; ?>
                                     <td><span class="badge badge-primary" style="font-size:13px;"><?php echo $data['Name_Status']; ?></span><a type="button" class="btn btn-primary btn-sm" style="font-size:13px; color:white;"
                                    href="<?php echo base_url('Deposit/de/'.$idr);?>">ชำระเงินมัดจำ</a></td>
                                    <?php
                                }
                                else if($data['id_status']== '10')
                                {
                                    echo'<td><span class="badge badge-success" style="font-size:13px;">';
                                    echo $data['Name_Status'];  
                                    echo '</span></td>';
                                }
                                else if($data['id_status']== '11')
                                {
                                    echo'<td><span class="badge badge-success" style="font-size:13px;">';
                                    echo $data['Name_Status'];  
                                    echo '</span></td>';
                                }  
                                else if($data['id_status']== '12')
                                {
                                    echo'<td><span class="badge badge-success" style="font-size:13px;">';
                                    echo $data['Name_Status'];  
                                    echo '</span></td>';
                                }  
                                
                                ?>
                            
                                <td>
                    
                                <?php $idr = $data['idRental']; ?>
                                    <a href="<?php echo site_url('Datarent2/show/'.$idr); ?>" class="btn btn-info btn-sm">รายละเอียด</a>
                                </td>
                               
                            </tr>
                            <?php } ?>
                        </tbody>
                        
                    </table>
                    
                </div>
            </div>
        </div>
</form>