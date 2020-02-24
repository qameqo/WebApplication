
<form action="" method="POST">
<input id="demo_text_1" type="text"/>


</form>

<!-- <form id="dis" action="Firstpage">
<h1>Disclaimer</h1>
<p>Blah blah blah blah blah blah blah blah blah blah blah blah blah.</p>
<p><input type="checkbox" id="read" onclick="ok();" onkeypress="ok();" />I have read all above.</p>
<input type="submit" id="acc" value="I accept the disclaimer" disabled="disabled" />
</form> -->

<!-- <script language="javascript" type="text/javascript">
function ok() {
with (dis) {
if (read.checked)
acc.disabled = false;
else
acc.disabled = true;
}
}
</script> -->



<script type="text/javascript">
// ฟังก์ชั่นรับการกดคีย์ เป็นตัวเลขเท่านั้น
// ฟังก์ชั่นตรวจสอบค่าเกินกำหนด (100)
$("#demo_text_1").change(function(){ 
   var de =  $("#demo_text_1").val();
  if(de > 100 || de < 80) {
     alert('ไม่สามารถกรอกข้อมูลเกิน 100 ได้');
  }
//   else if(de < 80)
//   {
//     alert('no');
//   }
  else
  {
    alert('ได้ครับ');
  }
});
</script>

<!-- <script type="text/javascript">

$G("demo_text_1").addEvent("keyup", maxVal);

$G("demo_text_2").addEvent("keyup", maxVal);
</script> -->


