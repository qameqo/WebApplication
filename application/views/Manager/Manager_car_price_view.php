<div class="container" style="text-align: center;"><br><br><br><br><br>
	<div style="background-color: white; border-radius: 5px;">
	<br>
		<div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-9">
                        <h3 class="panel-title">ตารางข้อมูลราคารถยนต์</h3>
                    </div>
                    <div class="col-1">
                        <a id="add_button" data-toggle="modal" data-target="#brandModal" href="<?php echo site_url('Manager_car_price/add');?>" class="btn btn-info btn-sm mr-5" style="font-size: 16px">เพิ่มยี่ห้อ</a>
                    </div>
                    <div class="col-2">
                        <a id="add_button" data-toggle="modal" data-target="#genModal" href="<?php echo site_url('Manager_car_price/add_2');?>" class="btn btn-info btn-sm  mr-5" style="font-size: 16px">เพิ่มรุ่นและราคา</a>
                    </div>
                </div>
                
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table id="car_price_data" class="table table-striped table-bordered">
                        <thead>
                            <tr>

                                <th data-column-id="Brand">ยี่ห้อ</th>
                                <th data-column-id="Model">รุ่น</th>
                                <th data-column-id="Price">ราคา</th>
                                <th data-column-id="Action"></th>
                            </tr>
                        </thead>
						<tbody>

                            <?php foreach ($query as $rs) { ?>

							<tr>
								<td><?php echo $rs->Name_Brand ?></td>
								<td><?php echo $rs->Name_Gen; ?></td>
                                <td><?php echo $rs->Price; ?></td>
								<td>
								
                                    <a href="<?php echo site_url('Manager_car_price/edit/').$rs->id_Gen ?>" class="btn btn-warning btn-sm" style="font-size: 16px">แก้ไข</a>
                                    <a href="<?php echo site_url('Manager_car_price/del_car_price/').$rs->id_Gen ?>" onclick="return confirm('คุณต้องการลบหรือไม่ ?');" class="btn btn-danger btn-sm" style="font-size: 16px">ลบ</a>

								</td>
							</tr>

                            <?php } ?>

						</tbody>
						<tfoot>
							<tr>

                                <th data-column-id="Brand">ยี่ห้อ</th>
                                <th data-column-id="Model">รุ่น</th>
                                <th data-column-id="Price">ราคา</th>

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