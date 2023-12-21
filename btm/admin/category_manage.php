<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/style.css"/>
</head>
<body>
    <h2>Login</h2>
</body>
</html>-->
<?php 
include("../config/config.php");

/*
if($conn->connect_error){
   echo'failed';
}
else{
   echo'pass';
}
?>

<h2>Category  Manage</h2>
<form action="POST" action="category.php" enctype="multipart/form-data">
    <input type="text" name="name">
    <input type="email" name="email">
    <input type="password" name="password">
    <input type="submit">

*/
$description='';
$title="";
if(isset($_GET['id']) && $_GET['id']>0){
    //edit
    $result =$conn->query("select * from role where id=".$_GET['id']);
    if($result->num_rows > 0){
        $row = $result->fetch_assoc();
        print_r($row);
        $title=$row['name'];
        $description=$row['description'];
    }
}

?>

<h2>Category Manage<h2>
<a href="category_manage.php">Add New Category</a>
<form method="Post" action="callback/role.php" enctype="multipart/form-data"><!--multimedia content dollar underscore files me milta h-->
<input type="text" name="title" value="<?php echo $title; ?>" required>
<textarea name="description" ><?php echo $description; ?></textarea>
<input type="submit">
</form>
