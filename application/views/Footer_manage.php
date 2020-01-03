    <!--   Core JS Files   -->
    <!-- <script src="<?php echo base_url(); ?>assets/js/core/jquery.min.js" type="text/javascript"></script> -->
    <script src="<?php echo base_url(); ?>assets/js/core/popper.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/js/plugins/moment.min.js"></script>
    <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
    <script src="<?php echo base_url(); ?>assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="<?php echo base_url(); ?>assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
    <!--  Google Maps Plugin  -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
    <script src="<?php echo base_url(); ?>assets/js/material-kit.js?v=2.0.6" type="text/javascript"></script>
</body>

<script>

$(document).ready( function () {
    $('.table').dataTable();
} );

$('#add_button').click(function(){
        $('#employee_form')[0].reset();
        $('.modal-title').text("Add Employee");
        $('#action').val("Add");
        $('#operation').val("Add");
    });
</script>

<div id="employeeModal" class="modal fade">
    <div class="modal-dialog">
        <form method="post" id="employee_form">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Employee</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="Email">Email address</label>
                        <input type="email" class="form-control" id="Email" aria-describedby="emailHelp" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>

                    <div class="form-group">
                        <label for="Password">Password</label>
                        <input type="password" class="form-control" id="Password" placeholder="Password">
                    </div>

                    <div class="form-row">
                        <div class="col">
                        <input type="text" id="Fname" class="form-control" placeholder="First name">
                        </div>
                        <div class="col">
                        <input type="text" id="Lname" class="form-control" placeholder="Last name">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="Address">Address</label>
                        <textarea class="form-control" id="Address" rows="3"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="Tel">Tel.</label>
                        <input type="text" class="form-control" id="Tel" placeholder="0881234567">
                    </div>

                    <div class="form-group">
                        <label for="Row">Row select</label>
                        <select class="form-control selectpicker" data-style="btn btn-link" id="Row">
                        <option>พนักงาน</option>
                        <option>ช่างซ่อมบำรุง</option>
                        <option>เจ้าหน้าที่ประกัน</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="employee_id" id="employee_id" />
                    <input type="hidden" name="operation" id="operation" value="Add" />
                    <input type="submit" name="action" id="action" class="btn btn-success" value="Add" />
                </div>
            </div>
        </form>
    </div>
</div>