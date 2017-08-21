<?php

include("DBCon.php");
include("session.php");


if (isset($_POST['save3'])) {






$id=$user_id;

$os=$_POST['os'];

$basic=$_POST['basic'];

$rdbms=$_POST['rdbms'];

$program=$_POST['program'];

$others=$_POST['others'];





$query =" INSERT INTO `tech`(`id`, `os`, `basic`, `rdbms`, `program`, `others`) 
values('$id','$os','$basic','$rdbms','$program','$others')";
$result = $conn->query($query);
	
	
	if($result==true)
{
		
$query1 = "update login set status=5 where user_id='$id'";
$result1 = $conn->query($query1);
	
	if($result1==true)
		header("location:profile.php");

mysqli_close($conn); 
}




else{
	header("location:profile.php");
		
}

}
else{
	header("location:profile.php");
}


?>

