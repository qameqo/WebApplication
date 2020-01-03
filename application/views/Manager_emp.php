<div class="container" style="text-align: center;"><br><br><br><br><br>
	<div style="background-color: white; border-radius: 5px;">
	<br>
		<div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-10">
                        <h3 class="panel-title">ตารางข้อมูลพนักงาน</h3>
                    </div>
                    <div class="col-md-2" align="right">
                        <button type="button" id="add_button" data-toggle="modal" data-target="#employeeModal" class="btn btn-info btn-xs">Add</button>
                    </div>
                </div>
                
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table id="employee_data" class="table table-striped table-bordered">
                        <thead>
                            <tr>
								<th data-column-id="id">ID</th>
                                <th data-column-id="name">First name</th>
                                <th data-column-id="address">Last name</th>
                                <th data-column-id="row">Row</th>
                                <th data-column-id="Action">Action</th>
                            </tr>
                        </thead>
						<tbody>
							<tr>
								<td>27</td>
								<td>Donna Snider</td>
								<td>Customer Support</td>
								<td>New York</td>
								<td>2011/01/25</td>
							</tr>
						</tbody>
						<tfoot>
							<tr>
								<th data-column-id="id">ID</th>
                                <th data-column-id="name">First name</th>
                                <th data-column-id="address">Last name</th>
                                <th data-column-id="row">Row</th>
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