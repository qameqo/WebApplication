<div class="container" style="text-align: center;"><br><br><br><br><br>
    <div style="background-color: white; border-radius: 5px;">
        <div class="row  justify-content-center">
            <div class="col-sm-8 shadow p-3 mb-5 bg-white rounded"> 
            <h4 class="title">Edit Employee</h4>

                <form action="<?php echo site_url('Manager_emp/edit_emp'); ?>" method="POST" class="form-horizontal">


                    <input type="hidden" name="id_Employee" id="id_Employee" class="form-control" value="<?php echo $rs_edit->id_Employee; ?>">

                    <div class="form-row">
                        <div class="col">
                            <label for="Email">Email address</label>
                            <input type="email" class="form-control" name="Email" id="Email" aria-describedby="emailHelp"
                                placeholder="Enter email" value="<?php echo $rs_edit->Email; ?>">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with
                                anyone
                                else.</small>
                        </div>
                        <div class="col">
                            <label for="Password">Password</label>
                            <input type="text" class="form-control" name="Password" id="Password"
                                placeholder="Password" value="<?php echo $rs_edit->Password; ?>">
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col">
                            <label for="FName">First name</label>
                            <input type="text" name="FName" id="FName" class="form-control" placeholder="First name" value="<?php echo $rs_edit->FName; ?>">
                        </div>
                        <div class="col">
                            <label for="LName">Last name</label>
                            <input type="text" name="LName" id="LName" class="form-control" placeholder="Last name" value="<?php echo $rs_edit->LName; ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="Address">Address</label>
                        <input type="text" class="form-control" name="Address" id="Address" value="<?php echo $rs_edit->Address; ?>">
                    </div>

                    <div class="form-group">
                        <label for="Tel">Tel.</label>
                        <input type="text" class="form-control" name="Tel" id="Tel" placeholder="0881234567" value="<?php echo $rs_edit->Tel; ?>">
                    </div>

                    <div class="form-row">
                        <div class="col">
                            <label for="Row">Row select</label>
                            <select class="form-control selectpicker" data-style="btn btn-link" name="Row" id="Row" >
                                <option><?php echo $rs_edit->Row; ?></option>
                                <option>พนักงาน</option>
                                <option>ช่างซ่อมบำรุง</option>
                                <option>เจ้าหน้าที่ประกัน</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="Row">Status select</label>
                            <select class="form-control selectpicker" data-style="btn btn-link" name="Status" id="Status">
                                <option><?php echo $rs_edit->Status; ?></option>
                                <option>1</option>
                                <option>0</option>
                            </select>
                        </div>
                    </div>

                    

                    <button type="submit" class="btn btn-success mt-4">Edit</button>
                </form>
            </div>
        </div>
    </div>
</div>