<div class="container" style="text-align: center;"><br><br><br><br><br>
	<div style="background-color: white; border-radius: 5px;">
	<br>
		<div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-10">
                        <h3 class="panel-title">ตารางข้อมูลราคารถยนต์</h3>
                    </div>
                    <div class="col-md-2" align ="right">
                        <a href="<?php echo site_url('Manager_car_price/add');?>" class="btn btn-info btn-sm">ADD</a>
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
								
                                    <a href="<?php echo site_url('Manager_car_price/edit/').$rs->id_Gen ?>" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="<?php echo site_url('Manager_car_price/del_car_price/').$rs->id_Gen ?>" onclick="return confirm('คุณต้องการลบหรือไม่ ?');" class="btn btn-danger btn-sm">Delete</a>

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