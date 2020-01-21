<div class="container" style="text-align: center;"><br><br><br><br><br>
    <div style="background-color: white; border-radius: 5px;">
        <div class="row  justify-content-center">
            <div class="col-sm-8 shadow p-3 mb-5 bg-white rounded"> 
            <h4 class="title">Edit Employee</h4>

                <form action="<?php echo site_url('Manager_emp/edit_emp'); ?>" method="POST" class="form-horizontal">


                    <input type="hidden" name="id_Employee" id="id_Employee" class="form-control" value="<?php echo $rs_edit->id_Employee; ?>">

                    <input type="hidden" name="Username" id="Username" class="form-control" value="<?php echo $rs_edit->Username; ?>">

                    <div class="form-row">
                        <div class="col">
                            <label for="Password">Password</label>
                            <input type="text" class="form-control" name="Password" id="Password"
                                placeholder="Password" value="<?php echo $rs_edit->Password; ?>">
                        </div>
                    </div>

                    <div class="form-row mt-2">
                        <div class="col">
                            <label for="F_Name">First name</label>
                            <input type="text" name="F_Name" id="F_Name" class="form-control" placeholder="First name" value="<?php echo $rs_edit->F_Name; ?>">
                        </div>
                        <div class="col">
                            <label for="L_Name">Last name</label>
                            <input type="text" name="L_Name" id="L_Name" class="form-control" placeholder="Last name" value="<?php echo $rs_edit->L_Name; ?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="Address">Address</label>
                        <input type="text" class="form-control" name="Address" id="Address" value="<?php echo $rs_edit->Address; ?>">
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
                            <label for="Tel">Tel.</label>
                            <input type="text" class="form-control" name="Tel" id="Tel" placeholder="0881234567" value="<?php echo $rs_edit->Tel; ?>">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success mt-4">Edit</button>
                </form>
            </div>
        </div>
    </div>
</div>