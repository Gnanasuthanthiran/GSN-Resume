
<?php

include("DBCon.php");





session_start();

$user_id=$_SESSION['login_id'];


$sql="select name,e_mail from login where user_id='$user_id'";

$ses_sql = $conn->query($sql);
$row = mysqli_fetch_assoc($ses_sql);
$user_name =$row['name'];
$user_email =$row['e_mail'];



if(!isset($user_id)){
mysqli_close($conn); 
header('Location: ../index.php'); 
}
?>