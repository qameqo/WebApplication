<div class="container" style="text-align: center;"><br><br><br><br><br>
	<div style="background-color: white; border-radius: 5px;">
	<br>
		<div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-9">
                        <h3 class="panel-title">ข้อมูลรายได้ทั้งหมด</h3>
                        
                    </div>
                    
                </div>

            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table id="car_price_data" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th data-column-id="Brand">รหัสการเช่า</th>
                                
                                <th data-column-id="Brand">ยี่ห้อ</th>
                                <th data-column-id="Brand">รุ่น</th>
                                <th data-column-id="Brand">วันเริ่มเช่า</th>
                                <th data-column-id="Brand">วันคืนรถ</th>
                                <th data-column-id="Brand">วันคืนจริง</th>
                                <th data-column-id="Generation">รายได้รวม</th>

                                <th data-column-id="Action"></th>
                            </tr>
                        </thead>
						<tbody>
                        
                        <?php foreach ($query as $rs) {       
                              
                     
                            if($rs->id_status == '12'){
                            
                        ?>
                            

							<tr>

                                <td width="5%"><?php echo $rs->idRental; ?></td>
								<td><?php echo $rs->Name_Brand; ?></td>
								<td><?php echo $rs->Name_Gen; ?></td>
								<td><?php echo $rs->startDate; ?></td>
								<td><?php echo $rs->endDate; ?></td>
								<td><?php echo $rs->ReturnDate; ?></td>
                                <td><b><?php    $sum = number_format($rs->Companyincome + $rs->PriceFive + $rs->Fines_price + $rs->PriceVat,0);
                                                echo $sum;?></b>&nbsp;บาท</td>
                               
								
                                <td>
                                <a href="<?php echo site_url('Manager_car_regis/show_rental/').$rs->idRental?>" class="btn btn-info btn-sm" style="font-size:16px;">รายละเอียด</a>
                    
								</td>
							</tr>
                       
                        <?php }} ?>

						</tbody>
						
                    </table>

                </div>
            </div>

            <?php
            // $query = $this->db->query('SELECT SUM(Companyincome), SUM(PriceFive), SUM(Fines_price), SUM(PriceVat) FROM Rental');
            $this->db->select('SUM(Companyincome) + SUM(PriceFive) + SUM(Fines_price) + SUM(PriceVat) as total', FALSE);
            $this->db->from('Rental');
            $query = $this->db->get();

            $result = $query->result_array();
            foreach($result as $data){
            ?>

            <h3>รายได้รวมทั้งหมด <?php echo $data['total']; ?> บาท</h3>

            <?php } ?>

		</div>
		<br>
	</div>
</div>