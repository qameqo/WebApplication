<div id="employeeModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">เพิ่มพนักงาน</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <form action="<?php echo site_url('manager_emp/add_emp'); ?>" method="POST" id="insert_form">

                <div class="modal-body">

                    <input type="hidden" name="id_emp" id="id_emp" class="form-control">

                    <div class="form-group">
                        <label for="Username">Username</label>
                        <input type="text" name="Username" id="Username" class="form-control" placeholder="Username"
                            required>
                    </div>

                    <div class="form-group">
                        <label for="Password">Password</label>
                        <input type="password" class="form-control" name="Password" id="Password" placeholder="Password"
                            required >

                    </div>

                    <div class="form-row">
                        <div class="col">
                            <div class="form-group">
                                <label for="First name">First name</label>
                                <input type="text" name="F_Name" id="F_Name" class="form-control"
                                    placeholder="First name" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="Last name">Last name</label>
                                <input type="text" name="L_Name" id="L_Name" class="form-control"
                                    placeholder="Last name" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="Address">Address</label>
                        <textarea class="form-control" name="Address" id="Address" rows="3" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="Tel">Tel.</label>
                        <input type="text" class="form-control" name="Tel" id="Tel" placeholder="0881234567" required
                            pattern="[0-9]{3}[0-9]{3}[0-9]{4}" title="กรุณากรอกให้ครบ 10 หลัก 0800000000">
                    </div>

                    <div class="form-group">
                        <label for="Row">Row select</label>
                        <!-- <select class="form-control selectpicker" data-style="btn btn-link" name="Row" id="Row">
                            <option value="1">พนักงาน</option>
                            <option value="2">ช่างซ่อมบำรุง</option>
                            <option value="3">เจ้าหน้าที่ประกัน บริษัทวิริยะประกันภัย</option>
                        </select> -->

                        <select class="form-control selectpicker" data-style="btn btn-link" name="Row"
                                id="Row" onChange="Change_Employee_position()" required>
                                <option value="">ตำแหน่งงาน</option>
                                <!-- <?php 
								  $sql = $this->db->query('SELECT * FROM Employee_position WHERE NOT id_position = 4');
								  $r = $sql->result_array();
								  foreach($sql->result_array()
								  as $he)
								 {
									?>
                                <option value="<?php echo $he['id_position'] ?>"><?php echo $he['Name_position'] ?></option>
                                <?php }
								  
							    ?> -->
                                <option value="1">พนักงาน</option>
                                <option value="2">ช่างซ่อมบำรุง</option>
                                <option value="3">เจ้าหน้าที่ประกัน</option>
                            </select>
                    </div>

                    <div class="form-group">
                        <label for="Row">Company select</label>
                        <!-- <select class="form-control selectpicker" data-style="btn btn-link" name="Row" id="Row">
                            <option value="1">พนักงาน</option>
                            <option value="2">ช่างซ่อมบำรุง</option>
                            <option value="3">เจ้าหน้าที่ประกัน บริษัทวิริยะประกันภัย</option>
                        </select> -->

                        <select class="form-control selectpicker" data-style="btn btn-link" name=""
                                id="" onChange="Change_Employee_position()" required>
                                <option value="">บริษัท</option>
                                <option value="">บริษัทวิริยะประกันภัย</option>
                            </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <input style="font-size:16px" type="submit" name="adding_btn" id="adding_btn" class="btn btn-success" value="บันทึกข้อมูล" />
                </div>
            </form>
        </div>
    </div>
</div>

<div id="employeetypeModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">เพิ่มตำแหน่งพนักงาน</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <form action="<?php echo site_url('manager_emp/add_emp_type'); ?>" method="POST" id="insert_form">

                <div class="modal-body">

                    <input type="hidden" name="id_emp" id="id_emp" class="form-control">

                    <div class="form-group">
                        <label for="Username">ตำแหน่ง</label>
                        <input type="text" name="Name_position" id="Name_position" class="form-control" placeholder="ชื่อตำแหน่ง"
                            required>
                    </div>

                </div>
                <div class="modal-footer">
                    <input style="font-size:16px" type="submit" name="adding_btn" id="adding_btn" class="btn btn-success" value="บันทึกข้อมูล" />
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Price Brand -->

<div id="brandModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">เพิ่มยี่ห้อรถยนต์</h4>
                <button type="button" name="close_modal" id="close_modal" class="close"
                    data-dismiss="modal">&times;</button>
            </div>

            <form action="<?php echo site_url('Manager_car_price/add_car_price'); ?>" method="POST"
                class="form-horizontal" id="insert_form">

                <div class="modal-body">

                    <input type="hidden" name="id_Gen" id="id_Gen" class="form-control" value="">

                    <div class="form-row">

                        <div class="col">
                            <label for="Brand">ยี่ห้อ</label>
                            <input type="text" name="Name_Brand" id="Name_Brand"
                                title="กรุณากรอกตัวอักษรพิมพ์ใหญ่ (A-Z)" class="form-control" required
                                placeholder="Brand" value="">
                        </div>

                    </div>

                </div>


                <div class="modal-footer">

                    <button type="submit" name="adding_btn" id="adding_btn" class="btn btn-success mt-5"
                        style="font-size:20px">บันทึก</button>

                </div>

            </form>

        </div>
    </div>
</div>

<!-- Price Generation -->

<div id="genModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h4 class="modal-title">เพิ่มรุ่นและราคารถยนต์</h4>
                <button type="button" name="close_modal" id="close_modal" class="close"
                    data-dismiss="modal">&times;</button>
            </div>

            <form action="<?php echo site_url('Manager_car_price/add_car_price_2'); ?>" method="POST"
                class="form-horizontal">

                <div class="modal-body">

                    <input type="hidden" name="id_Gen" id="id_Gen" class="form-control" value="" id="insert_form">

                    <div class="form-row">

                        <div class="col-12">
                            <label for="exampleFormControlSelect1">ยี่ห้อรถ</label>
                            <select class="form-control selectpicker" data-style="btn btn-link" name="idBrand"
                                id="idBrand" onChange="Change_Brand()" required>
                                <option value="">เลือกยี่ห้อ</option>
                                <?php 
  									$this->db->select('*');
								  $sql = $this->db->get('Brand');
								  $r = $sql->result_array();
								  foreach($sql->result_array()
								  as $he)
								 {
									?>
                                <option value="<?php echo $he['idBrand'] ?>"><?php echo $he['Name_Brand'] ?></option>
                                <?php }
								  
							    ?>
                            </select>
                        </div>

                        <div class="col-12 mt-3">
                            <label for="Brand">รุ่น</label>
                            <input type="text" name="Name_Gen" id="Name_Gen" class="form-control" placeholder="รุ่น"
                                value="">
                        </div>

                        <div class="col-12 mt-3">
                            <label for="exampleFormControlSelect1">ที่นั่ง</label>
                            <select class="form-control selectpicker" data-style="btn btn-link" name="id_Seat"
                                id="id_Seat" onChange="Change_Seat()" required>
                                <option value="">เลือกที่นั่ง</option>
                                <?php 
  									$this->db->select('*');
								  $sql = $this->db->get('Seat');
								  $r = $sql->result_array();
								  foreach($sql->result_array()
								  as $he)
								 {
									?>
                                <option value="<?php echo $he['id_Seat'] ?>"><?php echo $he['id_Seat'] ?></option>
                                <?php }
								  
							    ?>
                                
                            </select>
                        </div>

                        <div class="col-12 mt-3">
                            <label for="Brand">CC. รถยนต์</label>
                            <input type="text" name="CC" pattern="^(0|[1-9][0-9]*)$" id="CC" class="form-control"
                                placeholder="CC" value="">
                        </div>

                        <div class="col-12 mt-3">
                            <label for="Brand">ราคา</label>
                            <input type="text" name="Price" pattern="^(0|[1-9][0-9]*)$" id="Price" class="form-control"
                                placeholder="ราคา" value="">
                        </div>

                        <div class="col-12 mt-3">
                            <label for="exampleFormControlSelect1">ประเภทเชื่อเพลิง</label>
                            <select class="form-control selectpicker" data-style="btn btn-link" name="id_Type_Fuel"
                                id="id_Type_Fuel" required>
                                <option value="">เลือกประเภทเชื้อเพลิง</option>
                                <option value="1">Benzine & Gas</option>
                                <option value="2">Diesel & Gas</option>
                                
                            </select>
                        </div>

                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" name="adding_btn" id="adding_btn" class="btn btn-success mt-5"
                        style="font-size:20px">บันทึก</button>
                </div>

            </form>

        </div>
    </div>
</div>