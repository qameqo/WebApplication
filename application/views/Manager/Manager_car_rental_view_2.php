<div class="container" style="text-align: center;"><br><br><br><br><br>
	<div style="background-color: white; border-radius: 5px;">
	<br>
		<div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="panel-title">ข้อมูลรายได้จากการเช่า</h3>
                        
                    </div>

                    <!-- <form action="<?php site_url('Manager_car_regis/showdate'); ?>" method="post">
                    
                        <input type="date" name="txtStartDate">
                        <input type="date" name="txtEndDate">

                        <input type="submit" name="search" value="ค้นหา">

                    </form> -->

            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table id="car_price_data" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th data-column-id="Brand">รหัสการเช่า</th>
                                
                                <th data-column-id="Brand">ยี่ห้อ</th>
                                <th data-column-id="Brand">รุ่น</th>
                                <th data-column-id="Brand">วันที่</th>
                                <th data-column-id="Generation">เจ้าของรถยนต์</th>
                                <th data-column-id="Generation">ทางร้าน</th>
                                <th data-column-id="Generation">VAT 7 %</th>
                                <th data-column-id="Generation">ทางร้านรวม VAT 7 %</th>
                                <th data-column-id="Generation">รวมทั้งหมด</th>
                                <th data-column-id="Generation">ทั้งหมดรวม VAT 7 %</th>
                                <th data-column-id="Action"></th>
                            </tr>
                        </thead>
						<tbody>
                        
                        <?php foreach ($query as $rs) {       
                              
                            if($rs->id_status == '12'){

                        ?>
                            
							<tr>

                                <td width="5%"><?php echo $rs->idRental; ?></td>
								<td><?php echo $rs->Name_Brand; ?></td>
								<td><?php echo $rs->Name_Gen; ?></td>
                                <td><?php echo $rs->ReturnDate; ?></td>
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
            // $this->db->where('idRental', 211);
            
            $query = $this->db->get();

            $result = $query->result_array();
            foreach($result as $data){
            ?>

            <h3>รายได้ร้านทั้งหมด <?php echo $data['total']; ?> บาท</h3>

            <?php 
                        // $id = $this->session->userdata('ID');
                        $query = $this->db->query("SELECT SUM(Carownerincome) AS raka FROM Rental
                        INNER JOIN Carregis on Carregis.idCarregis = Rental.idCarregis WHERE Rental.id_status = '12' and Carownerincome != 0");
                            $nn = $query->result_array();
                        
                        $this->db->select('*');
                        $this->db->from('Member');
                        $this->db->join('Carregis', 'Carregis.id_Member = Member.id_Member');
                        $this->db->join('Rental', 'Rental.idCarregis = Carregis.idCarregis');
                        
                        $this->db->where('Carownerincome !=', 0);
                        
                        $this->db->limit(1);
                        
                        $q = $this->db->get();

                        $r = $q->result_array();
                        foreach($r as $d){
                        
                         ?>
                    
                            <h3>รายได้ <?php echo $d['FName']; ?> ทั้งหมด <?php echo number_format($nn[0]['raka'],0) ?> บาท</h3>

                            <h3>รายได้รวมทั้งหมด 6008 บาท</h3> 
                            
                        <?php  }} ?>                   

		</div>
		<br>
	</div>
</div>