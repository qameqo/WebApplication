<div class="container" style="text-align: center;"><br><br><br><br><br>
    <div style="background-color: white; border-radius: 5px;">
        <div class="row  justify-content-center">
            <div class="col-sm-8 shadow p-3 mb-5 bg-white rounded"> 
            <h3 class="title">แก้ไขข้อมูลส่วนตัว</h3>

                <form action="<?php //echo site_url('Manager_emp/edit_emp'); ?>" method="POST" class="form-horizontal">


                    <input type="hidden" name="id_Employee" id="id_Employee" class="form-control" value="">

                    <div class="form-group">
                        <label for="Email">Email address</label>
                        <input type="email" class="form-control" name="Email" id="Email" aria-describedby="emailHelp"
                            placeholder="Enter email" value="">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with
                            anyone
                            else.</small>
                    </div>

                    <div class="form-group">
                        <label for="Password">Password</label>
                        <input type="text" class="form-control" name="Password" id="Password"
                            placeholder="Password" value=""> 
                    </div>

                    <div class="form-row">
                        <div class="col">
                            <input type="text" name="FName" id="FName" class="form-control" placeholder="First name" value="">
                        </div>
                        <div class="col">
                            <input type="text" name="LName" id="LName" class="form-control" placeholder="Last name" value="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="Address">Address</label>
                        <input type="text" class="form-control" name="Address" id="Address" value="">
                    </div>

                    <div class="form-group">
                        <label for="Tel">Tel.</label>
                        <input type="text" class="form-control" name="Tel" id="Tel" placeholder="0881234567" value="">
                    </div>

                    <button type="submit" class="btn btn-success">Edit</button>
                </form>
            </div>
        </div>
    </div>
</div>