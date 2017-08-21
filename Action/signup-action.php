

<?php

session_start(); 
include("DBCon.php");

if (isset($_POST['signup'])) {


$name=$_POST['t1'];

$email=$_POST['t3'];

$pass=$_POST['t4'];


$query = "select * from login where  e_mail='$email'";
$result = $conn->query($query);

$rows = mysqli_num_rows($result);


if($rows == 0 )
{
	
	 date_default_timezone_set("Asia/Kolkata");

    $id = date('YmdHis');
	
	
	$pass1=md5($pass);
	
	
	
	
	$sql2 = "INSERT INTO login(user_id,name,e_mail,password,status)  VALUES ('$id','$name','$email','$pass1',1)";

	$one=mysqli_query($conn,$sql2);


	if($one == true )
		{
   
		
$query1 = "select * from login where  e_mail='$email'   AND password='$pass1'";
$result1 = $conn->query($query1);




$rows1 = mysqli_num_rows($result1);




if($rows1 != 0)
{
	
	
	$row1 = mysqli_fetch_assoc($result);
	$id=$row1['user_id'];
	
	$_SESSION['login_id']=$id;
	
	
		header("location:Action/profile.php");

mysqli_close($conn); 
}

		}
 

else
{
    echo "ERROR: Could not able to execute $sql2. " . mysqli_error($conn);
}



mysqli_close($conn); // Closing Connection
}




else{
	header("location:index.php?action=login & head=signup");
		
}

}
else{
	header("location:index.php?action=signup");
}


?>