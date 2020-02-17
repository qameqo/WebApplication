<div class="container" style="text-align: center;"><br><br><br><br><br>
    <div style="background-color: white; border-radius: 5px;">
        <div class="row  justify-content-center">
            <div class="col-sm-8 shadow p-3 mb-5 bg-white rounded"> 
            <h4 class="title">แก้ไขข้อมูลราคารถยนต์</h4>

                
                <form action="<?php echo site_url('Manager_car_price/edit_car_price'); ?>" method="POST"
                class="form-horizontal">


                    <input type="hidden" name="id_Gen" id="id_Gen" class="form-control" value="<?php echo $rs_edit->id_Gen; ?>" id="insert_form">

                    <div class="form-row">

                        <div class="col-12">
                            <label for="exampleFormControlSelect1">ยี่ห้อรถ</label>
                            <select class="form-control selectpicker" data-style="btn btn-link" name="idBrand"
                                id="idBrand" onChange="Change_Brand()">
                                <option value="<?php echo $rs_edit->idBrand; ?>"><?php echo $rs_edit->Name_Brand; ?></option>
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
                                value="<?php echo $rs_edit->Name_Gen; ?>">
                        </div>

                        <div class="col-12 mt-3">
                            <label for="exampleFormControlSelect1">ที่นั่ง</label>
                            <select class="form-control selectpicker" data-style="btn btn-link" name="id_Seat"
                                id="id_Seat" onChange="Change_Seat()">
                                <option value="<?php echo $rs_edit->id_Seat; ?>"><?php echo $rs_edit->id_Seat; ?></option>
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
                            <label for="Brand">ราคา</label>
                            <input type="text" name="Price" pattern="^(0|[1-9][0-9]*)$" id="Price" class="form-control"
                                placeholder="ราคา" value="<?php echo $rs_edit->Price; ?>">
                        </div>

                        <div class="col-12 mt-3">
                            <label for="exampleFormControlSelect1">ประเภทเชื่อเพลิง</label>
                            <select class="form-control selectpicker" data-style="btn btn-link" name="id_Type_Fuel"
                                id="id_Type_Fuel" onChange="Change_Fuel()" >
                                <option value="<?php echo $rs_edit->id_TypeFuel; ?>"><?php echo $rs_edit->Name_Type_Fuel; ?></option>
                                <?php 
  									$this->db->select('*');
								  $sql = $this->db->get('Type_Fuel');
								  $r = $sql->result_array();
								  foreach($sql->result_array()
								  as $he)
								 {
									?>
                                <option value="<?php echo $he['id_TypeFuel'] ?>"><?php echo $he['Name_Type_Fuel'] ?></option>
                                <?php }
								  
							    ?>
                                                                
                            </select>
                        </div>

                    </div>

                    <button type="submit" name="adding_btn" id="adding_btn" class="btn btn-success mt-5"
                        style="font-size:20px">บันทึก</button>

            </form>


            </div>
        </div>
    </div>
</div>