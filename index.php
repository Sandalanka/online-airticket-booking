<?php require_once('connection.php'); ?>
<?php session_start(); ?>
<?php
$error=array();
if(isset($_POST['submit'])){

    

    

    if(empty($error)){
        $name=mysqli_real_escape_string($connection,$_POST['name']);
        $ID_number=mysqli_real_escape_string($connection,$_POST['id']);
        $email=mysqli_real_escape_string($connection,$_POST['email']);
        $contact=mysqli_real_escape_string($connection,$_POST['contact']);
        $password=mysqli_real_escape_string($connection,$_POST['password']);
        $query="INSERT INTO passager(name,ID_card,gmail,contact,password)VALUES('{$name}','{ $ID_number}','{ $email}','{$contact}','{$password}')";
     $result=mysqli_query($connection,$query);

    }
    if($result){
        header('Location:login.php?add_user=true');
    }
    else{
        echo 'Error';
    }

}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>registation</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
<header>
        <div class="appname">Welcome</div>
        <div class="loggin"><a href="admin.php">admin   </a><a href="login.php">  login</a></div>
    </header>
    <main>
        <h1 >Online Air Ticket Booking</h1>
             <h2><center> Registation</center></h2>

             <form action="index.php"method="POST" class="userform">
             <p>
    <label for="">Full Name</label>
    <input type="text"name="name" require>
</p>
<p>
    <label for="">ID Card Number</label>
    <input type="text" name="id" id="" require>
</p>
<p>
    <label for="">Email</label>
    <input type="email" name="email" id="" require>
</p>
<p>
    <label for="">Contact Number</label>
    <input type="number" name="contact" id="" require>
</p>
<p>
    <label for="">password</label>
    <input type="password" name="password" require>
</p>
<p>
    <button type="submit" name="submit">Register</button>
</p>

</form>
    </main>

</body>
</html>