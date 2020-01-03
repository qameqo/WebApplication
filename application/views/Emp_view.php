<div class="container">

<br><br><br><br>

    <div class="row justify-content-center">
        <div class="col-sm-8 shadow p-3 mb-5 bg-white rounded"
            style="background-color: #FFFFFF; border-radius: 10px ; margin-left: 1em ; margin-right: 1em ;">


            <h4 class="title">แก้ไขข้อมูลส่วนตัว</h4>

            <form action="<?php echo site_url('manager_emp'); ?>" method="POST" id="insert_form">

                <input type="hidden" name="id_emp" id="id_emp" class="form-control">

                <div class="form-group">
                    <label for="Email">Email address</label>
                    <input type="email" class="form-control" name="Email" id="Email" aria-describedby="emailHelp"
                        placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with
                        anyone
                        else.</small>
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

            </form>

            <input type="submit" name="action" id="action" class="btn btn-success" value="Add" />

        </div>
    </div>
</div>