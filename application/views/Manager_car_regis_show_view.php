<div class="container" style="text-align: center;"><br><br><br><br><br>
    <div style="background-color: white; border-radius: 5px;">
        <div class="row  justify-content-center">
            <div class="col-sm-8 shadow p-3 mb-5 bg-white rounded">
                <h4 class="title">Show Detail Car Register</h4>

                <form action="" method="POST" class="form-horizontal">


                    <div class="table-responsive">
                        <table class="table table-bordered">

                            <tr>
                                <td width="30%"><label>ID</label></td>
                                <td width="70%"><?php echo $rs->idCarregis; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>Brand</label></td>
                                <td width="70%"><?php echo $rs->Brand; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>Generation</label></td>
                                <td width="70%"><?php echo $rs->Generation; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>Yearcar</label></td>
                                <td width="70%"><?php echo $rs->Yearcar; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>Seat</label></td>
                                <td width="70%"><?php echo $rs->Seat; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>Fuel</label></td>
                                <td width="70%"><?php echo $rs->Fuel; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>Gear</label></td>
                                <td width="70%"><?php echo $rs->Gear; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>Mileage</label></td>
                                <td width="70%"><?php echo $rs->Mileage; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>License</label></td>
                                <td width="70%"><?php echo $rs->License; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>Yearlicense</label></td>
                                <td width="70%"><?php echo $rs->Yearlicense; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>Carbody</label></td>
                                <td width="70%"><?php echo $rs->Carbody; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>Status</label></td>
                                <td width="70%"><?php echo $rs->Status; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>id_Employee</label></td>
                                <td width="70%"><?php echo $rs->id_Employee; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>id_Member</label></td>
                                <td width="70%"><?php echo $rs->id_Member; ?></td>
                            </tr>


                        </table>
                    </div>

                    <input type="submit" name="adding_btn" id="adding_btn" class="btn btn-success btn-sm mt-5" value="ยืนยันการลงทะเบียน" style="font-size:20px;"/>

                </form>
            </div>
        </div>
    </div>
</div>