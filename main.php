<?php  require_once('connection.php'); ?>
<?php session_start(); ?>
<?php
if(!isset($_SESSION['user_id'])){
    header('Location:index.php');
}

$userlist='';
$query="SELECT*FROM flight_details WHERE is_deleted=0 ORDER BY name";
$users=mysqli_query($connection,$query);
if($users){
while($user=mysqli_fetch_assoc($users)){
    $userlist.="<tr>";
    $userlist.="<td>{$user['name']} </td>";
    $userlist.="<td>{$user['from_to']} </td>";
    $userlist.="<td>{$user['date']} </td>";
 
  
    $userlist.="</tr>";
}
}
else{
    echo 'Database Error';
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Main page</title>
    <link rel="stylesheet" href="main.css">
    
 
    
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body class="ab">
<header >
        <div class="appname">Airlines Online Ticketing</div>
        <div class="loggin">Welcome <?php echo $_SESSION['name']; ?><a href="logout.php">log out</a></div>
    </header>
   
    
       
    
   
    
  
<main>
    <center><h1>Flight Details<span><a href="booking.php">+Booking Flight</a></span></h1></center>
    <table class="masterlist">
    <tr>
        <th>Name</th>
        <th>From To Where</th>
        <th>Date</th>
       

    </tr>
    <?php echo $userlist; ?>
</table>
</main>

</body>
</html>