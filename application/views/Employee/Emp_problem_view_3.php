<div class="container" style="text-align: center;"><br><br><br><br><br>
	<div style="background-color: white; border-radius: 5px;">
	<br>
		<div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-10">
                        <h3 class="panel-title">ข้อมูลปัญหา</h3>
                    </div>
                </div>
                
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table id="car_price_data" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th data-column-id="Brand">ไอดี</th>
                                <th data-column-id="Brand">รายละเอียด</th>
                                <th data-column-id="Brand">วันที่</th></th>
                                <th data-column-id="Brand">ตำแหน่ง</th>
                                
                                <th data-column-id="Action"></th>
                            </tr>
                        </thead>
						<tbody>

                        <?php foreach ($query as $rs) { ?>

                            <?php
                            if ($rs->id_employee != null) 
                            {
                                                  
                            ?> 

							<tr>

                                <td width="5%"><?php echo $rs->id_Problem; ?></td>

								<td><?php echo $rs->Detail; ?></td>
								<td><?php echo $rs->Date; ?></td>
								<td><?php echo $rs->Lat; ?>, <?php echo $rs->Lng; ?></td>
                                <td>
								
                                <a href="<?php echo site_url('Emp_problem/show/').$rs->id_Problem?>" class="btn btn-info btn-sm" style="font-size:16px;">รายละเอียด</a>

                    
								</td>
							</tr>

                        <?php }} ?>

						</tbody>
						<tfoot>
							<tr>
                                <th data-column-id="Brand">ไอดี</th>
                                <th data-column-id="Brand">รายละเอียด</th>
                                <th data-column-id="Brand">วันที่</th>
                                <th data-column-id="Brand">ตำแหน่ง</th>

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