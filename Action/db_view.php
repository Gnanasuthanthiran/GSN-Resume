<?php
include('session.php');



$user=(int)$user_id;
	
$sql = "SELECT * from basic_info where id='$user'";
$result = $conn->query($sql);

if($result->num_rows >0) {
     
     while($row1 = $result->fetch_assoc()) {


$fname=$row1['f_name'];
$lname=$row1['l_name'];
$email=$row1['e_mail'];
$semail=$row1['s_mail'];
$phno=$row1['ph_no'];
$dob=$row1['dob'];
$gender=$row1['gender'];
$address=$row1['address'];
$city=$row1['city'];
$country=$row1['country'];
$nat=$row1['NATIONALITY'];
$lang=$row1['lang'];
$mar=$row1['marrage'];
$about=$row1['about'];



}
}







	
$sql = "SELECT * from tech where id='$user'";
$result = $conn->query($sql);

if($result->num_rows >0) {
     
     while($row1 = $result->fetch_assoc()) {


$basic=$row1['basic'];
$os=$row1['os'];
$rdbms=$row1['rdbms'];
$pgm=$row1['program'];
$others=$row1['others'];

}
}




	
$sql = "SELECT * from education where id='$user'";
$result = $conn->query($sql);

if($result->num_rows >0) {
     
     while($row1 = $result->fetch_assoc()) {

$sslcuniv=$row1['sslc'];
$sslc1=$row1['sslc1'];
$sslc2=$row1['sslc2'];
$sslc3=$row1['sslc3'];
$sslc4=$row1['sslc4'];


$hscuniv=$row1['sslc'];
$hsc1=$row1['hsc1'];
$hsc2=$row1['hsc2'];
$hsc3=$row1['hsc3'];
$hsc4=$row1['hsc4'];


$dip=$row1['dip'];
$dipuniv=$row1['dipuniv'];
$dip1=$row1['dip1'];
$dip2=$row1['dip2'];
$dip3=$row1['dip3'];
$dip4=$row1['dip4'];

$iti=$row1['iti'];
$itiuniv=$row1['itiuniv'];
$iti1=$row1['iti1'];
$iti2=$row1['iti2'];
$iti3=$row1['iti3'];
$iti4=$row1['iti4'];



$ug=$row1['ug'];
$uguniv=$row1['uguniv'];
$ug1=$row1['ug1'];
$ug2=$row1['ug2'];
$ug3=$row1['ug3'];
$ug4=$row1['ug4'];


$pg=$row1['pg'];
$pguniv=$row1['pguniv'];
$pg1=$row1['pg1'];
$pg2=$row1['pg2'];
$pg3=$row1['pg3'];
$pg4=$row1['pg4'];






}
}


	
$sql = "SELECT * from image where id='$user'";
$result = $conn->query($sql);

if($result->num_rows >0) {
     
     while($row1 = $result->fetch_assoc()) {


$img=$row1['name'];


	 }
}

?>
