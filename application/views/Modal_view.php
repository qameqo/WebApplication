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
                        <label for="Email">Email address</label>
                        <input type="email" class="form-control" name="Email" id="Email" aria-describedby="emailHelp"
                            placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small>
                    </div>

                    <div class="form-group">
                        <label for="Password">Password</label>
                        <input type="password" class="form-control" name="Password" id="Password"
                            placeholder="Password">
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
                <div class="modal-footer">
                    <input type="submit" name="adding_btn" id="adding_btn" class="btn btn-success" value="Add" />
                </div>
            </form>
        </div>
    </div>
</div>


<!-- ******************************************************************************************************************************** -->


<div id="viewModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">

                <h4 class="modal-title">Detail Employee</h4>
                <button type="button" align="right" class="close" data-dismiss="modal">&times;</button>

            </div>
            <!-- Modal body -->
            <div class="modal-body" id="app_detail">
                <div class="table-responsive">
                    <table class="table table-bordered">

                        <?php foreach ($query as $rs) { ?>

                        <tr>
                            <td width="30%"><label>ID</label></td>
                            <td width="70%"><?php echo $rs->id_Employee; ?></td>
                        </tr>
                        <tr>
                            <td width="30%"><label>Email</label></td>
                            <td width="70%"></td>
                        </tr>
                        <tr>
                            <td width="30%"><label>Password</label></td>
                            <td width="70%"></td>
                        </tr>
                        <tr>
                            <td width="30%"><label>First name</label></td>
                            <td width="70%"></td>
                        </tr>
                        <tr>
                            <td width="30%"><label>Last name</label></td>
                            <td width="70%"></td>
                        </tr>
                        <tr>
                            <td width="30%"><label>Address</label></td>
                            <td width="70%"></td>
                        </tr>
                        <tr>
                            <td width="30%"><label>Tel.</label></td>
                            <td width="70%"></td>
                        </tr>
                        <tr>
                            <td width="30%"><label>Row</label></td>
                            <td width="70%"></td>
                        </tr>
                        <tr>
                            <td width="30%"><label>Status</label></td>
                            <td width="70%"></td>
                        </tr>


                        <?php } ?>
                    </table>
                </div>

            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>