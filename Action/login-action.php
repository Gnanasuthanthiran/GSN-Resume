

<?php

session_start(); 
include("DBCon.php");

if (isset($_POST['login'])) {




$email=$_POST['email'];

$pass=$_POST['pass'];

$pass1=md5($pass);

echo $pass1;



$query = "select * from login where  e_mail='$email'   AND password='$pass1'";
$result = $conn->query($query);




$rows = mysqli_num_rows($result);

echo $rows;


if($rows != 0)
{
	
	
	$row = mysqli_fetch_assoc($result);
	$id=$row['user_id'];
	
	$_SESSION['login_id']=$id;
	
	
		header("location:Action/profile.php");

mysqli_close($conn); 
}




else{
	header("location:index.php?action=login & head=login");
		
}

}
else{
	header("location:profile.php?action=form1");
}


?>