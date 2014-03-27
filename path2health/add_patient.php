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
		if (form.patient_id.value==""){
			alert("Please input patient id!");form.patient_id.focus();return false;
		}
		if (form.patient_name.value==""){
			alert("Please input patient name!");form.patient_name.focus();return false;
		}
		if (form.patient_pwd.value==""){
			alert("Please input patient password!");form.patient_pwd.focus();return false;
		}
		if (form.patient_gender.value==""){
			alert("Please select patient gender!");form.patient_gender.focus();return false;
		}
		if (form.patient_dob.value==""){
			alert("Please input patient birthday!");form.patient_dob.focus();return false;
		}
	}
	</script>
</head>

<body>
<h1>Welcome to Path2Health</h1>
<p>
	<a href="doctor_index.php">
		Welcome  <?php echo $_SESSION["doctor_name"];?>
	</a>
</p>

<form name="form1" method="post" action="patient_add_validate.php">
	<div >
		<div>
			<label for="patient_id">Patient ID</label>
			 :
			<input name="patient_id" type="text" size="20"/>
        </div>
		<div>
			<label for="patient_name">Name</label>
			 :
			<input name="patient_name" type="text" size="20"/>
        </div>
		<div>
			<label for="patient_pwd">Password</label>
			 :
			<input name="patient_pwd" type="password" size="20"/>
        </div>
		<div>
			<label for="patient_gender">Gender</label>
			 :
			<select name="patient_gender" id="patient_gender">
					<option value="<?php echo "M";?>">Male</option>
					<option value="<?php echo "F";?>">Female</option>
            </select>
        </div>
		<div>
			<label for="patient_dob">Birth Day</label>
			 :
			<input name="patient_dob" type="date" />
        </div>
		<div id="submit">
			<input type="submit" value='submit' onClick="return check(form1);">
			<a href="doctor_index.php">Return  </a>
			<!--<input type="image" src="images/btn_login.gif" name="l" value="h" type="submit" id="l" onClick="return check(form1)"/>-->
		</div>
    </div>        
</form>

</body>
</html>