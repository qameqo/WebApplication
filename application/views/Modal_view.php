<div id="employeeModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">Add Employee</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <form action="<?php echo site_url('manager_emp/add_emp'); ?>" method="POST" id="insert_form">

                <div class="modal-body">

                    <input type="hidden" name="id_emp" id="id_emp" class="form-control">

                    <div class="form-group">
                        <label for="Username">Username</label>
                        <input type="text" name="Username" id="Username" class="form-control" placeholder="Username" required>
                    </div>

                    <div class="form-group">
                        <label for="Password">Password</label>
                        <input type="password" class="form-control" name="Password" id="Password"
                            placeholder="Password" required>
                    </div>

                    <div class="form-row">
                        <div class="col">
                            <div class="form-group">
                                <label for="First name">First name</label>
                                <input type="text" name="FName" id="FName" class="form-control" placeholder="First name" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="Last name">Last name</label>
                                <input type="text" name="LName" id="LName" class="form-control" placeholder="Last name" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="Address">Address</label>
                        <textarea class="form-control" name="Address" id="Address" rows="3" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="Tel">Tel.</label>
                        <input type="text" class="form-control" name="Tel" id="Tel" placeholder="0881234567" required>
                    </div>

                    <div class="form-group">
                        <label for="Row">Row select</label>
                        <select class="form-control selectpicker" data-style="btn btn-link" name="Row" id="Row">
                            <option>พนักงาน</option>
                            <option>ช่างซ่อมบำรุง</option>
                            <option>เจ้าหน้าที่ประกัน</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" name="adding_btn" id="adding_btn" class="btn btn-success" value="Add" />
                </div>
            </form>
        </div>
    </div>
</div>

<div id="StatusModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">Add Status</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <form action="<?php echo site_url('manager_emp/add_emp'); ?>" method="POST" id="insert_form">

                <div class="modal-body">

                    <input type="hidden" name="id_emp" id="id_emp" class="form-control">

                    <div class="form-group">
                        <label for="Username">Username</label>
                        <input type="text" name="Username" id="Username" class="form-control" placeholder="Username" required>
                    </div>

                    <div class="form-group">
                        <label for="Password">Password</label>
                        <input type="password" class="form-control" name="Password" id="Password"
                            placeholder="Password" required>
                    </div>

                    <div class="form-row">
                        <div class="col">
                            <div class="form-group">
                                <label for="First name">First name</label>
                                <input type="text" name="FName" id="FName" class="form-control" placeholder="First name" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="Last name">Last name</label>
                                <input type="text" name="LName" id="LName" class="form-control" placeholder="Last name" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="Address">Address</label>
                        <textarea class="form-control" name="Address" id="Address" rows="3" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="Tel">Tel.</label>
                        <input type="text" class="form-control" name="Tel" id="Tel" placeholder="0881234567" required>
                    </div>

                    <div class="form-group">
                        <label for="Row">Row select</label>
                        <select class="form-control selectpicker" data-style="btn btn-link" name="Row" id="Row">
                            <option>พนักงาน</option>
                            <option>ช่างซ่อมบำรุง</option>
                            <option>เจ้าหน้าที่ประกัน</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" name="adding_btn" id="adding_btn" class="btn btn-success" value="Add" />
                </div>
            </form>
        </div>
    </div>
</div>

