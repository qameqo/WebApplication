<input id="datetimepickerstart" type="text" value="" style="width:120px; text-align:center;" name="start">

<input id="datetimepickerend" type="text" value="" style="width:120px; text-align:center;" name="end">


<form id="dis" action="Firstpage">
<h1>Disclaimer</h1>
<p>Blah blah blah blah blah blah blah blah blah blah blah blah blah.</p>
<p><input type="checkbox" id="read" onclick="ok();" onkeypress="ok();" />I have read all above.</p>
<input type="submit" id="acc" value="I accept the disclaimer" disabled="disabled" />
</form>

<script language="javascript" type="text/javascript">
function ok() {
with (dis) {
if (read.checked)
acc.disabled = false;
else
acc.disabled = true;
}
}
</script>