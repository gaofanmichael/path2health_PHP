<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<?php
session_start();
$patient_id=$_POST["id"];          
$patient_pwd=$_POST["pwd"];           

class chkinput{             
   var $patient_id; 
   var $patient_pwd;

   function chkinput($x,$y){
     $this->patient_id=$x;
     $this->patient_pwd=$y;
    }

   function checkinput(){
     include("conn/conn.php");   	      
     $sql=mysql_query("select * from patient where patient_id='".$this->patient_id."' and patient_pwd='".$this->patient_pwd."'",$conn);
     $info=mysql_fetch_array($sql);      
     if($info==false){                   
          echo "<script language='javascript'>alert('No such patient exists');history.back();</script>";
          exit;
       }
      else{                              
          echo "<script>alert('Login Sucessful!');window.location='patient_index.php';</script>";
		 $_SESSION[patient_id]=$info[patient_id];
		 $_SESSION[patient_name]=$info[patient_name];
		 $_SESSION[patient_pwd]=$info[patient_pwd];
   }
 }
}
    $obj=new chkinput(trim($patient_id),trim($patient_pwd));      
    $obj->checkinput();          				    
?>
