<div class="container" style="text-align: center;"><br><br><br><br><br>
    <div style="background-color: white; border-radius: 5px;">
        <div class="row  justify-content-center">
            <div class="col-sm-8 shadow p-3 mb-5 bg-white rounded"> 
            <h3 class="title">แก้ไขข้อมูลส่วนตัว</h3>

                <form action="<?php echo site_url('Manager/update'); ?>" method="POST" class="form-horizontal">

                <?php $this->db->where('Username', $this->session->userdata('Username'));
							$query = $this->db->get('Employee', 1);
							$Username = $this->input->post('Username');
                            
                            if($query->num_rows() ==1)
                            {
                                $data = $query->row_array();
                                $this->session->set_userdata($data);
                                
                            }else
                            {
                                $this->db->where('Username', $this->session->userdata('Username'));
                                $query = $this->db->get('Employee', 1);
                                if($query->num_rows() ==1)
                                {
                                    $data = $query->row_array();
                                    $this->session->set_userdata($data);
                                    if($this->session->userdata('Status') =="เจ้าของร้าน")
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

                    <div class="col">
                        <div class="form-group">
                            <label for="Username">Username</label>
                            <input type="text" name="Username" id="Username" class="form-control" placeholder="Username" value="<?php echo $data['Username'];?>">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="Password">Password</label>
                        <input type="text" class="form-control" name="Password" id="Password"
                            placeholder="Password" value="<?php echo $data['Password'];?>"> 
                    </div>

                    <div class="form-row">
                        <div class="col">
                            <div class="form-group">
                                <label for="FName">First name</label>
                                <input type="text" name="FName" id="FName" class="form-control" placeholder="First name" value="<?php echo $data['FName'];?>">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="LName">Last name</label>
                                <input type="text" name="LName" id="LName" class="form-control" placeholder="Last name" value="<?php echo $data['LName'];?>">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="Address">Address</label>
                        <input type="text" class="form-control" name="Address" id="Address" value="<?php echo $data['Address'];?>">
                    </div>

                    <div class="form-group">
                        <label for="Tel">Tel.</label>
                        <input type="text" class="form-control" name="Tel" id="Tel" placeholder="0881234567" value="<?php echo $data['Tel'];?>">
                    </div>

                    <button type="submit" class="btn btn-success">Edit</button>
                </form>
            </div>
        </div>
    </div>
</div>