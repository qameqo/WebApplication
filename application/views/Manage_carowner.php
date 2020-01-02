<style>
.field-icon {
  float: right;
  margin-left: -25px;
  margin-top: -27px;
  position: relative;
  z-index: 2;
}

.container{
  padding-top:11px;
  margin: auto;
}</style>

<div class="col-md-13 text-center">
	<h1 class="h1" style="color:#000000">แก้ไขข้อมูลส่วนตัว</h1>
</div>
<div class="row justify-content-center">
	<div class="col-sm-4 shadow p-3 mb-5 bg-white rounded"
		style="background-color: #FFFFFF; border-radius: 10px ; margin-left: 1em ; margin-right: 1em ;">
		<form class="form-signin" id="edit" name="edit" method="post"
			action="<?php echo base_url(); ?>OwnerManage/update">
			<div class="form-group bmd-form-group">
				<?php $this->db->where('Email', $this->session->userdata('Email'));
							$query = $this->db->get('Member', 1);
							$email = $this->input->post('email');
                            
        if($query->num_rows() ==1)
        {
            $data = $query->row_array();
            $this->session->set_userdata($data);
            
        }else
        {
            $this->db->where('Email', $this->session->userdata('Email'));
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
				<label class="bmd-label-floating">Email Address</label>
				<input name="email" type="email" id="email" class="form-control"
					value="<?php echo $data['Email'];?>">
			</div>
			
			<div class="form-group bmd-form-group">
				<label class="bmd-label-floating">Password</label>
			  <input id="password-field" type="password" class="form-control" name="password" 
			  value="<?php echo $data['Password'];?>">
              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
					
			</div>

			<div class="form-group bmd-form-group">
				<label class="bmd-label-floating">First Name</label>
				<input name="fname" type="text" id="fname" class="form-control" placeholder=""
				value="<?php echo $data['FName'];?>">
			</div>

			<div class="form-group bmd-form-group">
				<label class="bmd-label-floating">Last Name</label>
				<input name="lname" type="text" id="lname" class="form-control" placeholder=""
				value="<?php echo $data['LName'];?>">
			</div>
			<div class="form-group">
				<label class="bmd-label-floating">Date of Birth</label>
				<div class="input-group input-group-alternative">
					<div class="input-group-prepend">
						<span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
					</div>
					<input class="form-control datepicker" placeholder="Select date" type="text" name="date"
					value="<?php echo $data['DateofBirth'];?>">

				</div>
			</div>
			<div class="form-group bmd-form-group">
				<label class="bmd-label-floating">Address</label>
				<input name="address" type="text" id="address" class="form-control" placeholder=""
				value="<?php echo $data['Address'];?>">
			</div>

			<div class="form-group bmd-form-group">
				<label class="bmd-label-floating">Tel.</label>
				<input name="tel" type="text" id="tel" class="form-control" placeholder=""
				value="<?php echo $data['Tel'];?>">
			</div>

			<!-- <input type="hidden" class="form-control" id="type" value="CarOwner">
				<div class="fileinput fileinput-new " data-provides="fileinput">
					<div>
							<label class="bmd-label-floating">image_DriverLicense</label>
							<input type="file" name="..." />
					</div>
				</div> -->

			<button class="btn btn-success" type="submit">ยืนยัน</botton>
		</form>
	</div>
</div>
</div>