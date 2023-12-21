<?php 

include("../config/config.php");

if($conn->connect_error){
   echo'failed';
}
else{
   echo'pass';
}?>
<h2>Employee Manage</h2>

<form method="post" action="" enctype="multipart/form-data">
<input type="text" name="name">
<input type="email" name="email">
<input type="password" name="password">
<input type="submit">
</form>
