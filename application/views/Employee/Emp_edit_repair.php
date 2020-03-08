<div class="container" style="text-align: center;"><br><br><br><br><br>
    <div style="background-color: white; border-radius: 5px;">
        <br>
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-md-10">
                        <h3 class="panel-title">แก้ไขรายละเอียดการซ่อม</h3>
                    </div>
                </div>

            </div>
            <div class="panel-body mr-5 ml-5">

                <form action="<?php echo site_url('Emp_car/edit_data_repair'); ?>" method="POST"
                    class="form-horizontal">

                    <?php $query = $this->db->query("SELECT * FROM Rental INNER JOIN Carregis on Rental.idCarregis = Carregis.idCarregis 
         WHERE Rental.idCarregis = '$rs->idCarregis'");
         $qqa = $query->result_array(); 
         foreach($qqa as $data){?>


                    <input type="hidden" id="Detail_repair" name="Detail_repair" value="<?php echo $rs->id_Repair; ?>">

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">รายละเอียดการซ่อม</label>
                        <textarea class="form-control" id="Detail_repair" name="Detail_repair" rows="3"
                            required><?php echo $rs->Detail_repair; ?></textarea>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-3">
                            <div class="form-group prc">
                                <label for="exampleInputPassword1">รายจ่ายเงิน 5000</label>
                                <input type="number" id="Price_Five" name="Price_Five" class="form-control prc"
                                    value="<?php echo $rs->Price_Five; ?>" required>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group prc">
                                <label for="exampleInputPassword1">รายจ่ายเงินประกัน
                                    <?php echo $data['PriceIns']; ?></label>
                                <input type="number" id="Price_Ins" name="Price_Ins" class="form-control prc" value="<?php echo $rs->Price_Ins; ?>"
                                    required>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group prc">
                                <label for="exampleInputPassword1">รายจ่ายเงินทางร้าน
                                    <?php echo $data['Companyincome']; ?></label>
                                <input type="number" id="Price_manager" name="Price_manager" class="form-control prc"
                                    value="<?php echo $rs->Price_manager; ?>" required>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group prc">
                                <label for="exampleInputPassword1">รวม</label>
                                <input type="number" id="Total" name="Total" class="form-control" readonly value="<?php echo $rs->Total; ?>">
                            </div>
                        </div>
                    </div>

                    <?php }?>

                    <input type="hidden" name="idCarregis" id="idCarregis" class="form-control"
                        value="<?php echo $rs->idCarregis; ?>">
                    <input type="hidden" class="btn btn-success mt-5" name="id_Status" id="id_Status" value="5"
                        style="font-size:20px;" required>
                    <button class="btn btn-success mt-5" type="submit"
                        style="font-size:20px;">ซ่อมเสร็จเรียบร้อย</button>

                </form>

                <script>
                    $('.form-group').on('input', '.prc', function () {
                        var totalSum = 0;
                        $('.form-group .prc').each(function () {
                            var inputVal = $(this).val();
                            if ($.isNumeric(inputVal)) {
                                totalSum += parseInt(inputVal);
                            }
                        });
                        $('#Total').val(totalSum);
                    });
                </script>
            </div>
        </div>
        <br>
    </div>
</div>