<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="alert alert-secondary" role="alert">
    แจ้งข้อมูลข่าวสารผ่าน Line Notify
</div>
<form action="line_notify/notify" method="post">
    <div class="form-group">
        <label for="lblNotify">ข้อความ</label>
        <textarea class="form-control" id="txtNotify" name="txtNotify" style="width:350px" rows="7"></textarea>
        <button type="submit" name="btnNotify" style="margin-top:10px" class="btn btn-success">แจ้งข้อมูล</button>
        <label id="flag" style="visibility: <?=isset($flag)?'display':'hidden'?>;color:red">
            <?php
                if(isset($flag)){
                    if($flag==1){
                        echo "แจ้งข้อมูลสำเร็จ";
                    }elseif($flag==0){
                        echo "แจ้งข้อมูลไม่สำเร็จ";
                    }
                }
            ?>  
        </label>
    </div>
</form>