<div class="container" style="text-align: center;"><br><br><br><br><br>
    <div style="background-color: white; border-radius: 5px;">
        <div class="row  justify-content-center">
            <div class="col-sm-8 shadow p-3 mb-5 bg-white rounded">
                <h4 class="title">รายละเอียดการซ่อม</h4>

                    <div class="table-responsive">
                        <table class="table table-bordered">

                            <tr>
                                <td width="30%"><label>รหัสการซ่อม</label></td>
                                <td width="70%"><?php echo $rs->idCarregis; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>ยี่ห้อ</label></td>
                                <td width="70%"><?php echo $rs->Name_Brand; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>รุ่น</label></td>
                                <td width="70%"><?php echo $rs->Name_Gen; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>รายละเอียดการซ่อม</label></td>
                                <td width="70%"><?php echo $rs->Detail_repair; ?>&nbsp;บาท</td>
                            </tr>
                            <tr>
                                <td width="30%"><label>รายจ่าย 5000</label></td>
                                <td width="70%"><?php echo $rs->Price_Five; ?>&nbsp;บาท</td>
                            </tr>
                            <tr>
                                <td width="30%"><label>รายจ่ายประกัน <?php echo $rs->PriceIns; ?></label></td>
                                <td width="70%"><?php echo $rs->Price_Ins; ?>&nbsp;บาท</td>
                            </tr>
                            <tr>
                                <td width="30%"><label>รายจ่ายทางร้าน</label></td>
                                <td width="70%"><?php echo $rs->Price_manager; ?>&nbsp;บาท</td>
                            </tr>
                            <tr>
                                <td width="30%"><label>รวมทั้งหมด</label></td>
                                <td width="70%"><b><?php echo $rs->Total; ?></b>&nbsp;บาท</td>
                            </tr>
                            <?php 

                                $query = $this->db->query('SELECT * FROM Carregis, Employee WHERE Carregis.id_Employee = Employee.id_Employee AND Carregis.idCarregis = '.$rs->idCarregis);

                                $qq = $query->result_array();

                                foreach ($qq as $data) {

                                    echo '<tr>
                                    <td width="30%"><label>พนักงานยืนยันการซ่อม</label></td>
                                    <td width="70%">';
                                    echo $data['F_Name'];
                                    echo '&nbsp;';
                                    echo $data['L_Name'];
                                    echo '</td></tr>';
                                }
                            
                            ?>
                            <tr>
                                <td width="30%"><label>รหัสรถยนต์ลงทะเบียน</label></td>
                                <td width="70%"><?php echo $rs->idCarregis; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>รหัสการเช่า</label></td>
                                <td width="70%"><?php echo $rs->idRental; ?></td>
                            </tr>
                            
                                                        
                            
                            

                        </table>
                    </div>
                
            </div>
        </div>
    </div>
</div>