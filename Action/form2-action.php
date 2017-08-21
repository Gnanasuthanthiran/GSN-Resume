<?php

include("DBCon.php");
include("session.php");

/*
$_10t1="NO RECORD";
$_10t2="NO RECORD";
$_10t3="NO RECORD";
$_10t4="NO RECORD";

$_12t1="NO RECORD";
$_12t2="NO RECORD";
$_12t3="NO RECORD";
$_12t4="NO RECORD";



$dip1="NO RECORD";
$dip2="NO RECORD";
$dip3="NO RECORD";
$dip4="NO RECORD";


$iti1="NO RECORD";
$iti2="NO RECORD";
$iti3="NO RECORD";
$iti4="NO RECORD";


$ug1="NO RECORD";
$ug2="NO RECORD";
$ug3="NO RECORD";
$ug4="NO RECORD";


$pg1="NO RECORD";
$pg2="NO RECORD";
$pg3="NO RECORD";
$pg4="NO RECORD";





*/

if (isset($_POST['save2'])) {






$id=$user_id;



if(isset($_POST['sslc'])){

$_10t1=$_POST['t101'];
$_10t2=$_POST['t102'];
$_10t3=$_POST['t103'];
$_10t4=$_POST['t104'];
$_10t5=$_POST['t10univ'];
	
}

if(isset($_POST['hsc'])){
	
$_12t1=$_POST['t121'];
$_12t2=$_POST['t122'];
$_12t3=$_POST['t123'];
$_12t4=$_POST['t124'];
$_12t5=$_POST['t12univ'];
	
}

if(isset($_POST['dip'])){

$dip=$_POST['dip'];
$dip1=$_POST['dip1'];
$dip2=$_POST['dip2'];
$dip3=$_POST['dip3'];
$dip4=$_POST['dip4'];
$dipuniv=$_POST['dipuniv'];
	
}

if(isset($_POST['iti'])){
	$iti=$_POST['iti'];
$iti1=$_POST['iti1'];
$iti2=$_POST['iti2'];
$iti3=$_POST['iti3'];
$iti4=$_POST['iti4'];
$itiuniv=$_POST['itiuniv'];


}





if(isset($_POST['ug'])){
	
	$ug=$_POST['ug'];
$ug1=$_POST['ug1'];
$ug2=$_POST['ug2'];
$ug3=$_POST['ug3'];
$ug4=$_POST['ug4'];
$uguniv=$_POST['uguniv'];

}

if(isset($_POST['pg'])){
	
	$pg=$_POST['pg'];
$pg1=$_POST['pg1'];
$pg2=$_POST['pg2'];
$pg3=$_POST['pg3'];
$pg4=$_POST['pg4'];
$pguniv=$_POST['pguniv'];

}



$query = "INSERT INTO `education`(`id`, `sslc1`, `sslc2`, `sslc3`, `sslc4`, `sslc`, `hsc1`, `hsc2`, `hsc3`, `hsc4`, `hsc`,

 `dip1`, `dip`, `dip2`, `dip3`, `dip4`, `dipuniv`, `iti1`, `iti`, `iti2`, `iti3`, `iti4`, `itiuniv`, 
 `ug`, `ug1`, `ug2`, `ug3`, `ug4`, `uguniv`, `pg`, `pg1`, `pg2`, `pg3`, `pg4`, `pguniv`)

values ('$id','$_10t1','$_10t2','$_10t3','$_10t4','$_10t5','$_12t1','$_12t2','$_12t3','$_12t4','$_12t5'

,'$dip1','$dip','$dip2','$dip3','$dip4','$dipuniv','$iti1','$iti','$iti2','$iti3','$iti4','$itiuniv',

'$ug','$ug1','$ug2','$ug3','$ug4','$uguniv','$pg','$pg1','$pg2','$pg3','$pg4','$pguniv')";

$result = $conn->query($query);
	
	
	if($result==true)
{
		
$query1 = "update login set status=4 where user_id='$id'";
$result1 = $conn->query($query1);
	
	if($result1==true)
		header("location:profile.php");

mysqli_close($conn); 
}




else{
	//header("location:profile.php");
	echo "error";
		
}

}
else{
	header("location:profile.php");
}


?>














