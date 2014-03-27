<?php 
session_start();
include("Conn/conn.php");
$new_patient_id=$_POST["patient_id"];
$new_patient_name=$_POST["patient_name"];
$new_patient_pwd=$_POST["patient_pwd"];
$new_patient_gender=$_POST["patient_gender"];
$new_patient_dob=$_POST["patient_dob"];
$doctor_id=$_SESSION["doctor_id"];

$sql=mysql_query("insert into patient(patient_id,patient_name,patient_pwd,doctor_id,patient_gender,patient_dob )values('$new_patient_id','$new_patient_name','$new_patient_pwd','$doctor_id','$new_patient_gender','$new_patient_dob')");
if($sql){
	echo "<script language='javascript'>alert('Record Added');history.back();</script>";
}
else{
   echo"<script language='javascript'>alert('Fail to Added');history.back();</script>";
}
?>

