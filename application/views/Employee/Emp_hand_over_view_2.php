<div class="container" style="text-align: center;"><br><br><br><br><br>
	<div style="background-color: white; border-radius: 5px;">
	<br>
		<div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-10">
                        <h3 class="panel-title">ตารางข้อมูลช่าง</h3>
                    </div>
                   
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

                            <?php if ($rs->id_position == '4' || $rs->id_position == '1' || $rs->id_position == '2') { }else{
                                    if($rs->Status != '0'){
                                
                            ?>

                            

							<tr>
								<td width="5%"><?php echo $rs->id_Employee; ?></td>

								<td><?php echo $rs->F_Name; ?></td>
								<td><?php echo $rs->L_Name; ?></td>

                                <?php 

                                if ($rs->id_position == '2') 
                                {
                                    echo'<td>ช่างซ่อมบำรุง</td>';
                                }
                                elseif ($rs->id_position == '3') 
                                {
                                    echo'<td>เจ้าหน้าที่ประกัน บริษัทวิริยะประกันภัย</td>';
                                }                                

                                ?>

								<td>
								
                                <form action="<?php echo site_url('Emp_problem/work/')?>"  method="POST" class="form-horizontal">

                                    <input type="hidden" value="<?php echo $rs->id_Employee; ?>" name="id_Employee" id="id_Employee">

                                    <input type="hidden" value="<?php echo $rs->id_Problem; ?>" name="id_Problem" id="id_Problem" />

                                    <input type="hidden" value="<?php echo $rs->idRental; ?>" name="idRental" id="idRental">

                                <button type="submit" class="btn btn-warning btn-sm" style="font-size:16px;">กำหนดงาน</button>
                                </form>  
                    
								</td>
							</tr>

                            <?php }}} ?>

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