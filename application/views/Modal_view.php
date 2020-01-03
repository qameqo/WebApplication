
<div id="employeeModal" class="modal fade">
    <div class="modal-dialog">
        <form method="post" id="employee_form">
            <div class="modal-content">

                <div class="modal-header">
                    <h4 class="modal-title">Add Employee</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <form action="<?php echo site_url('manager_emp'); ?>" method="POST" id="insert_form" >

                    <div class="modal-body">

                        <input type="hidden" name="id_emp" id="id_emp" class="form-control">

                        <div class="form-group">
                            <label for="Email">Email address</label>
                            <input type="email" class="form-control" name="Email" id="Email" aria-describedby="emailHelp" placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>

                        <div class="form-group">
                            <label for="Password">Password</label>
                            <input type="password" class="form-control" name="Password" id="Password" placeholder="Password">
                        </div>

                        <div class="form-row">
                            <div class="col">
                            <input type="text" name="Fname" id="Fname" class="form-control" placeholder="First name">
                            </div>
                            <div class="col">
                            <input type="text" name="Lname" id="Lname" class="form-control" placeholder="Last name">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="Address">Address</label>
                            <textarea class="form-control" name="Address" id="Address" rows="3"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="Tel">Tel.</label>
                            <input type="text" class="form-control" name="Tel" id="Tel" placeholder="0881234567">
                        </div>

                        <input type="hidden" name="Status" id="Status" value="1" class="form-control">

                        <div class="form-group">
                            <label for="Row">Row select</label>
                            <select class="form-control selectpicker" data-style="btn btn-link" name="Row" id="Row">
                            <option>พนักงาน</option>
                            <option>ช่างซ่อมบำรุง</option>
                            <option>เจ้าหน้าที่ประกัน</option>
                            </select>
                        </div>
                    </div>

                </form>

                <div class="modal-footer">
                    <input type="hidden" name="employee_id" id="employee_id" />
                    <input type="hidden" name="operation" id="operation" value="Add" />
                    <input type="submit" name="action" id="action" class="btn btn-success" value="Add" />
                </div>

            </div>
        </form>
    </div>
</div>