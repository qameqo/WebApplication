
<div class="container" style="text-align: center;"><br><br><br><br><br>
	<div style="background-color: white; border-radius: 5px;">
	<br>
		<div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-10">
                        <h3 class="panel-title">ข้อมูลรถยนต์สำรอง</h3>
                    </div>
                </div>
                
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table id="car_price_data" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th data-column-id="Brand">ไอดี</th>
                                <th data-column-id="Brand">ยื่ห้อ</th>
                                <th data-column-id="Generation">รุ่น</th>
                                <th data-column-id="License">ทะเบียน</th>
                                <th data-column-id="Member">ราคา</th>
                                <th data-column-id="Member">ที่นั่ง</th>
                                <th data-column-id="Status">สถานะ</th>

                                <th data-column-id="Action"></th>
                            </tr>
                        </thead>
						<tbody>

                            <?php 
                            
                            foreach ($query as $rs) { 

                                if($rs->id_Member == 61 && $rs->id_Status == 5){ //โชรถสำรอง

                                $query = $this->db->query('SELECT * FROM Rental 
                                                            INNER JOIN Carregis ON Carregis.idCarregis = Rental.idCarregis
                                                            INNER JOIN Brand ON Brand.idBrand = Carregis.idBrand
                                                            INNER JOIN Generation ON Generation.id_Gen = Carregis.id_Gen 
                                                            WHERE Rental.idRental = '.$rs->idRental);

                                // $query = $this->db->get();

                                $qq = $query->result();

                                foreach ($qq as $data) {

                                    
                                    // echo "<pre>";
                                    // print_r ($data->id_Seat);
                                    // echo "</pre>";

                                    // $data->id_Seat < $rs->id_Seat && $data->Price < $rs->RentalPrice
                                    
                                    if ( $data->id_Seat > $rs->id_Seat) {
                                        # code...
                                    }elseif($data->Price < $rs->RentalPrice){
                                    }else{

                            ?>

							<tr>

                                <td width="5%"><?php echo $rs->idCarregis; ?></td>

								<td><?php echo $rs->Name_Brand; ?></td>
								<td><?php echo $rs->Name_Gen; ?></td>
								<td><?php echo $rs->License; ?></td>
                                <td><?php echo $rs->RentalPrice; ?></td>
                                <td><?php echo $rs->id_Seat; ?></td>
                                
                                <?php if($rs->id_Status == '1')
                                {
                                    echo'<td><span class="badge badge-primary" style="font-size:13px;">';
                                    echo $rs->Name_Status; 
                                    echo '</span></td>';
                                }
                                else if ($rs->id_Status == '2') 
                                {
                                    echo'<td><span class="badge badge-info" style="font-size:13px;">';
                                    echo $rs->Name_Status; 
                                    echo '</span></td>';
                                }
                                else if ($rs->id_Status == '3') 
                                {
                                    echo'<td><span class="badge badge-default" style="font-size:13px;">';
                                    echo $rs->Name_Status; 
                                    echo '</span></td>';
                                }
                                else if($rs->id_Status == '4')
                                {
                                    echo'<td><span class="badge badge-warning" style="font-size:13px;">';
                                    echo $rs->Name_Status; 
                                    echo '</span></td>';
                                }
                                else if ($rs->id_Status == '5') 
                                {
                                    echo'<td><span class="badge badge-success" style="font-size:13px;">';
                                    echo $rs->Name_Status; 
                                    echo '</span></td>';
                                }
                                else if($rs->id_Status == '6')
                                {
                                    echo'<td><span class="badge badge-danger" style="font-size:13px;">';
                                    echo $rs->Name_Status; 
                                    echo '</span></td>';
                                }
                                else if($rs->id_Status == '7')
                                {
                                    echo'<td><span class="badge badge-danger" style="font-size:13px;">';
                                    echo $rs->Name_Status; 
                                    echo '</span></td>';
                                }
                                else if($rs->id_Status == '8')
                                {
                                    echo'<td><span class="badge badge-danger" style="font-size:13px;">';
                                    echo $rs->Name_Status; 
                                    echo '</span></td>';
                                }
                                else if($rs->id_Status == '9')
                                {
                                    echo'<td><span class="badge badge-warning" style="font-size:13px;">';
                                    echo $rs->Name_Status; 
                                    echo '</span></td>';
                                }
                                else if($rs->id_Status == '10')
                                {
                                    echo'<td><span class="badge badge-success" style="font-size:13px;">';
                                    echo $rs->Name_Status; 
                                    echo '</span></td>';
                                }
                                else if($rs->id_Status == '11')
                                {
                                    echo'<td><span class="badge badge-primary" style="font-size:13px;">';
                                    echo $rs->Name_Status; 
                                    echo '</span></td>';
                                }  ?>

								<td>

                                <?php
                                
                                    echo '<form action="'; 
                                    echo site_url('Emp_problem/change_car/'.$rs->idRental); 
                                    echo '" method="POST" class="form-horizontal">';
                                    echo '<input type="hidden" name="idRental" id="idRental" class="form-control" value="';
                                    echo $rs->idRental; 
                                    echo '">';
                                    echo '<input type="hidden" name="idCarregis" id="idCarregis" class="form-control" value="';
                                    echo $rs->idCarregis; 
                                    echo '">';
                                    echo '<input type="hidden" class="btn btn-danger mt-5 mr-5" name="id_status" id="id_status" value="11" style="font-size:20px;" required>';
                                    echo '<input type="hidden" class="btn btn-danger mt-5 mr-5" name="id_Status" id="id_Status" value="8" style="font-size:20px;" required>';

                                    echo '<input type="hidden" class="btn btn-danger mt-5 mr-5" name="id_Status3" id="id_Status3" value="13" style="font-size:20px;" required>';
                                    echo '<button class="btn btn-sm btn-warning" type="submit" style="font-size:16px;">ส่งเปลี่ยนรถยนต์</button>';
                                    echo '</form>';

                                ?>
								
                                <!-- <a href="<?php echo site_url('Emp_car/show/').$rs->idRental?>" class="btn btn-warning btn-sm" style="font-size:16px;">ส่งรถยนต์</a> -->
                    
								</td>
							</tr>

                            
                            <?php
                                    
                                }
                            }}

                        } ?>


						</tbody>
						<tfoot>
							<tr>
                                <th data-column-id="Brand">ไอดี</th>
                                <th data-column-id="Brand">ยื่ห้อ</th>
                                <th data-column-id="Generation">รุ่น</th>
                                <th data-column-id="License">ทะเบียน</th>
                                <th data-column-id="Member">ราคา</th>
                                <th data-column-id="Member">ที่นั่ง</th>
                                <th data-column-id="Status">สถานะ</th>

                                <th data-column-id="Action"></th>
							</tr>
						</tfoot>
                    </table>
                </div>
            </div>
		</div>
		<br>
	</div>
</div>



