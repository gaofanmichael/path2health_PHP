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
</head>

<body>
<h1>Welcome to Path2Health</h1>
<p>
	<a href="doctor_index.php">
		Welcome  <?php echo $_SESSION["doctor_name"];?>
	</a>
</p>
<p>
<a href="add_patient.php"> Add Patient 
</a>
</p>

<p>
<a href=http://www.heart.org/HEARTORG/Conditions/HighBloodPressure/AboutHighBloodPressure/Hypertensive-Crisis_UCM_301782_Article.jsp>
<h3> Hypertensive Crisis(Emergency care needed) </h3>
</a>
</p>
<?php
	$doctor_id=$_SESSION["doctor_id"];
	$query=mysql_query("select * from patient where doctor_id='$doctor_id' and patient_stage=4 ");
	$result=mysql_fetch_array($query);
	if($result==false) {
?>
No Record
<?php
}else { do{
echo $result["patient_name"];
?>
<br>
<?php
}while($result=mysql_fetch_array($query));
}
?>


<h3> High Blood Pressure (Hypertension) Stage 2 </h3>
<?php
	$doctor_id=$_SESSION["doctor_id"];
	$query=mysql_query("select * from patient where doctor_id='$doctor_id' and patient_stage=3 ");
	$result=mysql_fetch_array($query);
	if($result==false) {
?>
No Record
<?php
}else { do{
echo $result["patient_name"];
?>
<br>
<?php
}while($result=mysql_fetch_array($query));
}
?>



<h3> High Blood Pressure (Hypertension) Stage 1 </h3>
<?php
	$doctor_id=$_SESSION["doctor_id"];
	$query=mysql_query("select * from patient where doctor_id='$doctor_id' and patient_stage=2 ");
	$result=mysql_fetch_array($query);
	if($result==false) {
?>
No Record
<?php
}else { do{
echo $result["patient_name"];
?>
<br>
<?php
}while($result=mysql_fetch_array($query));
}
?>


<h3> Prehypertension</h3>
<?php
	$doctor_id=$_SESSION["doctor_id"];
	$query=mysql_query("select * from patient where doctor_id='$doctor_id' and patient_stage=1 ");
	$result=mysql_fetch_array($query);
	if($result==false) {
?>
No Record
<?php
}else { do{
echo $result["patient_name"];
?>
<br>
<?php
}while($result=mysql_fetch_array($query));
}
?>

<h3> Normal</h3>
<?php
	$doctor_id=$_SESSION["doctor_id"];
	$query=mysql_query("select * from patient where doctor_id='$doctor_id' and patient_stage=0 ");
	$result=mysql_fetch_array($query);
	if($result==false) {
?>
No Record
<?php
}else { do{
echo $result["patient_name"];
?>
<br>
<?php
}while($result=mysql_fetch_array($query));
}
?>


</body>
</html>