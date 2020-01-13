<div class="container" style="text-align: center;"><br><br><br><br><br>
	<div style="background-color: white; border-radius: 5px;">
	<br>
		<div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-10">
                        <h3 class="panel-title">ตารางข้อมูลลงทะเบียนรถยนต์</h3>
                    </div>
                </div>
                
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table id="car_price_data" class="table table-striped table-bordered">
                        <thead>
                            <tr>
								<th data-column-id="id">ID</th>

                                <th data-column-id="Brand">Brand</th>
                                <th data-column-id="Generation">Generation</th>
                                <th data-column-id="License">License</th>
                                <th data-column-id="Member">Member</th>
                                <th data-column-id="Status">Status</th>

                                <th data-column-id="Action">Action</th>
                            </tr>
                        </thead>
						<tbody>

                            <?php foreach ($query as $rs) { ?>

							<tr>
								<td><?php echo $rs->idCarregis ?></td>

								<td><?php echo $rs->Brand; ?></td>
								<td><?php echo $rs->Generation; ?></td>
								<td><?php echo $rs->License; ?></td>
                                <td><?php echo $rs->id_Member; ?></td>
                                <td><?php echo $rs->Status; ?></td>

								<td>
								
                                    <a href="<?php echo site_url('Manager_car_regis/show/').$rs->idCarregis ?>" class="btn btn-info btn-sm">View</a>
                    
								</td>
							</tr>

                            <?php } ?>

						</tbody>
						<tfoot>
							<tr>
                                <th data-column-id="id">ID</th>

                                <th data-column-id="Brand">Brand</th>
                                <th data-column-id="Generation">Generation</th>
                                <th data-column-id="License">License</th>
                                <th data-column-id="Member">Member</th>
                                <th data-column-id="Status">Status</th>

                                <th data-column-id="Action">Action</th>
							</tr>
						</tfoot>
                    </table>
                </div>
            </div>
		</div>
		<br>
	</div>
</div>