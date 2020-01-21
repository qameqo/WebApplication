<div class="container" style="text-align: center;"><br><br><br><br><br>
	<div style="background-color: white; border-radius: 5px;">
	<br>
		<div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-10">
                        <h3 class="panel-title">ตารางข้อมูลพนักงาน</h3>
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
								<th data-column-id="id">รหัสพนักงาน</th>

                                <th data-column-id="name">ชื่อ</th>
                                <th data-column-id="address">นามสกุล</th>
                                <th data-column-id="row">ตำแหน่ง</th>

                                <th data-column-id="Action"></th>
                            </tr>
                        </thead>
						<tbody>

                            <?php foreach ($query as $rs) { ?>

							<tr>
								<td><?php echo $rs->id_Employee; ?></td>

								<td><?php echo $rs->F_Name; ?></td>
								<td><?php echo $rs->LName; ?></td>
								<td><?php echo $rs->Row; ?></td>

								<td>
								
                                    <a href="<?php echo site_url('Manager_emp/show/').$rs->id_Employee; ?>" class="btn btn-default btn-sm">View</a>
                                    <a href="<?php echo site_url('Manager_emp/edit/').$rs->id_Employee; ?>" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="<?php echo site_url('Manager_emp/del_emp/').$rs->id_Employee; ?>" onclick="return confirm('คุณต้องการลบหรือไม่ ?');" class="btn btn-danger btn-sm">Delete</a>
                    
								</td>
							</tr>

                            <?php } ?>

						</tbody>
						<tfoot>
							<tr>
                                <th data-column-id="id">รหัสพนักงาน</th>

                                <th data-column-id="name">ชื่อ</th>
                                <th data-column-id="address">นามสกุล</th>
                                <th data-column-id="row">ตำแหน่ง</th>

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