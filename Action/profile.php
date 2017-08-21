<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Profile</title>
	<link rel="shotcut icon" href="../images/gsn.png"/>

        <link rel="stylesheet" href="../css/style.css">

  </head>

  <body>
  <?php
include('session.php');

include("DBCon.php");
?>
    
<div class="head">
<div class="pen-title"><b>
<a href="logout.php" class="logout">
  LOGOUT
  </a></b>
  <h2>WELCOME : <?php echo $user_name ;?></h2>
  
  
  </div>
  </div>
<CENTER>

<div STYLE="WIDTH:50%">
  <div class="card"></div>
  <div class="card">
  <center>
    
	
	
	
	 
<?php

$suthan="action";

if(isset($_GET["action"])){


		$suthan=$_REQUEST["action"];
		
if ($suthan == 'form1')
{ 
include("form1.php");

}
}
else{
	
	
	
$sql="select status from login where user_id='$user_id'";

$ses_sql1 = $conn->query($sql);
$row = mysqli_fetch_assoc($ses_sql1);
$user_status =$row['status'];

switch($user_status){
	
	case 1: include("profile1.php"); 	break;
	case 2: include("image.php"); 	break;
	case 3: include("form2.php"); 	break;
	
	case 4: include("form3.php"); 	break;
	case 5:header("location:profile_view.php"); 	break;
	default:
	?>
	<h1 class="title">  404 ERROR </H1>
	<img  src="../images/gsn.png"/><br>
<H1 STYLE="COLOR:#ed2553;font-family: Agency FB;LINE-HEIGHT:0PX;FONT-SIZE:50PX;">
	WEB DESIGNER</H1>
	<?php
	
	break;
	
	
}

	
	
}

?>
  
	
	
	
	
	
	
	
  </center>
  </div>




</div>


</CENTER>
<!-- 	
<div class="ft">
<center>

 Your Profile Compleate  : 20% 

</center>
</div>

    -->
	
	<a id="codepen" href="logout.php" title="logout"><i class="fa fa-codepen"><b>LOG OUT</b></i></a>
	
    
  </body>
</html>
