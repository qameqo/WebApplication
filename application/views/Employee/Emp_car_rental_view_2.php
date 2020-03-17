<div class="container" style="text-align: center;"><br><br><br><br><br>
	<div style="background-color: white; border-radius: 5px;">
	<br>
		<div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-10">
                        <h3 class="panel-title">จัดการข้อมูลการรับรถยนต์เช่า</h3>
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
                                <th data-column-id="Brand">ชื่อสมาชิก</th>
                                <th data-column-id="Brand">วันรับรถยนต์</th>
                                <th data-column-id="Generation">ราคารวม</th>
                                <th data-column-id="License">สถานะ</th>

                                <th data-column-id="Action"></th>
                            </tr>
                        </thead>
						<tbody>

                        <?php foreach ($query as $rs) { ?>

                        <?php 
                            if ($rs->id_status == '10') 
                            { 
                                if ($rs->startDate == date('Y-m-d')) {
                            
                        ?>

							<tr>

                                <td width="5%"><?php echo $rs->idRental; ?></td>
                                <td><?php echo $rs->Name_Brand; ?></td>
								<td><?php echo $rs->Name_Gen; ?></td>
								<td><?php echo $rs->FName; ?>&nbsp;<?php echo $rs->LName; ?></td>
								<td><?php echo $rs->startDate; ?></td>
								<td><?php echo $rs->totalprice; ?></td>

                                <?php if($rs->id_status == '1')
                                {
                                    echo'<td><span class="badge badge-primary" style="font-size:13px;">';
                                    echo $rs->Name_Status; 
                                    echo '</span></td>';
                                }
                                else if ($rs->id_status == '2') 
                                {
                                    echo'<td><span class="badge badge-info" style="font-size:13px;">';
                                    echo $rs->Name_Status; 
                                    echo '</span></td>';
                                }
                                else if ($rs->id_status == '3') 
                                {
                                    echo'<td><span class="badge badge-default" style="font-size:13px;">';
                                    echo $rs->Name_Status; 
                                    echo '</span></td>';
                                }
                                else if($rs->id_status == '4')
                                {
                                    echo'<td><span class="badge badge-warning" style="font-size:13px;">';
                                    echo $rs->Name_Status; 
                                    echo '</span></td>';
                                }
                                else if ($rs->id_status == '5') 
                                {
                                    echo'<td><span class="badge badge-success" style="font-size:13px;">';
                                    echo $rs->Name_Status; 
                                    echo '</span></td>';
                                }
                                else if($rs->id_status == '6')
                                {
                                    echo'<td><span class="badge badge-danger" style="font-size:13px;">';
                                    echo $rs->Name_Status; 
                                    echo '</span></td>';
                                }
                                else if($rs->id_status == '7')
                                {
                                    echo'<td><span class="badge badge-danger" style="font-size:13px;">';
                                    echo $rs->Name_Status; 
                                    echo '</span></td>';
                                }
                                else if($rs->id_status == '8')
                                {
                                    echo'<td><span class="badge badge-danger" style="font-size:13px;">';
                                    echo $rs->Name_Status; 
                                    echo '</span></td>';
                                }
                                else if($rs->id_status == '9')
                                {
                                    echo'<td><span class="badge badge-warning" style="font-size:13px;">';
                                    echo $rs->Name_Status; 
                                    echo '</span></td>';
                                }
                                else if($rs->id_status == '10')
                                {
                                    echo'<td><span class="badge badge-success" style="font-size:13px;">';
                                    echo $rs->Name_Status; 
                                    echo '</span></td>';
                                }
                                else if($rs->id_status == '11')
                                {
                                    echo'<td><span class="badge badge-primary" style="font-size:13px;">';
                                    echo $rs->Name_Status; 
                                    echo '</span></td>';
                                }
                                else if($rs->id_status == '12')
                                {
                                    echo'<td><span class="badge badge-success" style="font-size:13px;">';
                                    echo $rs->Name_Status; 
                                    echo '</span></td>';
                                } 
                                else if($rs->id_status == '13')
                                {
                                    echo'<td><span class="badge badge-default" style="font-size:13px;">';
                                    echo $rs->Name_Status; 
                                    echo '</span></td>';
                                }
                                else if($rs->id_status == '14')
                                {
                                    echo'<td><span class="badge badge-warning" style="font-size:13px;">';
                                    echo $rs->Name_Status; 
                                    echo '</span></td>';
                                } else if($rs->id_status == '15')
                                {
                                    echo'<span class="badge badge-warning" style="font-size:13px;">';
                                    echo $rs->Name_Status; 
                                    
                                } ?>

                                <td>
								
                                <a href="<?php echo site_url('Emp_rental/show_rental/').$rs->idRental?>" class="btn btn-info btn-sm" style="font-size:16px;">รายะละเอียด</a>
                    
								</td>
							</tr>

                        <?php }}} ?>

						</tbody>
						<tfoot>
							<tr>
                                <th data-column-id="Brand">ไอดี</th>
                                <th data-column-id="Brand">ยื่ห้อ</th>
                                <th data-column-id="Generation">รุ่น</th>
                                <th data-column-id="Brand">ชื่อสมาชิก</th>
                                <th data-column-id="Brand">วันรับรถยนต์</th>
                                <th data-column-id="Generation">ราคารวม</th>
                                <th data-column-id="License">สถานะ</th>

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