<?php

include("DBCon.php");
include("session.php");

if (isset($_POST['save1'])) {



$f_name=$user_name;
$l_name=$_POST['lname'];
$email=$user_email;
$email1=$_POST['smail'];
$dob=$_POST['dob'];
$sex=$_POST['sex'];
$address=$_POST['address'];
$city=$_POST['city'];
$country=$_POST['country'];
$nat=$_POST['nat'];
$lang=$_POST['lang'];
$ms=$_POST['ms'];
$about=$_POST['about'];
$phno=$_POST['phno'];






$id=$user_id;






$query = "INSERT INTO `basic_info`(`id`, `f_name`, `l_name`, `e_mail`, `s_mail`,`ph_no`, `dob`, `gender`, `address`, `city`, `country`, `NATIONALITY`, `lang`, `marrage`, `about`)

values ('$id','$f_name','$l_name','$email','$email1','$phno','$dob','$sex','$address','$city','$country','$nat','$lang','$ms','$about')";


$result = $conn->query($query);
	
	
	if($result==true)
{
		
$query1 = "update login set status=2 where user_id='$id'";
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














