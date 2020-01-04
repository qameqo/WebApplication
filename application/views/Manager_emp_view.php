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
								<th data-column-id="id">ID</th>
                                <th data-column-id="name">Email</th>
                                <th data-column-id="name">Password</th>

                                <th data-column-id="name">First name</th>
                                <th data-column-id="address">Last name</th>
                                <th data-column-id="name">Address</th>
                                <th data-column-id="name">Tel.</th>

                                <th data-column-id="row">Row</th>
                                <th data-column-id="row">Status</th>

                                <th data-column-id="Action">Action</th>
                            </tr>
                        </thead>
						<tbody>

                            <?php foreach ($query as $rs) { ?>

							<tr>
								<td><?php echo $rs->id_Employee; ?></td>
								<td><?php echo $rs->Email; ?></td>
								<td><?php echo $rs->Password; ?></td>

								<td><?php echo $rs->FName; ?></td>
								<td><?php echo $rs->LName; ?></td>
								<td><?php echo $rs->Address; ?></td>
								<td><?php echo $rs->Tel; ?></td>

								<td><?php echo $rs->Row; ?></td>
								<td><?php echo $rs->Status; ?></td>

								<td>
								
                        			<!-- <input class="btn btn-success btn-sm " name="view_btn" type="button" data-toggle="modal" data-target="#viewModal" value="View" id="view_btn" > -->
                        			<input class="btn btn-warning btn-sm " name="edit_btn" type="button" data-toggle="modal" data-target="#editModal" value="Edit" id="edit_btn" >
                        			<input class="btn btn-danger btn-sm " name="del_btn" type="button" data-toggle="modal" data-target="#delModal" value="Del" id="del_btn" >
                    
								</td>
							</tr>

                            <?php } ?>

						</tbody>
						<tfoot>
							<tr>
                            <th data-column-id="id">ID</th>
                                <th data-column-id="name">Email</th>
                                <th data-column-id="name">Password</th>

                                <th data-column-id="name">First name</th>
                                <th data-column-id="address">Last name</th>
                                <th data-column-id="name">Address</th>
                                <th data-column-id="name">Tel.</th>

                                <th data-column-id="row">Row</th>
                                <th data-column-id="row">Status</th>

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