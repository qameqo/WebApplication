<div class="container" style="text-align: center;"><br><br><br><br><br>
    <div style="background-color: white; border-radius: 5px;">
        <div class="row  justify-content-center">
            <div class="col-sm-8 shadow p-3 mb-5 bg-white rounded"> 
            <h3 class="title">แก้ไขข้อมูลส่วนตัว</h3>

                <form action="<?php echo site_url('Manager/update'); ?>" method="POST" class="form-horizontal">

                <?php $this->db->where('id_Employee', $this->session->userdata('id_Employee'));
							$query = $this->db->get('Employee', 1);
							$id_Employee = $this->input->post('id_Employee');
                            
                            if($query->num_rows() ==1)
                            {
                                $data = $query->row_array();
                                $this->session->set_userdata($data);
                                
                            }else
                            {
                                $this->db->where('id_Employee', $this->session->userdata('id_Employee'));
                                $query = $this->db->get('Employee', 1);
                                if($query->num_rows() ==1)
                                {
                                    $data = $query->row_array();
                                    $this->session->set_userdata($data);
                                    if($this->session->userdata('Row') =="เจ้าของร้าน")
                                    {
                                    
                                    }else{
                                        
                                    }
                                }else
                                {
                                    echo "ไม่เจอ";
                                }
                                
                            }
					 ?>

                    <input type="hidden" name="id_Employee" id="id_Employee" class="form-control" value="">

                    <input type="hidden" name="Username" id="Username" class="form-control" value="<?php echo $data['Username'];?>">

                    <div class="form-group">
                        <label for="Password">รหัสผ่าน</label>
                        <input type="text" class="form-control" name="Password" id="Password"
                            placeholder="Password" value="<?php echo $data['Password'];?>"> 
                    </div>

                    <div class="form-row">
                        <div class="col">
                            <div class="form-group">
                                <label for="F_Name">ชื่อ</label>
                                <input type="text" name="F_Name" id="F_Name" class="form-control" placeholder="First name" value="<?php echo $data['F_Name'];?>">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="L_Name">นามสกุล</label>
                                <input type="text" name="L_Name" id="L_Name" class="form-control" placeholder="Last name" value="<?php echo $data['L_Name'];?>">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="Address">ที่อ่</label>
                        <input type="text" class="form-control" name="Address" id="Address" value="<?php echo $data['Address'];?>">
                    </div>

                    <div class="form-group">
                        <label for="Tel">เบอร์โทรศัพท์</label>
                        <input type="text" class="form-control" name="Tel" id="Tel" placeholder="0881234567" value="<?php echo $data['Tel'];?>">
                    </div>

                    <button type="submit" class="btn btn-success">Edit</button>
                </form>
            </div>
        </div>
    </div>
</div>