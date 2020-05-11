<div class="container" style="text-align: center;"><br><br><br><br><br>
	<div style="background-color: white; border-radius: 5px;">
	<br>
		<div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="panel-title">ข้อมูลรายได้จากการเช่า</h3>
                        
                    </div>

                    <form action="" method="post">
                    
                        <input type="date" name="txtStartDate">
                        <input type="date" name="txtEndDate">

                        <input type="submit" name="search" value="ค้นหา">

                    </form>

            </div>
            <div id="bookok">
			</div>
            <div class="panel-body" id="booking">
                <div class="table-responsive">
                    <table id="car_price_data" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th data-column-id="Brand">รหัสการเช่า</th>
                                
                                <th data-column-id="Brand">ยี่ห้อ</th>
                                <th data-column-id="Brand">รุ่น</th>
                                <th data-column-id="Generation">รายได้เจ้าของรถยนต์</th>
                                <th data-column-id="Generation">รายได้ทางร้าน</th>
                                <th data-column-id="Generation">VAT 7 %</th>
                                <th data-column-id="Generation">รายได้รวม VAT 7 % ทางร้าน</th>
                                <th data-column-id="Generation">รายได้รวม</th>
                                <th data-column-id="Generation">รายได้รวม VAT 7 %</th>
                                <th data-column-id="Action"></th>
                            </tr>
                        </thead>
						<tbody>
                        
                        <?php foreach ($query as $rs) {       
                              
                     
                            if($rs->id_status == '15'){
                            
                                $txtStartDate = $_POST['txtStartDate'];
                                $txtEndDate = $_POST['txtEndDate'];

                                    $query = $this->db->query('SELECT * FROM Rental 
                                    INNER JOIN Carregis ON Rental.idCarregis = Carregis.idCarregis
                                    INNER JOIN Brand ON Carregis.idBrand = Brand.idBrand
                                    INNER JOIN Generation ON Carregis.id_Gen = Generation.id_Gen
                                    INNER JOIN Member ON Rental.id_Member = Member.id_Member
                                    INNER JOIN Status_car ON Rental.id_status = Status_car.id_Status
                                    INNER JOIN Type_Insurance ON Rental.id_Insurance = Type_Insurance.id_Insurance
                                    WHERE ReturnDate BETWEEN '.$txtStartDate.' AND '.$txtEndDate.'');
    
                                    $qq = $query->result_array();

                        ?>
                            

							<tr>

                                <td width="5%"><?php echo $rs->idRental; ?></td>
								<td><?php echo $rs->Name_Brand; ?></td>
								<td><?php echo $rs->Name_Gen; ?></td>
                                <td><b><?php echo number_format($rs->Carownerincome,0)?></b>&nbsp;บาท</td>
                                <td><b><?php    $sum = number_format($rs->Companyincome + $rs->Fines_price);
                                                echo $sum;?></b>&nbsp;บาท</td>
                                <td><b><?php    $sum = number_format($rs->PriceVat);
                                                echo $sum;?></b>&nbsp;บาท</td>
                                <td><b><?php    $sum = number_format($rs->Companyincome + $rs->Fines_price + $rs->PriceVat);
                                                echo $sum;?></b>&nbsp;บาท</td>
                                <td><b><?php    $sum = number_format($rs->Carownerincome + $rs->Companyincome + $rs->Fines_price);
                                                echo $sum;?></b>&nbsp;บาท</td>
                                <td><b><?php    $sum = number_format($rs->Carownerincome + $rs->Companyincome + $rs->Fines_price + $rs->PriceVat);
                                                echo $sum;?></b>&nbsp;บาท</td>
                                
                               
								
                                <td>
                                <a href="<?php echo site_url('Manager_car_regis/show_rental/').$rs->idRental?>" class="btn btn-info btn-sm" style="font-size:16px;">รายละเอียด</a>
                    
								</td>
							</tr>
                       
                        <?php }} ?>

						</tbody>
						
                    </table>

                </div>
            </div>

            <?php
            // $query = $this->db->query('SELECT SUM(Companyincome), SUM(PriceFive), SUM(Fines_price), SUM(PriceVat) FROM Rental');
            $this->db->select('SUM(Companyincome) + SUM(Fines_price) + SUM(PriceVat) as total', FALSE);
            $this->db->from('Rental');
            $this->db->where('id_status', 12);
            
            $query = $this->db->get();

            $result = $query->result_array();
            foreach($result as $data){
            ?>

            <h3>รายได้รวมทางร้านทั้งหมด <?php echo $data['total']; ?> บาท</h3>

            <?php } ?>

		</div>
		<br>
	</div>
</div>