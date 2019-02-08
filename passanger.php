<?php require_once('connection.php'); ?>
<?php session_start();?>
<?php
if(!isset($_SESSION['user_id'])){
    header('Location:index.php');
}

$userlist='';
$query="SELECT*FROM passager WHERE is_deleted=0 ORDER BY name";
$users=mysqli_query($connection,$query);
if($users){
while($user=mysqli_fetch_assoc($users)){
    $userlist.="<tr>";
    $userlist.="<td>{$user['name']} </td>";
    $userlist.="<td>{$user['ID_card']} </td>";
    $userlist.="<td>{$user['gmail']} </td>";
    $userlist.="<td>{$user['contact']} </td>";
    $userlist.="<td>{$user['date']} </td>";
    $userlist.="<td><a href=\"passangerdelete.php?user_id={$user['id']}\">Delete</a></td>";
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
    <title>Passanger Details</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
<header >
        <div class="appname">Airlines Online Ticketing</div>
        <div class="loggin">Welcome <?php echo $_SESSION['name']; ?><a href="logout.php">log out</a></div>
    </header>
    <main>
    <center><h1>Passanger Details<span><a href="backend.php">Back to page</a></span></h1></center>
    <table class="masterlist">
    <tr>
        <th>Name</th>
        <th>ID Number</th>
        <th>Email</th>
       <th>Contact Number</th>
       <th>Last login Date and Time</th>
        <th>Delete</th>

    </tr>
    <?php echo $userlist; ?>
</table>
</main>
    
</body>
</html>