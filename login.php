<?php require_once('connection.php');?>
<?php session_start(); ?>
<?php
if(isset($_POST['submit'])){
$error=array();

if(!isset($_POST['name'])||strlen(trim($_POST['name']))<1){
$error[]='user name missing';
}
if(!isset($_POST['password'])||strlen(trim($_POST['password']))<1){
    $error[]='password missing';
    }
if(empty($error)){
$email=mysqli_real_escape_string($connection,$_POST['name']);
$password=mysqli_real_escape_string($connection,$_POST['password']);

$query="SELECT*FROM passager WHERE name='{$email}' AND password='{$password}'LIMIT 1";

$result_set=mysqli_query($connection,$query);
if($result_set){
//query succesful
if(mysqli_num_rows($result_set)==1){
$user=mysqli_fetch_assoc($result_set);
$_SESSION['user_id']=$user['id'];
$_SESSION['name']=$user['name'];

$query="UPDATE passager SET date=NOW()";
$query.="WHERE id={$_SESSION['user_id']} LIMIT 1";
$result_set=mysqli_query($connection,$query);
    header('Location:main.php');

}
else{
    $error[]='Invalied user name/password';
}
}
else{
    $error[]='Database query failed';
}

}
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Login</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
<div class="login">

<form action="login.php" method="post">
<fieldset>
<legend><H1> User login In</H1></legend>
 <?php
if(isset($error)&& !empty($error)){
echo' <p class="error">Invailed User name/Password</p>';
}
?>
<p>
<label for="">User name</label>
<input type="text"name="name" >

</p>

<p>
<label for="">password</label>
<input type="password" name="password">
</p>

<p>
<button type="submit" name="submit">Login In</button></p>
</fieldset>
</form>
</div>
    
</body>
</html>