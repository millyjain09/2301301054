
<?php

ini_set("display_errors",1);
session_start();
$hostname="localhost";// 127:0:0:1
$username="root";
$password="";
$database="btm";
$conn = new mysqli($hostname,$username,$password,$database);
if($conn->connect_error){
   // echo'failed';
}
else{
   // echo'pass';
}

?>
