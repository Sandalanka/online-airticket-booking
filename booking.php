<?php require_once('connection.php'); ?>
<?php session_start(); ?>

<?php
$error=array();
if(isset($_POST['submit'])){

    

    

    if(empty($error)){
        $name=mysqli_real_escape_string($connection,$_POST['name']);
        $email=mysqli_real_escape_string($connection,$_POST['email']);
        $contact=mysqli_real_escape_string($connection,$_POST['contact']);
        $city=mysqli_real_escape_string($connection,$_POST['address']);
        $fname=mysqli_real_escape_string($connection,$_POST['flight']);
        $date=mysqli_real_escape_string($connection,$_POST['date']);
        $query="INSERT INTO bookingg(name,gmail,contact,fname,city,date)VALUES('{$name}','{$email}','{$contact}','{$fname}','{$city}','{$date}')";
        
     $results=mysqli_query($connection,$query);
     if($results){
        header('Location:main.php?add_user=true');
    }
    else{
        echo '4444';
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
    <title>Booking</title>
    <link rel="stylesheet" href="main.css">
   
    

</head>
<body>
<header>
        <div class="appname">Airlines Online ticketing</div>
        <div class="loggin">Welcome <?php echo $_SESSION['name']; ?><a href="logout.php">log out</a></div>
    </header>
    <main>
<h1>Booking Ticket <span><a href="main.php">Back to page</a></span></h1>
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

<form action="booking.php"method="POST" class="userform">
<p>
    <label for="">Name</label>
    <input type="text" name="name" require>
</p>
<p>
    <label for="">Email</label>
    <input type="email" name="email" require>
</p>
<p>
    <label for="">contact number</label>
    <input type="text" name="contact" require>
</p>
<p>
    <label for="">From to where</label>
    <input type="text" name="address" id="" require>
</p>
<p>
    <label for="">flight name</label>
    <input type="text" name="flight" require>
</p>
<p>
    <label for="">Date</label>
    <input type="date" name="date" require>
</p>
<p>
    <button type="submit" name="submit">Booking</button>
</p>

</form>
    </main>
    
</body>
</html>