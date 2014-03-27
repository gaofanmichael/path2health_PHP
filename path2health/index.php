<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Path2Health</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--<link rel="stylesheet" href="style.css" type="text/css" charset="utf-8" />-->
<script language="javascript">
function check(form){
	if (form.id.value==""){
		alert("Please input the name");form.id.focus();return false;
	}
	if (form.pwd.value==""){
		alert("Please input the password");form.pwd.focus();return false;
	}	
}
</script>
</head>

<body>
<h1>Welcome to Path2Health</h1>
<p>
<form name="form1" method="post" action="chk_login_doctor.php">
	<div id="login-username">
		<div>
			<label for="username">Doctor ID</label>
			 :
			<input name="id" type="text" size="20"/>
        </div>
		<div>
			<label for="password">password</label>
			:
			<input name="pwd" type="password"   size="20"/>
		</div>
        </div>
			<div id="login-button">
        `	<input type="image" src="images/btn_login.gif" name="l" value="h" type="submit" id="l" onClick="return check(form1)"/>
		</div>
    </div>        
</form>
</p>    
<p>
<form name="form2" method="post" action="chk_login_patient.php">
	<div id="login-username">
		<div>
			<label for="username">Patient ID</label>
			 :
			<input name="id" type="text" size="20"/>
        </div>
		<div>
			<label for="password">password</label>
			:
			<input name="pwd" type="password"   size="20"/>
		</div>
        </div>
			<div id="login-button">
        `	<input type="image" src="images/btn_login.gif" name="l" value="h" type="submit" id="l" onClick="return check(form2)"/>
        </div>
    </div>        
</form>
</p>     
 

</body>
</html>


</body>
</html>
