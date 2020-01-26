<script language="javascript">
function fncSubmit()
{
	if(document.form1.rdo1.checked == false && document.form1.rdo2.checked == false )
	{
		alert('Please Click Radio Option ');
		return false;
	}
    <input name="game" value="222"/>
	document.form1.submit();
}
</script>
<form action="page.cgi" method="post" name="form1" onSubmit="JavaScript:return fncSubmit();">
Radio 1 
  <input name="rdoCheckbox" type="radio" id="rdo1" value="Y">
  <br>
Radio 2 
<input name="rdoCheckbox" type="radio" id="rdo2" value="Y">
<br>
<input name="btnSubmit" type="submit" value="Submit" >

<input name="game" type="hidden" value="222"/>
</form>