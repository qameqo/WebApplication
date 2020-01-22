<div class="container" style="text-align: center;"><br><br><br><br><br>
    <div style="background-color: white; border-radius: 5px;">
        <div class="row  justify-content-center">
            <div class="col-sm-8 shadow p-3 mb-5 bg-white rounded"> 
            <h4 class="title">Edit Car Price</h4>

                <form action="<?php echo site_url('Manager_car_price/edit_car_price'); ?>" method="POST" class="form-horizontal">

                    <input type="hidden" name="id_Gen" id="id_Gen" class="form-control" value="<?php echo $rs_edit->id_Gen; ?>">

                    <div class="form-row">
                        
                        <div class="col">
                        <label for="Brand">รุ่น</label>
                            <input type="text" name="Name_Gen" id="Name_Gen" class="form-control" placeholder="Brand" value="<?php echo $rs_edit->Name_Gen; ?>">
                        </div>

                        <div class="col">
                        <label for="Price">ราคา</label>
                            <input type="text" name="Price" id="Price" pattern="^(0|[1-9][0-9]*)$" class="form-control" placeholder="Last name" value="<?php echo $rs_edit->Price; ?>">
                        </div>

                    </div>

                   

                    <button type="submit" class="btn btn-success">Edit</button>
                </form>
            </div>
        </div>
    </div>
</div>