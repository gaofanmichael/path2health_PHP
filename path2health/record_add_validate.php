<?php 
session_start();
include("Conn/conn.php");
$systolic=$_POST["systolic"];
$diastolic=$_POST["diastolic"];
$record_date=$_POST["record_date"];
$patient_id=$_SESSION["patient_id"];
$patient_stage=0;
$sql=mysql_query("insert into data(patient_id,systolic,diastolic, record_date )values('$patient_id','$systolic','$diastolic','$record_date')");
if($sql){
	echo "<script language='javascript'>alert('Record Added');history.back();</script>";
}
else{
   echo"<script language='javascript'>alert('Fail to Added');history.back();</script>";
}
if($systolic<120 and $diastolic<80) $patient_stage=0;
else if (($systolic>=120 and $systolic<=139 ) or ($systolic>=80 and $systolic<=89 ) ) $patient_stage=1;
else if (($systolic>=140 and $systolic<=159 ) or ($systolic>=90 and $systolic<=99 ) ) $patient_stage=2;
else if ($systolic>=160  or $systolic>=100) $patient_stage=3;
else if ($systolic>180  or $systolic>100) $patient_stage=4;
$sql1=mysql_query("update patient set patient_stage='$patient_stage' where patient_id='$patient_id'");
?>

