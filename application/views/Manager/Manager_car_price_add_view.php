<div class="container" style="text-align: center;"><br><br><br><br><br>
    <div style="background-color: white; border-radius: 5px;">
        <div class="row  justify-content-center">
            <div class="col-sm-8 shadow p-3 mb-5 bg-white rounded"> 
            <h4 class="title">เพิ่มยี่ห้อรถยนต์</h4>

                <form action="<?php echo site_url('Manager_car_price/add_car_price'); ?>" method="POST" class="form-horizontal">

                    <input type="hidden" name="id_Gen" id="id_Gen" class="form-control" value="">

                    <div class="form-row">
                        
                        <div class="col">
                        <label for="Brand">ยี่ห้อ</label>
                            <input type="text" name="Name_Brand" id="Name_Brand" title="กรุณากรอกตัวอักษรพิมพ์ใหญ่ (A-Z)" class="form-control" required placeholder="Brand" value="">
                        </div>

                    </div>

                    <button type="submit" class="btn btn-success mt-5" style="font-size:20px">เพิ่มข้อมูลและดำเนินการต่อ</button>
                </form>
            </div>
        </div>
    </div>
</div>