<div class="container" style="text-align: center;"><br><br><br><br><br>
    <div style="background-color: white; border-radius: 5px;">
        <div class="row  justify-content-center">
            <div class="col-sm-8 shadow p-3 mb-5 bg-white rounded">
                <h4 class="title">รายละเอียดพนักงาน</h4>

                <form action="" method="POST" class="form-horizontal">


                    <div class="table-responsive">
                        <table class="table table-bordered">

                            <tr>
                                <td width="30%"><label>รหัสพนักงาน</label></td>
                                <td width="70%"><?php echo $rs_edit->id_Employee; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>ชื่อผู้ใช้</label></td>
                                <td width="70%"><?php echo $rs_edit->Username; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>รหัสผ่าน</label></td>
                                <td width="70%"><?php echo $rs_edit->Password; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>ชื่อ</label></td>
                                <td width="70%"><?php echo $rs_edit->F_Name; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>นามสกุล</label></td>
                                <td width="70%"><?php echo $rs_edit->L_Name; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>ที่อยู่</label></td>
                                <td width="70%"><?php echo $rs_edit->Address; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>เบอร์โทรศัพท์</label></td>
                                <td width="70%"><?php echo $rs_edit->Tel; ?></td>
                            </tr>
                            

                            <?php
                            
                            if($rs_edit->Row == '1')
                                {
                                    echo'<tr><td width="30%"><label>ตำแหน่ง</label></td><td width="70%">พนักงาน</td></tr>';
                                }
                                elseif ($rs_edit->Row == '2') 
                                {
                                    echo'<tr><td width="30%"><label>ตำแหน่ง</label></td><td width="70%">พนัช่างซ่อมบำรุงกงาน</td></tr>';
                                }
                                elseif ($rs_edit->Row == '3') 
                                {
                                    echo'<tr><td width="30%"><label>ตำแหน่ง</label></td><td width="70%">เจ้าหน้าที่ประกัน</td></tr>';
                                }  
                            ?>

                        </table>
                    </div>

                    <a href="<?php echo site_url('Manager_emp'); ?>" class="btn btn-default mt-4" style="font-size: 20px">กลับ</a>
                </form>
            </div>
        </div>
    </div>
</div>