<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<?php
session_start();
$doctor_id=$_POST["id"];          
$doctor_pwd=$_POST["pwd"];           

class chkinput{             
   var $doctor_id; 
   var $doctor_pwd;

   function chkinput($x,$y){
     $this->doctor_id=$x;
     $this->doctor_pwd=$y;
    }

   function checkinput(){
     include("conn/conn.php");   	      
     $sql=mysql_query("select * from doctor where doctor_id='".$this->doctor_id."' and doctor_pwd='".$this->doctor_pwd."'",$conn);
     $info=mysql_fetch_array($sql);      
     if($info==false){                   
          echo "<script language='javascript'>alert('No such doctor exists');history.back();</script>";
          exit;
       }
      else{                              
          echo "<script>alert('Login Sucessful!');window.location='doctor_index.php';</script>";
		 $_SESSION[doctor_id]=$info[doctor_id];
		 $_SESSION[doctor_name]=$info[doctor_name];
		 $_SESSION[doctor_pwd]=$info[doctor_pwd];
   }
 }
}
    $obj=new chkinput(trim($doctor_id),trim($doctor_pwd));      
    $obj->checkinput();          				    
?>
