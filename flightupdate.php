
<?php session_start(); ?>
<?php require_once('connection.php');?>
 
<?php
if(!isset($_SESSION['name'])){
    header('Location:backend.php');
}
 if(isset($_POST['submit'])){
        $name=mysqli_real_escape_string($connection,$_POST['name']);
        $date=mysqli_real_escape_string($connection,$_POST['date']);
        $address=mysqli_real_escape_string($connection,$_POST['address']);
        $query="UPDATE flight_details SET city='{$address}', date='{$date}' WHERE name='{$name}'";
    $result=mysqli_query($connection,$query);
    if($result){
        header('Location:backend.php');
    }
    else{
        header('Location:backend.php');
    }
    }



?>















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Flight Upadte</title>
    <link rel="stylesheet" href="main.css">
   
    

</head>
<body>
<header>
        <div class="appname">Airlines Online ticketing</div>
        <div class="loggin">Welcome <?php echo $_SESSION['name']; ?><a href="logout.php">log out</a></div>
    </header>
    <main>
<h1>Flight Details Update<span><a href="backend.php">Back to page</a></span></h1>
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

<form action="flightupdate.php"method="POST" class="userform">
<p>
    <label for="">Flight Name</label>
    <input type="text" name="names" id="" require>
</p>

<p>
    <label for="">From to where</label>
    <input type="text" name="address" id="" require>
</p>

<p>
    <label for="">Date</label>
    <input type="date" name="date" require>
</p>
<p>
    <button type="submit" name="submit">update</button>
</p>

</form>
    </main>
    
</body>
</html>