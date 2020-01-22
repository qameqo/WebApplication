

<div class="container" style="text-align: center;"><br><br><br><br><br>
	<div style="background-color: white; border-radius: 5px;">
	<br>
		<div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-10">
                        <h3 class="panel-title">ข้อมูลการส่งรถยนต์</h3>
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
                                <th data-column-id="Member">เจ้าของรถ</th>
                                <th data-column-id="Status">สถานะ</th>

                                <th data-column-id="Action"></th>
                            </tr>
                        </thead>
						<tbody>

                            <?php foreach ($query as $rs) { 
                            if ($rs->Status == 'กำลังดำเนินการ') {
                                if ($rs->Dayfirst != date('Y-m-d')) {
                            ?>

							<tr>

                                <td><?php echo $rs->idCarregis; ?></td>

								<td><?php echo $rs->Name_Brand; ?></td>
								<td><?php echo $rs->Name_Gen; ?></td>
								<td><?php echo $rs->License; ?></td>
                                <td><?php echo $rs->FName; ?></td>
                                
                                <?php if($rs->Status == 'รออนุมัติ')
                                {
                                    echo'<td><span class="badge badge-primary" style="font-size:13px;">';
                                    echo $rs->Status; 
                                    echo '</span></td>';
                                }
                                else if ($rs->Status == 'ผ่าน') 
                                {
                                    echo'<td><span class="badge badge-info" style="font-size:13px;">';
                                    echo $rs->Status; 
                                    echo '</span></td>';
                                }
                                else if ($rs->Status == 'ไม่ผ่าน') 
                                {
                                    echo'<td><span class="badge badge-default" style="font-size:13px;">';
                                    echo $rs->Status; 
                                    echo '</span></td>';
                                }
                                else if($rs->Status == 'กำลังดำเนินการ')
                                {
                                    echo'<td><span class="badge badge-warning" style="font-size:13px;">';
                                    echo $rs->Status; 
                                    echo '</span></td>';
                                }
                                else if ($rs->Status == 'พร้อม') 
                                {
                                    echo'<td><span class="badge badge-success" style="font-size:13px;">';
                                    echo $rs->Status; 
                                    echo '</span></td>';
                                }
                                else if($rs->Status == 'ยกเลิก')
                                {
                                    echo'<td><span class="badge badge-danger" style="font-size:13px;">';
                                    echo $rs->Status; 
                                    echo '</span></td>';
                                } ?>

								<td>
								
                                <a href="<?php echo site_url('Emp_car/show/').$rs->idCarregis?>" class="btn btn-info btn-sm">View</a>
                    
								</td>
							</tr>

                            <?php }}} ?>

						</tbody>
						<tfoot>
							<tr>
<th data-column-id="Brand">ไอดี</th>
                                <th data-column-id="Brand">ยื่ห้อ</th>
                                <th data-column-id="Generation">รุ่น</th>
                                <th data-column-id="License">ทะเบียน</th>
                                <th data-column-id="Member">เจ้าของรถ</th>
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