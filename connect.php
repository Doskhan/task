<?php 
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "test";
$con=new mysqli($db_host,$db_user,$db_password,$db_name);
    if(!$con){
      die($con->error);
    }
 ?>