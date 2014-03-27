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
	<a href="patient_index.php">
		Welcome  <?php echo $_SESSION["patient_name"];?>
	</a>
</p>


<p>
<h3>Data </h3>
</p>
<p>
	<?php 
		$query=mysql_query("select * from patient natural join data order by record_date DESC");
		$result=mysql_fetch_array($query);
		if($result==false){
	?>
	<table>
        <tr>
        <td align="center">No Data</td>
		</tr>
    </table>
	<?php
		}
		else{
	?>	
		<table border="3" bordercolor="#D2E3E6">
			<tr  align="center" >
					<td >name</td>
					<td >systolic</td>  
					<td >diastolic</td> 
					<td >record_date</td>  				
			</tr>
		<?php
		do{
		?>
			<tr align="center" >
					<td ><?php echo $result["patient_name"];?></td>  
					<td ><?php echo $result["systolic"];?></td>  
					<td ><?php echo $result["diastolic"];?></td> 
					<td ><?php echo $result["record_date"];?></td>  				
			</tr>
		<?php
		}while($result=mysql_fetch_array($query));
		}
		?>
	</table>
</p>
<p>
<a href="record_data.php"> Record Data 
</a>
</p>

</body>
</html>