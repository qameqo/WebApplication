<div class="container" style="text-align: center;"><br><br><br><br><br>
	<div style="background-color: white; border-radius: 5px;">
	<br>
		<div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-9">
                        <h3 class="panel-title">ตารางข้อมูลราคาซ่อมรถยนต์</h3>
                    </div>
                    
                </div>
                
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table id="car_price_data" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th data-column-id="Brand">ยี่ห้อ</th>
                                <th data-column-id="Brand">ยี่ห้อ</th>
                                <th data-column-id="Model">รุ่น</th>
                                <th data-column-id="Price">รายจ่าย 5000</th>
                                <th data-column-id="Price">รายจ่ายประกัน</th>
                                <th data-column-id="Price">รายจ่ายร้าน</th>
                                <th data-column-id="">รวมทั้งหมด</th>
                                <th data-column-id=""></th>
                            </tr>
                        </thead>
						<tbody>

                            <?php foreach ($query as $rs) { ?>

							<tr>
                                <td><?php echo $rs->id_Repair ?></td>
								<td><?php echo $rs->Name_Brand ?></td>
								<td><?php echo $rs->Name_Gen; ?></td>
                                <td><?php echo $rs->Price_Five; ?>&nbsp;บาท</td>
                                <td><?php echo $rs->Price_Ins; ?>&nbsp;บาท</td>
                                <td><?php echo $rs->Price_manager; ?>&nbsp;บาท</td>
                                <td><b><?php echo $rs->Total; ?></b>&nbsp;บาท</td>
                                <td>

                                <?php if ($this->session->userdata('id_Employee')=='2') { ?>
                                    <a href="<?php echo site_url('Manager_car_regis/detail_repair/').$rs->id_Repair?>" class="btn btn-info btn-sm" style="font-size:16px;">รายละเอียด</a>
                                    
                                <?php }else{ ?>

                                    <a href="<?php echo site_url('Emp_car/edit_repair/').$rs->id_Repair?>" class="btn btn-warning btn-sm" style="font-size:16px;">แก้ไขข้อมูล</a>

                                <?php } ?>

                                
                                </td>
								
							</tr>

                            <?php } ?>

						</tbody>
						<tfoot>
							<tr>
                                <th data-column-id="Brand">ยี่ห้อ</th>
                                <th data-column-id="Brand">ยี่ห้อ</th>
                                <th data-column-id="Model">รุ่น</th>
                                <th data-column-id="Price">รายจ่าย 5000</th>
                                <th data-column-id="Price">รายจ่ายประกัน</th>
                                <th data-column-id="Price">รายจ่ายร้าน</th>
                                <th data-column-id="">รวมทั้งหมด</th>
                                <th data-column-id=""></th>
							</tr>
						</tfoot>
                    </table>
                </div>
            </div>
		</div>
		<br>
	</div>
</div>