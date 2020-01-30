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
                <input id="datetimepickerstart" type="text" value="<?php echo date('Y/m/d'); ?>" style="width:120px; text-align:center;" name="start">
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    <p style="text-align:Left;">วันส่งคืน</p>
                    <p style="color:red; font-size:12px; ">* ไม่อนุญาตให้เช่ารถเกิน 5 วัน</p>
                </div>
                <div class="col-sm text-right">
                <input id="datetimepickerend" type="text" value="" style="width:120px; text-align:center;" name="end">
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    <p style="text-align:Left;">ค่าเช่ารถ/วัน</p>
                </div>
                <div class="col-sm">
                    <?php foreach($q1 as $data){ ?>
                    <p style="text-align:right;"><?php echo number_format($data['RentalPrice']);?>&nbsp;บาท</p>
                    <?Php } ?>
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    <p style="text-align:Left;">ประกันภัย</p>
                </div>
                <div class="col-sm">
                    <?php foreach($q1 as $data){
                        $ga = $data['RentalPrice'];
                        $gam = 25;
                        $game = 100;
                        $total = $ga * $gam / $game;
                        ?>
                    <p style="text-align:right;" name="ins"><?php  echo number_format($total);?>&nbsp;บาท</p>
                    <?php } ?>
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    <br>
                    <p style="text-align:Left; color:red;">รวมทั้งหมด</p>
                    <p style="text-align:left; color:red; font-size:15px;">รวม vat 7 % แล้ว</p>
                </div>
                <div class="col-sm">
                    <?php foreach($q1 as $data){
                        $ga = $data['RentalPrice'];
                        $gam = 25;
                        $game = 100;
                        //ราคาประกัน
                        $total = $ga * $gam / $game;
                        //ราคารวม
                        $total2 = $ga + $total;
                        //ราคา Vat
                        $vat = $total2 * 7/100;
                        //ราคารวม + vat แล้ว
                        $total3 = $total2 + $vat;

                        ?>
                    <p style="text-align:right; color:red; font-size:35px;">
                        <?php  echo number_format($total3);?>&nbsp;บาท</p>

                    <?php } ?>
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
                            <p>เชื้อเพลิงที่ 1</p>
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
                    </div>
                </div>
            </div>
</form>