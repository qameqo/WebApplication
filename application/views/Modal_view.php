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
                            placeholder="Enter email" required>
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small>
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

                    <input type="hidden" name="Status" id="Status" value="1" class="form-control" required>

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





<div id="car_price_Modal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">Add Car</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <form action="<?php echo site_url('manager_car_price/add_car_price'); ?>" method="POST" id="insert_form">

                <div class="modal-body">

                    <div class="form-row">
                        <div class="col">
                            <div class="form-group">
                                <label for="Brand">Brand</label>
                                <input type="text" name="Brand" id="Brand" class="form-control" placeholder="Brand" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="Model">Model</label>
                                <input type="text" name="Model" id="Model" class="form-control" placeholder="Model" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col">
                            <div class="form-group">
                                <label for="Type">Type</label>
                                <input type="text" name="Type" id="Type" class="form-control" placeholder="Type" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="Price">Price</label>
                                <input type="text" name="Price" id="Price" class="form-control" placeholder="Price" required>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="form-group">
                        <label for="Row">Brand select</label>
                        <select class="form-control selectpicker" data-style="btn btn-link" name="Brand" id="Brand">
                            <option>--กรุณาเลือกยี่ห้อรถยนต์--</option>
                            <option>HONDA</option>
                            <option>TOYOTA</option>
                            <option>FORD</option>
                            <option>MAZDA</option>
                            <option>MITSUBISHI</option>
                            <option>NISSAN</option>
                            <option>AUDI</option>
                            <option>BMW</option>
                            <option>CHEVROLET</option>
                            <option>FERRARI</option>
                            <option>HYUNDAI</option>
                            <option>LEXUS</option>
                            <option>MERCEDES BENZ</option>
                            <option>MINI</option>
                            <option>PORSCHE</option>
                            <option>SUZUKI</option>
                            <option>OLVO</option>
                        </select>
                    </div> -->
                </div>
                <div class="modal-footer">
                    <input type="submit" name="adding_btn_car_price" id="adding_btn" class="btn btn-success" value="Add" />
                </div>
            </form>
        </div>
    </div>
</div>

