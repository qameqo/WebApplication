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

<div class="col-md-13 text-center"><br>
	<h1 class="h1" style="color:#000000">แก้ไขข้อมูลส่วนตัว</h1>
</div>
<div class="row justify-content-center">
	<div class="col-sm-6 shadow p-3 mb-5 bg-white rounded"
		style="background-color: #FFFFFF; border-radius: 10px ; margin-left: 1em ; margin-right: 1em ;">
		<form class="form-signin" id="edit" name="edit" method="post"
			action="<?php echo base_url(); ?>OwnerManage/update">
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
				<label class="bmd-label-floating">First Name</label>
				<input name="fname" type="text" id="fname" class="form-control" placeholder=""
				value="<?php echo $data['FName'];?>" pattern="^[a-zA-Z]+$" title="กรุณากรอกชื่อ ภาษาอังกฤษ" required>
			</div>
			
			<div class="col-sm">
			<label class="bmd-label-floating">Last Name</label>
				<input name="lname" type="text" id="lname" class="form-control" placeholder=""
				value="<?php echo $data['LName'];?>" pattern="^[a-zA-Z]+$" title="กรุณากรอกนามสกุล ภาษาอังกฤษ" required>
					
			</div>
			</div>
			<br>
			<div class="row">
			<div class="col-sm">
			<label class="bmd-label-floating">Password</label>
			  <input id="password-field" type="password" class="form-control" name="password" 
			  value="<?php echo $data['Password'];?>" pattern="(?=.*\d)(?=.*[a-z]).{8,}" title="ต้องมีตัวเลขอย่างน้อยหนึ่งตัวและตัวพิมพ์เล็กหนึ่งตัวอย่างน้อย 8 ตัวอักษรขึ้นไป" required>
              <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
					
			</div>
			
			<div class="col-sm">
			<label class="bmd-label-floating">Address</label>
				<input name="address" type="text" id="address" class="form-control" placeholder=""
				value="<?php echo $data['Address'];?>" required>
			</div>
			</div>
			<br>
			<div class="row">
			<div class="col-sm">
				<label class="bmd-label-floating">Tel.</label>
				<input name="tel" type="tel" id="tel" class="form-control" placeholder="" pattern="[0-9]{3}[0-9]{3}[0-9]{4}"
				value="<?php echo $data['Tel'];?>" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" title="กรุณากรอกให้ครบ 10 หลัก 0800000000" required>
			</div>
			<div class="col-sm" style="padding-top: 30px;">
			<button class="btn btn-success" type="submit">ยืนยัน</botton>
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




