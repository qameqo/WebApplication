<div class="col-md-13 text-center"><br>
	<h1 class="h1" style="color:#000000">ข้อมูลส่วนตัว</h1>
</div>
<div class="row justify-content-center">
	<div class="col-sm-6 shadow p-3 mb-5 bg-white rounded"
		style="background-color: #FFFFFF; border-radius: 10px ; margin-left: 1em ; margin-right: 1em ;">
<form class="form-signin" id="edit" name="edit" method="post"action="">
			<div class="row">
			<div class="col-sm">
				<?php $this->db->where('id_Member', $this->session->userdata('id_Member'));
							$query = $this->db->get('Member', 1);
							$Username = $this->input->post('id_Member');
                            
        if($query->num_rows() ==1)
        {
            $data = $query->row_array();
            $this->session->set_userdata($data);
            
        }else
        {
            $this->db->where('id_Member', $this->session->userdata('id_Member'));
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
				<H3 class="bmd-label-floating">First Name : <?php echo $data['FName'];?></H3>
			</div>
			</div>
            <div class="row">
			<div class="col-sm">
			<H3 class="bmd-label-floating">Last Name : <?php echo $data['LName'];?></H3>
			</div>
			</div>
			<div class="row">
			<div class="col-sm">
			<H3 class="bmd-label-floating">Address : <?php echo $data['Address'];?></H3>
			</div>
			</div>
			<div class="row">
			<div class="col-sm">
				<H3 class="bmd-label-floating">Tel. <?php echo $data['Tel'];?></H3>
			</div>
			<!-- <input type="hidden" class="form-control" id="type" value="CarOwner">
				<div class="fileinput fileinput-new " data-provides="fileinput">
					<div>
							<label class="bmd-label-floating">image_DriverLicense</label>
							<input type="file" name="..." />
					</div>
				</div> -->
		
		</div>
</div>
</div>
</form>
