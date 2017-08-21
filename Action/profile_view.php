<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Profile</title>
	<link rel="shotcut icon" href="../images/gsn.png"/>

        <link rel="stylesheet" href="../css/style.css">
		
        <link rel="stylesheet" href="../css/profile.css">

  </head>

  <body>
  <?php


include("db_view.php");
?>
  
<div class="hd">
<div class="pen-title"><b> <h2 style='padding-left:30px;margin-top:-10px;'> <?php echo $user_name ;?> -  PROFILE</h2>
  
  </b><b>
<a href="logout.php" class="logout" style='padding-right:30px;margin-top:-85px;'>
  LOGOUT
  </a></b>
 
  </div>
  </div>

<br>
<br><br><br>


<?php   $folder="../Photos/"; ?>

<div class="card1">

  <img src="<?php echo $folder.$img; ?>" alt="img" style="width:100%; height:17em;">
  <div class="container1">
    <h1 style="font-size:20px;color:#ed2553;"><?php echo $email; ?></h1>
    <p class="title1"><?php echo $phno;?></p>
   
	
    <div style="margin: 24px 0;">
	
  
   </div>
   <p><button class="btn"><?php echo  $fname;?></button></p>
  </div>
</div>









<div class="card2">

  <p><button class="btn">
  baic information</button></p>
  <div class="container1">
  
 <table width="100%" style="padding:0px;margin:0px;">
 
<tr>
<th width="25%">first name :
</th>
<td width="75%">
<p>
<?php echo $fname;?>
</p>
</td>
<tr>
<th width="25%">last name :
</th>
<td width="75%">
<p>
<?php echo $lname;?>
</p>
</td>
<tr>
<th width="25%">E-mail
</th>
<td width="75%">
<p>

<?php echo $email;?>
</p>
</td>
<tr>
<th width="25%">E-mail<br><span style="text-transform:lower;;">(another)
</th>
<td width="75%">
<p>

<?php echo $semail;?>
</p>
</td>
<tr>
<th width="25%">phone no
</th>
<td width="75%">
<p>

<?php echo $phno;?>
</p>
</td>
<tr>


<tr>
<th width="25%">date of birth
</th>
<td width="75%">
<p>

<?php echo $dob;?>
</p>
</td>
<tr>


<tr>
<th width="25%">Address
</th>
<td width="75%">
<p>

<?php echo "<p style='line-height:30px;'>".$address .",<br> ".$city.",<br>". $country .",<br>".$nat .".</p>";?>
</p>
</td>
<tr>


<tr>
<th width="25%">languages knows
</th>
<td width="75%">
<p>

<?php echo $lang;?>
</p>
</td>
<tr>
 
 
 <tr>
<th width="25%">marrage status
</th>
<td width="75%">
<p>

<?php echo $mar;?>
</p>
</td>
<tr>

 <tr>
<th width="25%">about
</th>
<td width="75%">
<p>

<?php echo $about;?>
</p>
</td>
<tr>




 
 </table>
   
  
  </div>
</div>













<div class="card2">

  <p><button class="btn">
  EDUCATION DETAILS</button></p>
  <div class="container1">
  
 <table width="100%">
 <?php

if((strcmp($pg1,"") &&(strcmp($pg2,"")))==0){
	
}
else{
	?>
		
		<tr><th width="25%"> <?php echo $pg4;?> <th>
		<td width="75%"><?php  echo "<b>". $pg ."</b>  degree in ".$pguniv." , ".$pg1." , ".$pg2." , Secured an Aggregate of ".$pg3." % ."; ?>
		</td>
		</tr>
		
	<?php
}
?>



<?php

if((strcmp($ug1,"") &&(strcmp($ug2,"")))==0){
	
}
else{
	?>
		
		<tr><th width="25%"> <?php echo $ug4;?> <th>
		<td width="75%"><?php  echo "<b>" .$ug ."</b>  degree in ".$uguniv." , ".$ug1." , ".$ug2." , Secured an Aggregate of ".$ug3." % ."; ?>
		</td>
		</tr>
		
	<?php
}
?>







<?php

if((strcmp($dip1,"") &&(strcmp($dip2,"")))==0){
	
}
else{
	?>
		
		<tr><th width="25%"> <?php echo $dip4;?> <th>
		<td width="75%"><?php  echo $dip ."  degree in ".$dipuniv." , ".$dip1." , ".$dip2." , Secured an Aggregate of ".$dip3." % ."; ?>
		</td>
		</tr>
		
	<?php
}
?>






<?php

if((strcmp($hsc1,"") &&(strcmp($hsc2,"")))==0){
	
}
else{
	?>
		
		<tr><th width="25%"> <?php echo $hsc4;?> <th>
		<td width="75%"><?php  echo "HSC  from   ".$hsc1.", ".$hsc2." (".$hscuniv.")  , Secured an Aggregate of ".$hsc3." % ."; ?>
		</td>
		</tr>
		
	<?php
}
?>






<?php

if((strcmp($iti1,"") &&(strcmp($iti2,"")))==0){
	
}
else{
	?>
		
		<tr><th width="25%"> <?php echo $iti4;?> <th>
		<td width="75%"><?php  echo $iti ."  degree in ".$itiuniv." , ".$iti1." , ".$iti2." , Secured an Aggregate of ".$iti3." % ."; ?>
		</td>
		</tr>
		
	<?php
}
?>




<?php

if((strcmp($sslc1,"") &&(strcmp($sslc2,"")))==0){
	
}
else{
	?>
		
		<tr><th width="25%"> <?php echo $sslc4;?> <th>
		<td width="75%"><?php  echo "SSLC  from , ".$sslc1." , ".$sslc2."  (".$hscuniv.") , Secured an Aggregate of ".$sslc3." % ."; ?>
		</td>
		</tr>
		
	<?php
}
?>

 
 
 </table>
   
  
  </div>
</div>






<div class="card2">

  <p><button class="btn">
  techinacal qualification</button></p>
  <div class="container1">
  <center>
 <table width="75%">
<tr>
<th width="25%">operating system
</th>
<td width="75%">
<p>

<?php echo $os;?>
</p>
</td>
<tr>

 <tr>
<th width="25%">basic
</th>
<td width="75%">
<p>

<?php echo $basic;?>
</p>
</td>
<tr>


<tr>
<th width="25%">rdms
</th>
<td width="75%">
<p>

<?php echo $rdbms;?>
</p>
</td>
<tr>

 <tr>
<th width="25%">programing languages
</th>
<td width="75%">
<p>

<?php echo $pgm;?>
</p>
</td>
<tr>
 <tr>
<th width="25%">others skills
</th>
<td width="75%">
<p>

<?php echo $others;?>
</p>
</td>
<tr>
 
 </table>
   </center>
  
  </div>
</div>

















<br><br><br>

   
<div class="foot">
<div class="pen-title"><p><b>
M.GNANASUDANTHIRAN </b> - MCA (2015-2018) SA ENGINEERING COLLEGE CHENNAI-77

</p>
  
  
  </div>
  </div>


</body>
</html>
