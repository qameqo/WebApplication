<div class="container" style="text-align: center;"><br><br><br><br><br>
    <div style="background-color: white; border-radius: 5px;">
        <div class="row  justify-content-center">
            <div class="col-sm-8 shadow p-3 mb-5 bg-white rounded"> 
            <h4 class="title">ระบุเหตุผลที่ไม่ผ่าน</h4>

                <form action="<?php echo site_url('Manager_car_price/add_not_passed'); ?>" method="POST" class="form-horizontal">

                    <input type="hidden" name="id_Not_passed" id="id_Not_passed" class="form-control" value="">

                    <div class="form-row">
                        
                        <div class="col">
                        <label for="Brand">หมายเหตุ</label>
                            <input type="text" name="Name_not" id="Name_not" class="form-control" placeholder="หมายเหตุ" value="">
                        </div>
                        
                        <input type="hidden" value="$rs->idCarregis" name="idBrand" id="idBrand" />

                    </div>

                    <button type="submit" class="btn btn-success mt-5" style="font-size:20px">บันทึกข้อมูล</button>
                </form>
            </div>
        </div>
    </div>
</div>