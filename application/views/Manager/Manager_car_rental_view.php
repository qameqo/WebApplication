<div class="container" style="text-align: center;"><br><br><br><br><br>
	<div style="background-color: white; border-radius: 5px;">
	<br>
		<div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-10">
                        <h3 class="panel-title">ข้อมูลการเช่ารถยนต์</h3>
                    </div>
                </div>
                
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table id="car_price_data" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th data-column-id="Brand">ไอดี</th>
                                <th data-column-id="Brand">ชื่อสมาชิก</th>
                                <th data-column-id="Brand">ยี่ห้อ</th>
                                <th data-column-id="Brand">รุ่น</th>
                                <th data-column-id="Brand">วันทำการ</th>
                                <th data-column-id="Generation">ราคารวม</th>
                                <th data-column-id="License">สถานะ</th>

                                <th data-column-id="Action"></th>
                            </tr>
                        </thead>
						<tbody>

                        <?php foreach ($query as $rs) {                                 
                            
                        ?>
                            

							<tr>

                                <td width="5%"><?php echo $rs->idRental; ?></td>

								<td><?php echo $rs->FName; ?>&nbsp;<?php echo $rs->LName; ?></td>
								<td><?php echo $rs->Name_Brand; ?></td>
								<td><?php echo $rs->Name_Gen; ?></td>
								<td><?php echo $rs->Datebooking; ?></td>
								<td><?php echo $rs->PriceCar; ?></td>

                                <?php if($rs->idstatus == '1')
                                {
                                    echo'<td><span class="badge badge-primary" style="font-size:13px;">';
                                    echo $rs->Name_Status; 
                                    echo '</span></td>';
                                }
                                else if ($rs->idstatus == '2') 
                                {
                                    echo'<td><span class="badge badge-info" style="font-size:13px;">';
                                    echo $rs->Name_Status; 
                                    echo '</span></td>';
                                }
                                else if ($rs->idstatus == '3') 
                                {
                                    echo'<td><span class="badge badge-default" style="font-size:13px;">';
                                    echo $rs->Name_Status; 
                                    echo '</span></td>';
                                }
                                else if($rs->idstatus == '4')
                                {
                                    echo'<td><span class="badge badge-warning" style="font-size:13px;">';
                                    echo $rs->Name_Status; 
                                    echo '</span></td>';
                                }
                                else if ($rs->idstatus == '5') 
                                {
                                    echo'<td><span class="badge badge-success" style="font-size:13px;">';
                                    echo $rs->Name_Status; 
                                    echo '</span></td>';
                                }
                                else if($rs->idstatus == '6')
                                {
                                    echo'<td><span class="badge badge-danger" style="font-size:13px;">';
                                    echo $rs->Name_Status; 
                                    echo '</span></td>';
                                }
                                else if($rs->idstatus == '7')
                                {
                                    echo'<td><span class="badge badge-danger" style="font-size:13px;">';
                                    echo $rs->Name_Status; 
                                    echo '</span></td>';
                                }
                                else if($rs->idstatus == '8')
                                {
                                    echo'<td><span class="badge badge-danger" style="font-size:13px;">';
                                    echo $rs->Name_Status; 
                                    echo '</span></td>';
                                }
                                else if($rs->idstatus == '9')
                                {
                                    echo'<td><span class="badge badge-warning" style="font-size:13px;">';
                                    echo $rs->Name_Status; 
                                    echo '</span></td>';
                                }
                                else if($rs->idstatus == '10')
                                {
                                    echo'<td><span class="badge badge-success" style="font-size:13px;">';
                                    echo $rs->Name_Status; 
                                    echo '</span></td>';
                                }
                                else if($rs->idstatus == '11')
                                {
                                    echo'<td><span class="badge badge-primary" style="font-size:13px;">';
                                    echo $rs->Name_Status; 
                                    echo '</span></td>';
                                } ?>

                                <td>
								
                                <a href="<?php echo site_url('Manager_car_regis/show_rental/').$rs->idRental?>" class="btn btn-info btn-sm" style="font-size:16px;">รายละเอียด</a>

                                <?php if($rs->idstatus == ''){ ?>

                                <a href="<?php echo site_url('Manager_car_regis/del_rental/').$rs->idRental ?>" class="btn btn-danger btn-sm" style="font-size: 16px">ลบ</a>

                                <?php }elseif ($rs->idstatus == '6') { ?>

                                <a href="<?php echo site_url('Manager_car_regis/del_rental/').$rs->idRental ?>" class="btn btn-danger btn-sm" style="font-size: 16px">ลบ</a>

                                <?php }elseif ($rs->idstatus == '7') { ?>

                                <a href="<?php echo site_url('Manager_car_regis/del_rental/').$rs->idRental ?>" class="btn btn-danger btn-sm" style="font-size: 16px">ลบ</a>

                                <?php } ?>

                    
								</td>
							</tr>
                       
                        <?php } ?>

						</tbody>
						<tfoot>
							<tr>
                                <th data-column-id="Brand">ไอดี</th>
                                <th data-column-id="Brand">ชื่อสมาชิก</th>
                                <th data-column-id="Brand">ยี่ห้อ</th>
                                <th data-column-id="Brand">รุ่น</th>
                                <th data-column-id="Brand">วันทำการ</th>
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