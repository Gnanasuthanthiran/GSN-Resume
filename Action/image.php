<?php


include('DBCon.php');

if(isset($_POST['upload'])){
	
 $uploadfile=$_FILES["upload_file"]["tmp_name"];
  $folder="../Photos/";
  
  $new=$user_id;
 //$new=2147483647;
  
  $new_name=$new.".jpg";
  
  move_uploaded_file($_FILES["upload_file"]["tmp_name"], $folder.$new_name);
  
  
  

  

$query = "INSERT INTO `image`(`id`, `name`, `img`) values ('$new','$new_name','{$uploadfile}')";
	$result = $conn->query($query);
	
	
	if($result)  
	{
				
$query1 = "update login set status=3 where user_id='$new'";
$result1 = $conn->query($query1);
	
	if($result1==true)
		header("location:profile.php");

mysqli_close($conn); 
		
	}
	else{
		echo "<h1> 404 ERROR</h1>";
	}
	
   exit();
  
  

}







?>


<form method="post" action=""   id="myForm" name="frmupload" enctype="multipart/form-data">

<h1 class="title">IMAGE UPLOAD</h1>


<h3>CHOOSE YOUR PHOTO </H3>

<div class="button-container" >
        <input type="file" name="upload_file" id="upload_file"/>
	
      </div>
	  
	  <br>


<div class="button-container" >
        <button name="upload"><span>UPLOAD</span></button>
	
      </div>
	
	</form>


	<div class="ft">
<center>

 Your Profile Compleate  : 25% 

</center>
</div>