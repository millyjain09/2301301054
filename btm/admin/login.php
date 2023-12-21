<!--
<?php
   include('C:\xampp\htdocs\bms-t\header.php'); 
   if(isset($_POST['username']) && ($_POST['username']!='')){
      echo ('<pre>');
   print_r( $_POST);
   print_r( $_POST ['username']);}
   echo '<br>';
   if(isset($_POST['password']) && ($_POST['password']!=''))
   {print_r( $_POST ['password']);
}
?>
--->
<form method="post" action="category.php" enctype="multipart/form-data">
<input type="text" name="username">
<input type="password" name="password">
<input type="file" name="profileimage">
<input type="submit">
</form>
<?php include ('fotter.php');?>