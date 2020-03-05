<div class="container" style="text-align: center;"><br><br><br><br><br>
	<div style="background-color: white; border-radius: 5px;">
	<br>
		<div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-10">
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
								<td><?php echo $rs->Companyincome + $rs->PriceFive + $rs->Fines_price + $rs->PriceVat;?></td>
								
								
                                <td>
                                <a href="<?php echo site_url('Manager_car_regis/show_rental/').$rs->idRental?>" class="btn btn-info btn-sm" style="font-size:16px;">รายละเอียด</a>
                    
								</td>
							</tr>
                       
                        <?php }} ?>

						</tbody>
						<!-- <tfoot>
							<tr>
                                <th data-column-id="Brand">ไอดี</th>
                                <th data-column-id="Brand">ราคารถยนต์</th>
                                <th data-column-id="Brand">ราคาประกัน</th>
                                <th data-column-id="Brand">ภาษีมูลค่าเพิ่ม (7%)</th>
                                <th data-column-id="Brand">เงินมัดจำการเช่ารถยนต์</th>
                                <th data-column-id="Brand">เงินค่าปรับ</th>
                                <th data-column-id="Brand">รายได้เจ้าของรถ</th>
                                <th data-column-id="Brand">รายได้ทางร้าน</th>
                                <th data-column-id="Generation">รายได้รวมทั้งหมด</th>

                                <th data-column-id="Action"></th>
							</tr>
						</tfoot> -->
                    </table>
                </div>
            </div>
		</div>
		<br>
	</div>
</div>