<?php
     $conn=mysql_connect("localhost","root") or die("database connection failure".mysql_error());
     mysql_select_db("path2health",$conn) or die("database inquiry failure".mysql_error());
     mysql_query("set names utf-8");
?>
