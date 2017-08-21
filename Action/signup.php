 

 <script type="text/javascript" src="js/check.js"></script>
 
 
 
 
 

 <form method="post" name="f1" onSubmit="return vali()" action="index.php?action=signup-action">
 
 <div class="container">
  <div class="card"></div>
  <div class="card">

    <h1 class="title">SIGN UP</h1>
	
      <div class="input-container">
        <input name="t1" type="text" id="t1"  required="required"/>
        <label for="Username"> NAME			</label>
        <div class="bar"></div>
      
	  </div>
	  
	  
	  
	  
	 
	   <div class="check" id="ct3"></div>
	   <br>
	  
	  <div class="input-container">
        <input name="t3" type="text" id="t3" onChange="return email()" required="required"/>
        <label for="E-MAIL">E-MAIL</label>
        <div class="bar"></div>
      </div>
	 
	  <div id="check"  id="ct4"></div><br>
      <div class="input-container">
        <input type="password" name="t4" id="t4" onChange="return pass();" required="required"/>
        <label for="Password">PASSWORD</label>
        <div class="bar"></div>
      </div>
	     
	
	  
      <div class="button-container">
        <button name="signup" onclick="val()"><span>SIGN UP</span></button>
		
		
	
      </div>
	
   

	

  
  </div>

</form>

 

 

 
 <a  class="toggle" href="index.php" title="LOGIN"><i class="fa fa-codepen">LOGIN</i></a>

</div>
 	

	
