
<!-- SELECT * FROM `Problem` INNER JOIN Rental on Rental.idRental = Problem.idRental INNER JOIN Carregis on Carregis.idCarregis = Rental.idCarregis INNER JOIN Brand on Brand.idBrand = Carregis.idBrand INNER JOIN Generation on Generation.id_Gen = Carregis.id_Gen -->
<!-- WHERE Carregis.id_Member = '84' AND (Problem.Detail_2 IS NOT NUll and Problem.Date_2 Is NOT Null ) -->

<form action="<?php echo base_url('Dataregis/show'); ?>">
    <div class="col-md-12 text-center"><br>
        <h4 class="" style="color:#000000">ข้อมูลความเสียหายรถยนต์</h4>
        <div class="row justify-content-center">
            <div class="col-sm-10 shadow p-4 mb-4 bg-white rounded">
                <?php 
                        
                       //$this->db->query('SELECT * FROM Rental INNER JOIN RentalDetail on RentalDetail.idRent = Rental.idRental INNER JOIN Carregis on Carregis.idCarregis = RentalDetail.idCarregis 
                       //INNER JOIN Status_car on Status_car.id_Status = Rental.id_status WHERE Carregis.id_Member = '61' and Rental.id_status = "11"  ORDER BY Rental.idRental DESC');


                    //    $this->db->query("SELECT * FROM `Problem` INNER JOIN Rental on Rental.idRental = Problem.idRental INNER JOIN Carregis on Carregis.idCarregis = Rental.idCarregis INNER JOIN Brand on Brand.idBrand = Carregis.idBrand INNER JOIN Generation on Generation.id_Gen = Carregis.id_Gen
                    //    WHERE Carregis.id_Member = $this->session->userdata('ID') AND (Problem.Detail_2 IS NOT NUll and Problem.Date_2 Is NOT NUll )");
                        $this->db->select('*');
                        $this->db->from('Problem');
                        $this->db->join('Rental', 'Rental.idRental = Problem.idRental');
                        $this->db->join('Carregis', 'Carregis.idCarregis = Rental.idCarregis');
                        $this->db->join('Generation', 'Generation.id_Gen = Carregis.id_Gen');
                        $this->db->join('Brand', 'Brand.idBrand = Carregis.idBrand');
                        $this->db->where('Carregis.id_Member', $this->session->userdata('ID'));
                        // $this->db->where('Rental.id_status', 11);
                        $this->db->where('Problem.Detail_2 IS NOT NULL');
                        $this->db->where('Problem.Date_2 IS NOT NULL');
                        $this->db->order_by('id_Problem', 'desc');
                        $query =  $this->db->get();
                        $qq = $query->result_array();
                        
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
                                <th data-column-id="Name_image" style="width: 200px;">วันที่เช่า</th>
                                <th data-column-id="Name_image" style="width: 200px;">ความเสียหาย</th>
                                <th data-column-id="Name_image" style="width: 250px;">วันที่เกิดเหตุ</th>
                            
                            
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($qq as $data){
								
                                ?>
                            <tr>
                                <td><?php echo $data['Name_Brand'];?></td>
                                <td><?php echo $data['Name_Gen'];?></td>
                                <td><?php echo $data['License'];?></td>
                                <td><?php echo $data['startDate']?> - <?php echo $data['endDate'];?></td>
                                <td><?php echo $data['Detail_2'];?></td>
                                <td><?php echo $data['Date'];?></td>
                                
                                <!-- <td><span class="badge badge-warning"><?php //echo $data['Status'];?></span></td> -->
                              
                            </tr>
                            <?php 
							} ?>
                        </tbody>
                    </table>
                   
                </div>
            </div>
        </div>
</form>