<?php require_once('connection.php'); ?>
<?php session_start(); ?>

<?php
$error=array();
if(isset($_POST['submit'])){

    

    

    if(empty($error)){
        $name=mysqli_real_escape_string($connection,$_POST['name']);
        $email=mysqli_real_escape_string($connection,$_POST['address']);
        $password=mysqli_real_escape_string($connection,$_POST['password']);
        $query="INSERT INTO flight_details(name,from_to,date)VALUES('{$name}','{$email}','{$password}')";
     $result=mysqli_query($connection,$query);

    }
    if($result){
        header('Location:backend.php?add_user=true');
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
    <title>Flight added</title>
    <link rel="stylesheet" href="main.css">
   
    

</head>
<body>
<header>
        <div class="appname">Airlines Online ticketing</div>
        <div class="loggin">Welcome <?php echo $_SESSION['name']; ?><a href="logout.php">log out</a></div>
    </header>
    <main>
<h1>Add New Flight <span><a href="backend.php">Back to page</a></span></h1>
<?php
if(!empty($error)){
    echo '<div class="errmsg">';
    echo '<b>There was error</b>';
    foreach($error as $error){
        echo $error.'<br>';
    }
    echo "</div>";

}
?>

<form action="addflight.php"method="POST" class="userform">
<p>
    <label for="">Name</label>
    <input type="text"name="name" require>
</p>
<p>
    <label for="">From to where</label>
    <input type="text" name="address" id="" require>
</p>
<p>
    <label for="">Date</label>
    <input type="date" name="password" require>
</p>
<p>
    <button type="submit" name="submit">Add</button>
</p>

</form>
    </main>
    
</body>
</html>