<div class="container" style="text-align: center;"><br><br><br><br><br>
	<div style="background-color: white; border-radius: 5px;">
	<br>
		<div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-10">
                        <h3 class="panel-title">ตารางข้อมูลพนักงาน</h3>
                    </div>
                    <div class="col-md-2" align ="right">
                        <button type="button" id="add_button" data-toggle="modal" data-target="#employeeModal" class="btn btn-info btn-sm" style="font-size: 16px">เพิ่มข้อมูลบุคคล</button>
                    </div>

                    <!-- <div class="col-md-2" align ="right">
                        <button type="button" id="add_button" data-toggle="modal" data-target="#employeetypeModal" class="btn btn-info btn-sm" style="font-size: 16px">เพิ่มตำแหน่งงาน</button>
                    </div> -->
                </div>
                
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table id="employee_data" class="table table-striped table-bordered">
                        <thead>
                            <tr>
								<th data-column-id="id">รหัสพนักงาน</th>

                                <th data-column-id="name">ชื่อ</th>
                                <th data-column-id="address">นามสกุล</th>
                                <th data-column-id="row">ตำแหน่ง</th>

                                <th data-column-id="Action"></th>
                            </tr>
                        </thead>
						<tbody>

                            <?php foreach ($query as $rs) { ?>

                            <?php if ($rs->id_position == '4') { }else{?>

							<tr>
								<td width="5%"><?php echo $rs->id_Employee; ?></td>

								<td><?php echo $rs->F_Name; ?></td>
								<td><?php echo $rs->L_Name; ?></td>

                                <?php 

                                if($rs->id_position == '1')
                                {
                                    echo'<td>พนักงาน</td>';
                                }
                                elseif ($rs->id_position == '2') 
                                {
                                    echo'<td>ช่างซ่อมบำรุง</td>';
                                }
                                elseif ($rs->id_position == '3') 
                                {
                                    echo'<td>เจ้าหน้าที่ประกัน บริษัทวิริยะประกันภัย </td>';
                                }                                

                                ?>

								<td>
								
                                    <a href="<?php echo site_url('Manager_emp/show/').$rs->id_Employee; ?>" class="btn btn-default btn-sm" style="font-size: 16px">รายละเอียด</a>
                                    <a href="<?php echo site_url('Manager_emp/edit/').$rs->id_Employee; ?>" class="btn btn-warning btn-sm" style="font-size: 16px">แก้ไข</a>
                                    <!-- <a href="<?php echo site_url('Manager_emp/del_emp/').$rs->id_Employee; ?>" onclick="return confirm('คุณต้องการลบหรือไม่ ?');" class="btn btn-danger btn-sm">Delete</a> -->
                    
								</td>
							</tr>

                            <?php }} ?>

						</tbody>
						<tfoot>
							<tr>
                                <th data-column-id="id">รหัสพนักงาน</th>

                                <th data-column-id="name">ชื่อ</th>
                                <th data-column-id="address">นามสกุล</th>
                                <th data-column-id="row">ตำแหน่ง</th>

                                <th data-column-id="Action"></th>
							</tr>
						</tfoot>
                    </table>
                </div>
            </div>
		</div>
		<br>
	</div>
</div>