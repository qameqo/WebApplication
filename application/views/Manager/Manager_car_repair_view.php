<div class="container" style="text-align: center;"><br><br><br><br><br>
	<div style="background-color: white; border-radius: 5px;">
	<br>
		<div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-9">
                        <h3 class="panel-title">ข้อมูลจากการคืนรถยนต์</h3>
                    </div>
                    
                </div>
                
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table id="car_price_data" class="table table-striped table-bordered">
                        <thead>
                            <tr>

                                <th data-column-id="Brand">รหัส</th>
                                <th data-column-id="Model">รอยรถยนต์</th>
                                <th data-column-id="Price">ไฟรถยนต์</th>
                                <th data-column-id="Price">เบรก</th>
                                <th data-column-id="Price">ยางรถยนต์</th>
                                <th data-column-id="">น้ำมัน</th>
                                <th data-column-id="Action">รวม</th>
                                <th data-column-id="Action">รหัสการเช่า</th>
                            </tr>
                        </thead>
						<tbody>

                            <?php foreach ($query as $rs) { ?>

							<tr>
                                <td><?php echo $rs->id_Repair; ?></td>
								<td><?php echo $rs->Scratches; ?></td>
								<td><?php echo $rs->Light; ?></td>
                                <td><?php echo $rs->Break; ?></td>
                                <td><?php echo $rs->Car_tire; ?></td>
                                <td><?php echo $rs->Fuel; ?></td>
                                <td><?php echo $rs->Total_fines; ?></td>
								<td><?php echo $rs->idRental; ?></td>
							</tr>

                            <?php } ?>

						</tbody>
						<tfoot>
							<tr>

                                <th data-column-id="Brand">รหัส</th>
                                <th data-column-id="Model">รอยรถยนต์</th>
                                <th data-column-id="Price">ไฟรถยนต์</th>
                                <th data-column-id="Price">เบรก</th>
                                <th data-column-id="Price">ยางรถยนต์</th>
                                <th data-column-id="">น้ำมัน</th>

                                <th data-column-id="Action">รวม</th>
                                <th data-column-id="Action">รหัสการเช่า</th>
							</tr>
						</tfoot>
                    </table>
                </div>
            </div>
		</div>
		<br>
	</div>
</div>