<div class="container" style="text-align: center;"><br><br><br><br><br>
    <div style="background-color: white; border-radius: 5px;">
        <div class="row  justify-content-center">
            <div class="col-sm-8 shadow p-3 mb-5 bg-white rounded"> 
            <h4 class="title">เพิ่มรุ่นและราคารถยนต์</h4>

                <form action="<?php echo site_url('Manager_car_price/add_car_price_2'); ?>" method="POST" class="form-horizontal">

                    <input type="hidden" name="id_Gen" id="id_Gen" class="form-control" value="">

                    <div class="form-row">
                        
                        <div class="col">
                        <label for="Brand">รุ่น</label>
                            <input type="text" name="Name_Gen" id="Name_Gen" class="form-control" placeholder="Model" value="">
                        </div>
                        <div class="col">
                        <label for="Brand">ราคา</label>
                            <input type="text" name="Price" pattern="^(0|[1-9][0-9]*)$" id="Price" class="form-control" placeholder="Price" value="">
                        </div>
                        
                        <input type="hidden" value="<?php echo $id; ?>" name="idBrand" id="idBrand" />

                    </div>

                    <button type="submit" class="btn btn-success mt-5" style="font-size:20px">บันทึกข้อมูล</button>
                </form>
            </div>
        </div>
    </div>
</div>