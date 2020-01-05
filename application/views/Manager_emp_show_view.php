<div class="container" style="text-align: center;"><br><br><br><br><br>
    <div style="background-color: white; border-radius: 5px;">
        <div class="row  justify-content-center">
            <div class="col-sm-8 shadow p-3 mb-5 bg-white rounded">
                <h4 class="title">Show Detail Employee</h4>

                <form action="" method="POST" class="form-horizontal">


                    <div class="table-responsive">
                        <table class="table table-bordered">

                            <tr>
                                <td width="30%"><label>ID</label></td>
                                <td width="70%"><?php echo $rs_edit->id_Employee; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>Email</label></td>
                                <td width="70%"><?php echo $rs_edit->Email; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>Password</label></td>
                                <td width="70%"><?php echo $rs_edit->Password; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>First name</label></td>
                                <td width="70%"><?php echo $rs_edit->FName; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>Last name</label></td>
                                <td width="70%"><?php echo $rs_edit->LName; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>Address</label></td>
                                <td width="70%"><?php echo $rs_edit->Address; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>Tel.</label></td>
                                <td width="70%"><?php echo $rs_edit->Tel; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>Row</label></td>
                                <td width="70%"><?php echo $rs_edit->Row; ?></td>
                            </tr>
                            <tr>
                                <td width="30%"><label>Status</label></td>
                                <td width="70%"><?php echo $rs_edit->Status; ?></td>
                            </tr>

                        </table>
                    </div>

                    <button type="submit" class="btn btn-success">Edit</button>
                </form>
            </div>
        </div>
    </div>
</div>