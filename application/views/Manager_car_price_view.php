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
                        <button type="button" id="add_button" data-toggle="modal" data-target="#employeeModal" class="btn btn-info btn-sm">Add</button>
                    </div>
                </div>
                
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table id="employee_data" class="table table-striped table-bordered">
                        <thead>
                            <tr>
								<th data-column-id="id">ID</th>

                                <th data-column-id="Model">Model</th>
                                <th data-column-id="Type">Type</th>
                                <th data-column-id="Brand">Brand</th>
                                <th data-column-id="Price">Price</th>

                                <th data-column-id="Action">Action</th>
                            </tr>
                        </thead>
						<tbody>

                            <?php foreach ($query as $rs) { ?>

							<tr>
								<td><?php echo $rs->id_car_price ?></td>

								<td><?php echo $rs->Model; ?></td>
								<td><?php echo $rs->Type; ?></td>
								<td><?php echo $rs->Brand; ?></td>
                                <td><?php echo $rs->Price; ?></td>

								<td>
								
                                    <a href="<?php echo site_url('Manager_car_price/edit/').$rs->id_car_price ?>" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="<?php //echo site_url('Manager_emp/del_emp/').$rs->id_car_price ?>" onclick="return confirm('คุณต้องการลบหรือไม่ ?');" class="btn btn-danger btn-sm">Delete</a>
                    
								</td>
							</tr>

                            <?php } ?>

						</tbody>
						<tfoot>
							<tr>
                                <th data-column-id="id">ID</th>

                                <th data-column-id="Model">Model</th>
                                <th data-column-id="Type">Type</th>
                                <th data-column-id="Brand">Brand</th>
                                <th data-column-id="Price">Price</th>

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