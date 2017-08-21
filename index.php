<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>GSN RESUME</title>
    


  
        <link rel="stylesheet" href="css/Style.css">

    
    
    
  </head>

  <body>
  
<div class="head">

<div class="pen-title">

  <h2 style="text-align:center;">GSN RESUME CREATION </h2>
 
  
  </div>
 
  </div>

  
<?php

$suthan="head";

if(isset($_GET["head"])){


		$suthan=$_REQUEST["head"];
		
if ($suthan == 'signup')
{ 
?>
  
  
  
  
  <center>
 
 
 <div class="alert">
 
 <span class="closebtn" onclick="this.parentElement.style.display='none';"> X </span> 
  
Your Already Register This Site 
</div>
</center>

<?php

}
?>



<?php
		
if ($suthan == 'login')
{ 
?>
  
  
  
  
  <center>
 
 
 <div class="alert">
 
 <span class="closebtn" onclick="this.parentElement.style.display='none';"> X </span> 
  
Invalid Email And Password 
</div>
</center>

<?php

}




}
?>





<?php

$suthan="action";

if(isset($_GET["action"]))


		$suthan=$_REQUEST["action"];
		
if ($suthan == 'signup')
{ 
include("Action/signup.php") ;
}
else if ($suthan == 'login-action')
{ 
include("Action/login-action.php") ;
}
else if ($suthan == 'signup-action')
{ 
include("Action/signup-action.php") ;
}
else if ($suthan == 'profile')
{ 
header("location:resume/Action/profile.php");
}















else
	{ 
include("Action/login.php") ;
}

?>



 
    
  </body>
</html>
