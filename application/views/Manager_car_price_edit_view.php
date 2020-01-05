<div class="container" style="text-align: center;"><br><br><br><br><br>
    <div style="background-color: white; border-radius: 5px;">
        <div class="row  justify-content-center">
            <div class="col-sm-8 shadow p-3 mb-5 bg-white rounded"> 
            <h4 class="title">Edit Car Price</h4>

                <form action="<?php echo site_url('Manager_car_price/edit_emp'); ?>" method="POST" class="form-horizontal">

                    <input type="hidden" name="id_Car_price" id="id_Car_price" class="form-control" value="<?php// echo $rs_edit->id_Car_price; ?>">

                    <div class="form-row">
                        <div class="col">
                        <label for="Model">Model</label>
                            <input type="text" name="Model" id="Model" class="form-control" placeholder="Model" value="<?php echo $rs_edit->Model; ?>">
                        </div>
                        <div class="col">
                        <label for="Type">Type</label>
                            <input type="text" name="Type" id="Type" class="form-control" placeholder="Type" value="<?php echo $rs_edit->Type; ?>">
                        </div>
                    </div>

                    <div class="form-row mt-3">
                        <div class="col">
                        <label for="Brand">Brand</label>
                            <input type="text" name="Brand" id="Brand" class="form-control" placeholder="Brand" value="<?php echo $rs_edit->Brand; ?>">
                        </div>
                        <div class="col">
                        <label for="Price">Price</label>
                            <input type="text" name="Price" id="Price" class="form-control" placeholder="Last name" value="<?php echo $rs_edit->Price; ?>">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success">Edit</button>
                </form>
            </div>
        </div>
    </div>
</div>