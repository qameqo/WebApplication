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
    #ok {
  /* border-style: groove; */
  /* border-color: #F60200; */
    }
    
</style>

                                                    <?php $this->db->select('*');
                                                    $this->db->from('Type_Insurance');
                                                    $this->db->where('id_Insurance', 1);
                                                    $query =  $this->db->get();
                                                    $qa = $query->result_array();
                                                    
                                                    ?>   
                                                    <?php $this->db->select('*');
                                                    $this->db->from('Type_Insurance');
                                                    $this->db->where('id_Insurance', 2);
                                                    $query =  $this->db->get();
                                                    $qb = $query->result_array();
                                                    
                                                    ?>

<?php 
      $this->db->select('*');
     $this->db->from('Carregis');
     $this->db->join('Brand', 'Carregis.idBrand = Brand.idBrand');
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
<br><br>
<form class="form-signin" id="edit" name="edit" method="POST" action="<?php echo base_url('Rentnext/insup/'.$idc); ?>">
    <div class="row justify-content-center">

        <div class="col-sm-5 shadow p-3 mb-5 bg-white rounded"
            style="background-color: #FFFFFF; border-radius: 10px ; margin-left: 0em ; margin-right: 1em ;">
           
            
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
            <img src="<?php echo base_url('./img/'.$data['Name_image']);?>" style="height:78px; weight:78px;">
            <?php } ?>
           
            <br>
            <br><br>
            <br>
            <!-- <div class="col-sm-6 shadow p-3 mb-5 bg-white rounded"
            style="background-color: #FFFFFF; border-radius: 10px ; margin-left: 1em ; margin-right: 1em ;"> -->
            <?php 
            $this->db->select('*');
            $this->db->from('Carregis');
            $this->db->join('Brand', 'Carregis.idBrand = Brand.idBrand');
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
            <div class="row" id="ok">
                <div class="col-sm">
                    <div class="row " style="margin-left: 6em ;" >
                        <div class="col-sm" id="ok">
                            <p>ยี่ห้อ :&nbsp;<?php echo $data['Name_Brand'];?></p>
                        </div>
                        
                    </div>
                </div>
                &nbsp;
                &nbsp;
                &nbsp;
                <div class="col-sm ">
                    <div class="row justify-content-center" >
                        <div class="col-sm">
                            <p>รุ่น :&nbsp;<?php echo $data['Name_Gen'];?></p>
                        </div>
                       
                    </div>
                </div>
            </div>
            <div class="row"id="okk">
                <div class="col-sm">
                    <div class="row" style="margin-left: 6em ;">
                        <div class="col-sm">
                            <p>ปี :&nbsp;<?php echo $data['Yearcar'];?></p>
                        </div>
                        
                    </div>
                </div>
                &nbsp;
                &nbsp;
                &nbsp;
                <div class="col-sm">
                    <div class="row">
                        <div class="col-sm">
                            <p>เลขไมล์ :&nbsp;<?php echo $data['Mileage'];?></p>
                        </div>
                       
                    </div>
                </div>
            </div>
            <div class="row" id="okk">
                <div class="col-sm">
                    <div class="row" style="margin-left: 6em ;">
                        <div class="col-sm">
                            <p>สี :&nbsp;<?php echo $data['Color'];?></p>
                        </div>
                      
                    </div>
                </div>
                &nbsp;
                &nbsp;
                &nbsp;
                <div class="col-sm">
                    <div class="row">
                        <div class="col-sm">
                            <p>ระบบเกียร์ :&nbsp;<?php echo $data['Gear'];?></p>
                        </div>
                     
                    </div>
                </div>
            </div>
            <div class="row" id="okk">
                <div class="col-sm">
                    <div class="row" style="margin-left: 6em ;">
                        <div class="col-sm">
                            <p>จำนวนที่นั่ง :&nbsp;<?php echo $data['Number_Seat'];?></p>
                        </div>
                      
                    </div>
                </div>
                &nbsp;
                &nbsp;
                &nbsp;
                <div class="col-sm">
                    <div class="row">
                        <div class="col-sm">
                            <p>เชื้อเพลิง :&nbsp;<?php echo $data['Name_Fuel'];?></p>
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
            
            <?php } ?>
            </div>
            
        </div>
        <?php 
            $this->db->select('*');
            $this->db->from('Carregis');
            $this->db->where('idCarregis', $idc);
            $query = $this->db->get();
            $q1 = $query->result_array();
             ?>
             <?php 
            $dat = date("Y/m/d", strtotime($startdat));
            $dat2 = date("Y/m/d", strtotime($dateendd)); ?>
        <div class="col-sm-3 shadow p-3 mb-5 bg-white rounded"
            style="background-color: #FFFFFF; border-radius: 10px ; margin-left: 0em ; margin-right: 0em ;">
            <div class="row">
                <div class="col-sm">
                    <p style="text-align:Left;">วันเริ่มเช่า</p>
                </div>
                <div class="col-sm text-right">
               <input id="datetimepickerstart" type="text" value="<?php  echo $dat ?>" style="width:120px; text-align:center;"
                        name="start" required readonly>
                        <!-- <p style="color:red; font-size:10px;">* จองรถล่วงหน้าได้ไม่เกิน 3 วัน</p> -->
                    <!-- <input id="yes" type="text" value="<?php  echo "$startdat"?>" style="width:120px; text-align:center; background-color:Gainsboro;" name="yes" readonly> -->
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    <p style="text-align:Left;">วันส่งคืน</p>
                  
                </div>
                <div class="col-sm text-right">
                    <!-- <input id="no" type="text" value="<?php echo "$dateendd"?>" style="width:120px; text-align:center; background-color:Gainsboro;"
                        name="no" readonly> -->
                        <input id="datetimepickerend" type="text" value="<?php echo $dat2 ?>" style="width:120px; text-align:center;"
                        name="end" required readonly>
                        <p style="color:red; font-size:10px;">* ระยะเวลาการเช่าไม่เกิน 5 วัน</p>
                </div>
            </div>
                <div class="row">
                <div class="col-sm">

                </div>
                <div class="col-sm">
                </div>
                </div>
            <div class="row">
                <div class="col-sm text-left">
                    <div class="label-bot">
                        <div class="radio">
                            <label style="padding-right: 8px;">
                                <input type="radio" name="ins" value="1" id="stand" data-parsley-multiple="transmission"
                                     required>
                                    <span style="vertical-align: top;"> <?php foreach($qa as $data){ ?>
                                            <?php echo $data['Name_Insurance'] ?>
                                                <?php } ?></span>
                                <?php foreach($qq as $data) { 
                                                $hj = $data['RentalPrice'];
                                                $ins = $hj * 0.25;
                                                $inss = number_format($ins,0);
                                                ?>
                                                <?php   $a = 1000;
                                                        $aa = 2001;
                                                        $aaa = 3001;
                                                        $aaaa = 4001;
                                                        $aaaaa = 5000;
                                                        $a1 = 1001;
                                                        $b = 2000;
                                                        $bb = 3000;
                                                        $bbb = 4000;
                                                        $stand1 = 250;
                                                        $stand2 = 350;
                                                        $stand3 = 450;
                                                        $stand4 = 550;
                                                        $stand5 = 650;
                                                        $stand6 = 750;
                                                        //$insstand = $gh * $fg; // ราคาประกัน
                                                        if($hj <= $a){?>
                                                            <p style="text-align:right;"><?php echo $stand1; ?>&nbsp;บาท/วัน</p>
                                                       <?php }else if(($hj >= $a1) && ($hj <= $b)){ ?>
                                                            <p style="text-align:right;"><?php echo $stand2; ?>&nbsp;บาท/วัน</p>
                                                       <?php }else if(($hj >= $aa) && ($hj <= $bb)){?>
                                                            <p style="text-align:right;"><?php echo $stand3; ?>&nbsp;บาท/วัน</p>
                                                       <?php }else if(($hj >= $aaa) && ($hj <= $bbb)){ ?>
                                                            <p style="text-align:right;"><?php echo $stand4; ?>&nbsp;บาท/วัน</p>
                                                       <?php }else if(($hj >= $aaaa) && ($hj <= $aaaaa)){ ?>
                                                            <p style="text-align:right;"><?php echo $stand5; ?>&nbsp;บาท/วัน</p>
                                                       <?php } else if($hj > $aaaaa){ ?>
                                                            <p style="text-align:right;"><?php echo $stand6; ?>&nbsp;บาท/วัน</p>
                                                       

                                                            <?php  } ?>
                                <!-- <p style="text-align:right;"><?php echo $inss ?>&nbsp;บาท/วัน</p> -->
                                <?php } ?>
                            </label>
                            <a type="button" class="btn btn-outline-secondary" style="height:40px; color:red;" href="#"
                                data-toggle="modal" data-target="#modal-de"> <u>ประกันภัยพื้นฐาน</u></a>
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
                                        <?php foreach($qa as $data){ ?>
                                                <?php echo $data['DetailIns'] ?>
                                            <!-- <p>ประกันที่จะทำให้คุณขับรถได้อย่างมั่นใจไร้กังวลด้วยตัวเลือกที่ทำให้คุณไม่ต้องเสียค่าใช้จ่ายใด ๆ หากคุณต้องรับผิดชอบต่ออุบัติเหตุนั้นๆ</p> -->
                                            <?php } ?>
                                            <a href="<?php echo base_url('Insurance'); ?>" target="_blank" style="color:red;"><u>รายละเอียดเพิ่มเติม</u></a>
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
                                 required >
                                <span style="vertical-align: top;"> <?php foreach($qb as $data){ ?>
                                            <?php echo $data['Name_Insurance'] ?> 
                                                <?php } ?></span>
                                <?php foreach($qq as $data) { 
                                                $hj = $data['RentalPrice'];
                                                $ins = $hj * 0.35;
                                                $insd = number_format($ins,0);
                                                ?>
                                                <?php $a = 1000;
                                                        $aa = 2001;
                                                        $aaa = 3001;
                                                        $aaaa = 4001;
                                                        $aaaaa = 5000;
                                                        $a1 = 1001;
                                                        $b = 2000;
                                                        $bb = 3000;
                                                        $bbb = 4000;
                                                        $stand1 = 400;
                                                        $stand2 = 500;
                                                        $stand3 = 600;
                                                        $stand4 = 700;
                                                        $stand5 = 800;
                                                        $stand6 = 900;
                                                        //$insstand = $gh * $fg; // ราคาประกัน
                                                        if($hj <= $a){?>
                                                            
                                                            <p style="text-align:right;"><?php echo $stand1; ?>&nbsp;บาท/วัน</p>
                                                       <?php }else if(($hj >= $a1) && ($hj <= $b))
                                                        { ?>
                                                           <p style="text-align:right;"><?php echo $stand2; ?>&nbsp;บาท/วัน</p>
                                                       <?php }else if(($hj >= $aa) && ($hj <= $bb)){?>
                                                            <p style="text-align:right;"><?php echo $stand3; ?>&nbsp;บาท/วัน</p>
                                                       <?php }else if(($hj >= $aaa) && ($hj <= $bbb)){ ?>
                                                            <p style="text-align:right;"><?php echo $stand4; ?>&nbsp;บาท/วัน</p>
                                                       <?php }
                                                        else if(($hj >= $aaaa) && ($hj <= $aaaaa)){ ?>
                                                            <p style="text-align:right;"><?php echo $stand5; ?>&nbsp;บาท/วัน</p>
                                                       <?php }
                                                        else if($hj > $aaaaa){ ?>
                                                            <p style="text-align:right;"><?php echo $stand6; ?>&nbsp;บาท/วัน</p>

                                                            <?php  } ?>
                                <!-- <p style="text-align:right;">&nbsp;บาท/วัน</p> -->
                                <?php } ?>
                            </label>
                            <a type="button" class="btn btn-outline-secondary" style="height:40px; color:red;" href="#"
                                data-toggle="modal" data-target="#modal-default"><u>ประกันภัยพรีเมี่ยม</u></a>
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
                                            <?php foreach($qb as $data){ ?>
                                                <?php echo $data['DetailIns'] ?>
                                            <!-- <p>ประกันที่จะทำให้คุณขับรถได้อย่างมั่นใจไร้กังวลด้วยตัวเลือกที่ทำให้คุณไม่ต้องเสียค่าใช้จ่ายใด ๆ หากคุณต้องรับผิดชอบต่ออุบัติเหตุนั้นๆ</p> -->
                                            <?php } ?>&nbsp;&nbsp;
                                            <a href="<?php echo base_url('Insurance'); ?>" target="_blank" style="color:red;"><u>รายละเอียดเพิ่มเติม</u></a>
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
                <div class="col-sm">
                    <p style="text-align:Left;">ราคารถ/วัน</p>
                </div>
                <div class="col-sm">
                    <?php foreach($qq as $data) { ?>
                    <p style="text-align:right;"><?php echo number_format($data['RentalPrice'],0)?>&nbsp;บาท</p>
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
                    <!-- <p style="text-align:left;">ราคามัดจำรถ</p>
                    <input type="hidden" id="hapan" name="hapan" value="5000"> -->
                    <p style="text-align:Left; color:red;">ราคาทั้งหมดรวมvat 7%</p>
                    <input type="hidden" id="totalvat" name="totalvat">
                </div>
                <div class="col-sm">
                    <!-- <p style="text-align:right;">5,000 บาท</p> -->
                    
                    <p style="text-align:right; color:red; font-size:20px;" id="total">
                        &nbsp;บาท</p>
                    <input type="hidden" id="total2" name="total">
                </div>
            </div>
            <div class="row justify-content-center">
            <div class="p-2 alert alert-warning clearfix" style="width:370px; height:50px; border-radius: 2px; background-color:#FEF7E4;">
                            <div class="pull-left" style="color:black;">
                                <i class="fa fa-shield fa-fw"></i> เงินมัดจำรถ
                                <!--
                                จำนวนเงินมัดจำ 
                                <i tabindex="0" class="fa fa-info-circle secondary-color" style="display: inline-block;" aria-hidden="true" role="button" data-toggle="popover" data-trigger="focus" data-placement="top"  data-content='ระบบจะทำการคืนวงเงินมัดจำภายหลังจากการเช่าสิ้นสุดลง ภายใน 7-15 วัน ขึ้นอยู่กับธนาคารและผู้ให้บริการบัตรเครดิต '></i>
                                -->
                                <div class="small text-gray" style="color:black;">
                                ชำระ ณ วันที่รับรถเช่า และได้รับคืนเมื่อสิ้นสุดการเช่า
                                </div>
                            </div>
                            <div class="pull-right number-format text-bold">
                                <span class="currency-after" style="color:black;">฿</span> 
                                <span class="" style="color:black;">5,000</span>
                            </div>
                            </div>
            </div>
        
            <div class="row justify-content-center">
                <button type="submit" class="btn btn-danger" id="book"
                    style="background-color: #F60200; color: white; width:370px;" onclick="return confirm('ยืนยันข้อมูลการจองรถ ?');" disabled>จอง</button>
            </div>
            
        </div>
    </div>
    <!-- <div class="row justify-content-center">
        <div class="col-sm-6 shadow p-3 mb-5 bg-white rounded"
            style="background-color: #FFFFFF; border-radius: 10px ; margin-left: 1em ; margin-right: 1em ;">
            <?php 
            $this->db->select('*');
            $this->db->from('Carregis');
            $this->db->join('Brand', 'Carregis.idBrand = Brand.idBrand');
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
            <div class="row" id="okk">
                <div class="col-sm">
                    <div class="row"  id="ok">
                        <div class="col-sm">
                            <p>ยี่ห้อ :</p>
                        </div>
                        <div class="col-sm">
                            <?php echo $data['Name_Brand'];?>
                        </div>
                    </div>
                </div>
                &nbsp;
                &nbsp;
                &nbsp;
                <div class="col-sm ">
                    <div class="row" >
                        <div class="col-sm">
                            <p>รุ่น :</p>
                        </div>
                        <div class="col-sm">
                            <?php echo $data['Name_Gen'];?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row"id="okk">
                <div class="col-sm">
                    <div class="row" id="ok">
                        <div class="col-sm">
                            <p>ปี :</p>
                        </div>
                        <div class="col-sm">
                            <?php echo $data['Yearcar'];?>
                        </div>
                    </div>
                </div>
                &nbsp;
                &nbsp;
                &nbsp;
                <div class="col-sm">
                    <div class="row">
                        <div class="col-sm">
                            <p>เลขไมล์ :</p>
                        </div>
                        <div class="col-sm">
                            <?php echo $data['Mileage'];?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" id="okk">
                <div class="col-sm">
                    <div class="row" id="ok">
                        <div class="col-sm">
                            <p>ระบบเกียร์ :</p>
                        </div>
                        <div class="col-sm">
                            <?php echo $data['Gear'];?>
                        </div>
                    </div>
                </div>
                &nbsp;
                &nbsp;
                &nbsp;
                <div class="col-sm">
                    <div class="row">
                        <div class="col-sm">
                            <p>สี :</p>
                        </div>
                        <div class="col-sm">
                            <?php echo $data['Color'];?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" id="okk">
                <div class="col-sm">
                    <div class="row" id="ok">
                        <div class="col-sm">
                            <p>จำนวนที่นั่ง :</p>
                        </div>
                        <div class="col-sm">
                            <?php echo $data['Number_Seat'];?>
                        </div>
                    </div>
                </div>
                &nbsp;
                &nbsp;
                &nbsp;
                <div class="col-sm">
                    <div class="row">
                        <div class="col-sm">
                            <p>เชื้อเพลิง :</p>
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
        <div class="col-sm-2 mb-5 bg-white rounded"
            style="background-color: #FFFFFF; border-radius: 10px ; margin-left: 1em ; margin-right: 1em ;">
           
            </div>
            -->


       
</form>
<!-- <script>
	var st = 0;
	var en = 0;
	$(document).ready(function(){  
      $('#license').change(function(){  
           license = $('#license').val();  
           if(license  != '')  
           {  
                $.ajax({  
                     url:"<?php echo base_url(); ?>Owner/checklicense",  
                     method:"POST",  
                     data:{license:license},
                     success:function(data){  
                        //   $('#license_result').html(data);
					 console.log( data);
					 if(data.trim() === "true"){
						console.log("มีไอสัส");
						$('#fail').removeAttr('hidden')
						$('#success').attr('hidden',true)
						$('#game').attr('disabled',true)
						document.getElementById("game").style.background = "gray";

					 }else
					 {
						console.log("ไม่มี");
						$('#success').removeAttr('hidden')
						$('#fail').attr('hidden',true)
						$('#game').removeAttr('disabled')
						document.getElementById("game").style.background = "#F60200";
					 }
                     }  
                });  
           }  
	  });  
	  $('#carbody').change(function(){  
		   carbody = $('#carbody').val();  
		   var licen = document.getElementById("license").value;
		  
           if(carbody != '')  
           {  
                $.ajax({  
                     url:"<?php echo base_url(); ?>Owner/checkcarbody",  
                     method:"POST",  
                     data:{carbody:carbody},  
                     success:function(data){  
						//   $('#carbody_result').html(data);
						console.log("แก้ไขแล้ว");
					 if(data.trim() === "true"){
						console.log("มีแล้ว");
						$('#fail2').removeAttr('hidden')
						$('#success2').attr('hidden',true)
						$('#game').attr('disabled',true)
						document.getElementById("license").disabled = true;
						document.getElementById("game").style.background = "gray";
					 }else
					 {
						console.log("ไม่มี");
						$('#success2').removeAttr('hidden')
						$('#fail2').attr('hidden',true)
						$('#license').removeAttr('disabled')
						// document.getElementById("carbody").readOnly = true;
					 }
                     }  
                });  
           }  
      });  
 });

 </script> -->



<script>
    // var st = 0;
    // var en = 0;
    // var start = 0;
    // var end = 0;
    // var sta = 0;
    // var edn = 0;
    // $('#datetimepickerend').change(function(){
    //     st = document.getElementById("datetimepickerstart").value;
    //     en = document.getElementById("datetimepickerend").value;
    //     var startdat = moment(st, 'YYYY/MM/DD');
    //     start = startdat.format('YYYY-MM-DD').toString();
    //     var dateen = moment(en, 'YYYY/MM/DD');
    //     end = dateen.format('YYYY-MM-DD').toString();
        
    //     $.get("<?=base_url('Rentnext/selectstart/')?>"+start"/"+end, 
    //           function (data) {
    //            console.log(data)
    //             $("#totalcar").text(data + " บาท")
    //             $("#totalcar2").val(game)
    //              } 
    //       );  
    // });
</script>
<!-- <script>
    var start = 0;
    var end = 0;
    $(document).ready(function () {
        $('#datetimepickerstart').change(function () {
             start = $("#datetimepickerstart").val()
            if (start != '') {
                $('#datetimepickerend').val(null)
                $('#stand').attr('disabled', true)
                $('#pre').attr('disabled', true)
                $('#pre').prop('checked',false)
                $('#stand').prop('checked',false)
                $('#book').attr('disabled', true)
                $("#totalcar").text(" บาท")
                $("#totalcar2").val(null)
                $("#totalvat").val(null)
                $("#ins").text(" บาท")
                $("#totalins").val(null)
                $("#total").text(" บาท")
                $("#total2").val(null)


                
            } else {
                $('#stand').attr('disabled', true)
                $('#pre').attr('disabled', true)
            }
        });
        $('#datetimepickerend').change(function () {
             end = $("#datetimepickerend").val()
            if (end != '') {
                $('#stand').removeAttr('disabled')
                $('#pre').removeAttr('disabled')
                $('#pre').prop('checked',false)
                $('#stand').prop('checked',false)
                $("#totalvat").val(null)
                $("#ins").text(" บาท")
                $("#totalins").val(null)
                $("#total").text(" บาท")
                $("#total2").val(null)
                $('#book').attr('disabled', true)
            } else {
                $('#stand').attr('disabled', true)
                $('#pre').attr('disabled', true)
            }
        });
    });
</script> -->