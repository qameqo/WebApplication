<form action="<?php echo base_url('Dataregis/show'); ?>">
    <div class="col-md-12 text-center"><br>
        <h4 class="" style="color:#000000">ข้อมูลการเช่า</h4>
        <div class="row justify-content-center">
            <div class="col-sm-10 shadow p-4 mb-4 bg-white rounded">
                <?php 
                        
                        $this->db->select('*');
                        $this->db->from('Carregis');
                        $this->db->join('Brand', 'Carregis.Brand = Brand.idBrand');
                        $this->db->join('Generation', 'Carregis.id_Gen = Generation.id_Gen');
                        $this->db->join('Agreement', 'Agreement.idCarregis = Carregis.idCarregis');
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

                                <?php 
							} ?>
                            <?php 
                                $this->db->select('*');
                                $this->db->from('RentalDetail');
                                $this->db->join('Rental', 'RentalDetail.idRent = Rental.idRental');
                                $this->db->join('Agreement', 'RentalDetail.idagree = Agreement.id_Agreement');
                                $this->db->where('idMember', $this->session->userdata('ID'));
                                $query = $this->db->get();
                                $qam = $query->result_array();
                                
                            ?>
                            <?php foreach($qam as $data){ ?>
                                <td><?php echo $data['StartDate'];?></td>
                                <td><?php echo $data['EndDate'];?></td>
                            
                                <!-- <td><span class="badge badge-warning"><?php //echo $data['Status'];?></span></td> -->

                                <?php if($data['rentstatus'] == 'รออนุมัติ')
                                {
                                    echo'<td><span class="badge badge-primary" style="font-size:13px;">';
                                    echo $data['rentstatus']; 
                                    echo '</span></td>';
                                }
                                else if ($data['rentstatus'] == 'ผ่าน') 
                                {   $idc = $data['idCarregis']; ?>
                                    <td><span class="badge badge-success" style="font-size:13px;">ผ่าน</span><a type="button" class="btn btn-success btn-sm" style="font-size:13px; color:white;"
                                    href="<?php echo base_url('Datecar/gam/'.$idc);?>">กำหนดวันส่งรถ</a></td>
                                    <?php
                               } 
                                else if ($data['rentstatus'] == 'ไม่ผ่าน') 
                                {
                                    echo'<td><span class="badge badge-danger" style="font-size:13px;">';
                                    echo $data['rentstatus']; 
                                    echo '</span></td>';
                                }
                                else if($data['rentstatus'] == 'กำลังดำเนินการ')
                                {
                                    echo'<td><span class="badge badge-warning" style="font-size:13px;">';
                                    echo $data['rentstatus']; 
                                    echo '</span></td>';
                                }
                                else if ($data['rentstatus'] == 'พร้อม') 
                                {
                                    echo'<td><span class="badge badge-info" style="font-size:13px;">';
                                    echo $data['rentstatus']; 
                                    echo '</span></td>';
                                }
                                else if($data['rentstatus'] == 'ยกเลิก')
                                {
                                    echo'<td><span class="badge badge-secondary" style="font-size:13px;">';
                                    echo $data['rentstatus']; 
                                    echo '</span></td>';
                                } ?>

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