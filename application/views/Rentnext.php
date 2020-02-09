<style>
    .fileUpload {
        position: relative;
        overflow: hidden;
    }

    .fileUpload input.upload {
        position: absolute;
        top: 0;
        right: 0;
        margin: 0;
        padding: 0;
        font-size: 20px;
        cursor: pointer;
        opacity: 0;
        filter: alpha(opacity=0);
    }
</style>
<?php 
      $this->db->select('*');
     $this->db->from('Carregis');
     $this->db->join('Brand', 'Carregis.id_Brand = Brand.idBrand');
     $this->db->join('Generation', 'Carregis.id_Gen = Generation.id_Gen');
     $this->db->join('Member', 'Carregis.id_Member = Member.id_Member');
     $this->db->where('idCarregis',$idc);
     $query = $this->db->get();
     $qq = $query->result_array();
    ?>
<div class="col-md-13 text-center"><br>
    <?php foreach($qq as $data){ ?>
    <h4 style="color:#000000">
        <?php echo $data['Name_Brand'];?>&nbsp;<?php echo $data['Name_Gen'];?>&nbsp;<?php echo $data['Yearcar'];?></h4>
    <?php } ?>
</div>
<form class="form-signin" id="edit" name="edit" method="POST" action="<?php echo base_url('Rentnext/insup/'.$idc); ?>">
    <div class="row justify-content-center">

        <div class="col-sm-5 shadow p-3 mb-5 bg-white rounded"
            style="background-color: #FFFFFF; border-radius: 10px ; margin-left: 1em ; margin-right: 1em ;">
            <H4 style="text-align:center;">รูปภาพเกี่ยวกับรถ</H4>
            <br>
            <?php 
      $this->db->select('*');
      $this->db->from('Images');
      $this->db->where('idCarregis',$idc);
      $query = $this->db->get();
      $q2 = $query->result_array();
    ?>
            <?php foreach($q2 as $data){ ?>
            <img src="<?php echo base_url('./img/'.$data['Name_image']);?>" style="height:80px; weight:80px;">
            <?php } ?>


            <?php 
            $this->db->select('*');
            $this->db->from('Carregis');
            $this->db->where('idCarregis', $idc);
            $query = $this->db->get();
            $q1 = $query->result_array();
             ?>
        </div>
        <div class="col-sm-3 shadow p-3 mb-5 bg-white rounded"
            style="background-color: #FFFFFF; border-radius: 10px ; margin-left: 1em ; margin-right: 1em ;">
            <div class="row">
                <div class="col-sm">
                    <p style="text-align:Left;">วันเริ่มเช่า</p>
                </div>
                <div class="col-sm text-right">
                    <input id="datetimepickerstart" type="text" value=""
                        style="width:120px; text-align:center;" name="start">
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    <p style="text-align:Left;">วันส่งคืน</p>
                  
                </div>
                <div class="col-sm text-right">
                    <input id="datetimepickerend" type="text" value="" style="width:120px; text-align:center;"
                        name="end">
                      
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    
                    <p style="color:red; font-size:12px; ">* ไม่ให้จองรถล่วงหน้าเกิน 3 วัน</p>
                </div>
                <div class="col-sm text-right">
                    <p style="color:red; font-size:12px; ">* ไม่อนุญาตให้เช่ารถเกิน 5 วัน</p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    <p style="text-align:Left;">ราคารถ/วัน</p>
                </div>
                <div class="col-sm">
                    <?php foreach($qq as $data) { ?>
                    <p style="text-align:right;"><?php echo $data['RentalPrice']?>&nbsp;บาท</p>
                    <?php } ?>
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    <p style="text-align:Left;">ราคารถ</p>
                </div>
                <div class="col-sm">

                    <p style="text-align:right;" id="totalcar">&nbsp;บาท</p>
                    <input type="hidden" id="totalcar2" name="totalcar2">
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    <p style="text-align:Left;">ราคาประกัน<p>
                </div>
                <div class="col-sm">

                    <p style="text-align:right;" name="ins" id="ins">&nbsp;บาท</p>
                    <input type="hidden" id="totalins" name="totalins">
                </div>
            </div>
            <div class="row">
                <div class="col-sm">

                    <p style="text-align:Left; color:red;">รวมทั้งหมด</p>
                    <p style="text-align:left; color:red; font-size:15px;">รวมมัดจำรถ 5,000 บาท</p>
                    <p style="text-align:left; color:red; font-size:15px;">รวมvat 7%</p>
                    <input type="hidden" id="totalvat" name="totalvat">
                </div>
                <div class="col-sm">

                    <p style="text-align:right; color:red; font-size:20px;" id="total">
                        &nbsp;บาท</p>
                    <input type="hidden" id="total2" name="total">
                </div>
            </div>
            <div class="row justify-content-center">
                <button type="submit" class="btn btn-danger"
                    style="background-color: #F60200; color: white; width:370px;">จอง</button>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-sm-5 shadow p-3 mb-5 bg-white rounded"
            style="background-color: #FFFFFF; border-radius: 10px ; margin-left: 1em ; margin-right: 1em ;">
            <?php 
            $this->db->select('*');
            $this->db->from('Carregis');
            $this->db->join('Brand', 'Carregis.id_Brand = Brand.idBrand');
            $this->db->join('Generation', 'Carregis.id_Gen = Generation.id_Gen');
            $this->db->join('Seat', 'Carregis.id_Seat = Seat.id_Seat');
            $this->db->join('Fuel', 'Carregis.idFuel = Fuel.idFuel');
            $this->db->where('idCarregis',$idc);
            $query = $this->db->get();
            $qq = $query->result_array();
             ?>
            <div class="row">
                <div class="col-sm">
                    <H4 style="text-align:center;">ข้อมูลเกี่ยวกับรถ</H4>
                </div>
            </div>
            <?php foreach($qq as $data){?>
            <div class="row">
                <div class="col-sm">
                    <div class="row">
                        <div class="col-sm">
                            <p>ยี่ห้อ</p>
                        </div>
                        <div class="col-sm">
                            <?php echo $data['Name_Brand'];?>
                        </div>
                    </div>
                </div>

                <div class="col-sm">
                    <div class="row">
                        <div class="col-sm">
                            <p>รุ่น</p>
                        </div>
                        <div class="col-sm">
                            <?php echo $data['Name_Gen'];?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    <div class="row">
                        <div class="col-sm">
                            <p>ปี</p>
                        </div>
                        <div class="col-sm">
                            <?php echo $data['Yearcar'];?>
                        </div>
                    </div>
                </div>

                <div class="col-sm">
                    <div class="row">
                        <div class="col-sm">
                            <p>เลขไมล์ (กิโลเมตร)</p>
                        </div>
                        <div class="col-sm">
                            <?php echo $data['Mileage'];?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    <div class="row">
                        <div class="col-sm">
                            <p>ระบบเกียร์</p>
                        </div>
                        <div class="col-sm">
                            <?php echo $data['Gear'];?>
                        </div>
                    </div>
                </div>

                <div class="col-sm">
                    <div class="row">
                        <div class="col-sm">
                            <p>สี</p>
                        </div>
                        <div class="col-sm">
                            <?php echo $data['Color'];?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    <div class="row">
                        <div class="col-sm">
                            <p>จำนวนที่นั่ง</p>
                        </div>
                        <div class="col-sm">
                            <?php echo $data['Number_Seat'];?>
                        </div>
                    </div>
                </div>

                <div class="col-sm">
                    <div class="row">
                        <div class="col-sm">
                            <p>เชื้อเพลิง</p>
                        </div>
                        <div class="col-sm">
                            <?php echo $data['Name_Fuel'];?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm">

                </div>

                <div class="col-sm">
                    <div class="row">

                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
        <div class="col-sm-3 shadow p-3 mb-5 bg-white rounded"
            style="background-color: #FFFFFF; border-radius: 10px ; margin-left: 1em ; margin-right: 1em ;">
            <div class="row">
                <div class="col-sm text-center">
                    เพกเกจความคุ้มครอง
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-sm text-left">
                    <div class="label-bot">
                        <div class="radio">
                            <label style="padding-right: 8px;">
                                <input type="radio" name="ins" value="1" id="stand" data-parsley-multiple="transmission"
                                    disabled required>
                                <span style="vertical-align: top;">ประกันภัยพื้นฐาน</span>
                                <?php foreach($qq as $data) { 
                                                $hj = $data['RentalPrice'];
                                                $ins = $hj * 0.25;
                                                $inss = number_format($ins,0);
                                                ?>
                                <p style="text-align:right;"><?php echo $inss ?>&nbsp;บาท/วัน</p>
                                <?php } ?>
                            </label>
                            <a type="button" class="btn btn-outline-secondary" style="height:40px;" href="#"
                                data-toggle="modal" data-target="#modal-de"> <u>ข้อมูลประกันภัยพื้นฐาน</u></a>
                            <div class="modal fade" id="modal-de" tabindex="-1" role="dialog"
                                aria-labelledby="modal-default" aria-hidden="true">
                                <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
                                    <div class="modal-content">

                                        <div class="modal-header">
                                            <h6 class="modal-title" id="modal-title-default">
                                                รายละเอียดประกันภัยพื้นฐาน (Standard)
                                            </h6>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>

                                        <div class="modal-body text-left">
                                            <p>หากเกิดอุบัติเหตุที่ผู้เช่าเป็นฝ่ายผิด ผู้เช่าต้องชำระค่าเสียหายส่วนแรกจำนวน 3,000-50,000 บาท 
                                            ขึ้นอยูกับความเสียหายและระยะเวลาการซ่อม หากรถยนต์ประสบอุบัติเหตุเสียหายหนัก หรือเสียหายทั้งคัน</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-link  ml-auto"
                                                data-dismiss="modal">ปิด</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm text-left">
                    <div class="label-bot">
                        <div class="radio">
                            <label>
                                <input type="radio" name="ins" value="2" data-parsley-multiple="transmission" id="pre"
                                disabled required >
                                <span style="vertical-align: top;">ประกันภัยพรีเมี่ยม</span>
                                <?php foreach($qq as $data) { 
                                                $hj = $data['RentalPrice'];
                                                $ins = $hj * 0.35;
                                                $insd = number_format($ins,0);
                                                ?>
                                <p style="text-align:right;"><?php echo $insd ?>&nbsp;บาท/วัน</p>
                                <?php } ?>
                            </label>
                            <a type="button" class="btn btn-outline-secondary" style="height:40px;" href="#"
                                data-toggle="modal" data-target="#modal-default"><u>ข้อมูลประกันภัยพรีเมี่ยม</u></a>
                            <div class="modal fade" id="modal-default" tabindex="-1" role="dialog"
                                aria-labelledby="modal-default" aria-hidden="true">
                                <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
                                    <div class="modal-content">

                                        <div class="modal-header">
                                            <h6 class="modal-title" id="modal-title-default">
                                            รายละเอียดประกันภัยพรีเมี่ยม (Premium)
                                            </h6>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>

                                        <div class="modal-body text-left">
                                            <p>ประกันที่จะทำให้คุณขับรถได้อย่างมั่นใจไร้กังวลด้วยตัวเลือกที่ทำให้คุณไม่ต้องเสียค่าใช้จ่ายใด ๆ หากคุณต้องรับผิดชอบต่ออุบัติเหตุนั้นๆ</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-link  ml-auto"
                                                data-dismiss="modal">ปิด</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</form>

<script>
    $(document).ready(function () {
        $('#datetimepickerend').change(function () {
            var val = $("#datetimepickerend").val()
            if (val != '') {
                $('#stand').removeAttr('disabled')
                $('#pre').removeAttr('disabled')
            } else {
                $('#stand').attr('disabled', true)
                $('#pre').attr('disabled', true)
            }
        });
    });
</script>