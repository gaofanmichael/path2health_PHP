<?php
session_start();
include("conn/conn.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Path2Health</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<!--<link rel="stylesheet" href="style.css" type="text/css" charset="utf-8" />-->
	<script language="javascript">
	function check(form){
		if (form.systolic.value==""){
			alert("Please input systolic value!");form.systolic.focus();return false;
		}
		if (form.diastolic.value==""){
			alert("Please input diastolic value!");form.diastolic.focus();return false;
		}
		if (form.record_date.value==""){
			alert("Please select record_date!");form.record_date.focus();return false;
		}
	}
	</script>
</head>

<body>
<h1>Welcome to Path2Health</h1>
<p>
	<a href="patient_index.php">
		Welcome  <?php echo $_SESSION["patient_name"];?>
	</a>
</p>

<form name="form1" method="post" action="record_add_validate.php">
	<div >
		<div>
			<label for="systolic">systolic</label>
			 :
			<input name="systolic" type="integer" size="3"/>
        </div>
		<div>
			<label for="diastolic">diastolic</label>
			 :
			<input name="diastolic" type="integer" size="3"/>
        </div>
		<div>
			<label for="record_date">Record Date</label>
			 :
			<input name="record_date" type="date" />
        </div>
		<div id="submit">
			<input type="submit" value='submit' onClick="return check(form1);">
			<!--<input type="image" src="images/btn_login.gif" name="l" value="h" type="submit" id="l" onClick="return check(form1)"/>-->
		</div>
    </div>        
</form>

</body>
</html>