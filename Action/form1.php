<table>

<tr><th width="50%"></th><th width="50%"></th></tr>

<tr>
<form  action="form1-action.php" id="myForm" name="frmupload" method="post" enctype="multipart/form-data>
<td colspan="2" >
    <h1 class="title">PERSONAL DETAIL</h1>
	</td>
	</tr>
	 
	  
	  
	 
      
	  
	  <tr><td>
	FIRST NAME :
	  </td>
	  <td> <label for="<?PHP ECHO $user_name;?>" name="fname"><?PHP ECHO $user_name;?></label></td>
	  
	  </tr>
	    
		
		
		<tr><td>
		
	LAST NAME :
	
	
	  </td>
	  <td> 
	  
	   </div>
      <div class="input-container" STYLE="MARGIN:0 10PX;padding:0px;">
        <input type="TEXT" name="lname" required="required" style="height:20px; font-size:20px;padding-left:10px;"/>
       
        <div class="bar"></div>
      </div>
	  
	  </td>
	  </tr>
	    <tr><td>
		
		
	E-MAIL
	<br>
	  </td>
	  <td> <br><label for="<?PHP ECHO $user_email;?>" name="mail"><?PHP ECHO $user_email;?></label></td>
	  
	  </tr>
	  
	  
	  <tr><td>
		
		
	SECONDARY EMAIL
	  <td> 
	  
	   </div>
      <div class="input-container" STYLE="MARGIN:0 10PX;padding:0px;">
        <input type="TEXT" name="smail" required="required" style="height:20px; font-size:20px;padding-left:10px;"/>
       
        <div class="bar"></div>
      </div>
	  
	  </td>
	  
	  </tr>
	  
	  
	  
	  <tr>
	  <td>
	  
	  <tr><td>
		
		
	PHONE NO
	  <td> 
	  
	   </div>
      <div class="input-container" STYLE="MARGIN:0 10PX;padding:0px;">
        <input type="TEXT" name="phno" required="required" style="height:20px; font-size:20px;padding-left:10px;"/>
       
        <div class="bar"></div>
      </div>
	  
	  </td>
	  
	  </tr>
	  
	  
	  
	  <tr>
	  <td>
		
		
D O B:
	  <td> 
	  <br>
	   </div>
      <div class="input-container" STYLE="MARGIN:0 10PX;padding:0px;">
        <input type="date" name="dob" required="required" style="height:20px; font-size:20px;padding-left:10px;"/>
       
        <div class="bar"></div>
      </div>
	  
	  </td>
	  
	  </tr>
	  
	  
	    <tr>
	  <td>
		
		
GENDER
	  <td> 
	  <br>
	   </div>
      
        <input type="radio" name="sex" value="MALE">MALE
		<input type="radio"  name="sex" value="FEMALE">FEMALE
		<input type="radio"  name="sex" value="OTHER">OTHER
     
	  
	  </td>
	  
	  </tr>
	  
	  
	   <tr>
	  <td>
		
		
ADDRESS
	  <td> 
	  <br>
	   </div>
      <div class="input-container" STYLE="MARGIN:0 10PX;padding:0px;">
        <textarea rows="3" name="address" required="required" style="height:50px; font-size:20px;padding-left:10px;"></textarea>
       
        <div class="bar"></div>
      </div>
	  
	  </td>
	  
	  </tr>
	  
	  
	  
	  
	  <tr>
	  <td>
		
		
CITY
	  <td> 
	  <br>
	   </div>
      <div class="input-container" STYLE="MARGIN:0 10PX;padding:0px;">
        <input type="text" name="city" required="required" style="height:20px; font-size:20px;padding-left:10px;"/>
       
        <div class="bar"></div>
      </div>
	  
	  </td>
	  
	  </tr>
	  
	  
	  
	  <tr>
	  <td>
		
		
COUNTRY
	  <td> 
	  <br>
	   </div>
      <div class="input-container" STYLE="MARGIN:0 10PX;padding:0px;">
        <input type="TEXT" name="country" required="required" style="height:20px; font-size:20px;padding-left:10px;"/>
       
        <div class="bar"></div>
      </div>
	  
	  </td>
	  
	  </tr>
	  
	  
	  
	  <tr>
	  <td>
		
		
NATIONALITY : 
	  <td> 
	  <br>
	   </div>
      <div class="input-container" STYLE="MARGIN:0 10PX;padding:0px;">
        <input type="text" name="nat" required="required" style="height:20px; font-size:20px;padding-left:10px;"/>
       
        <div class="bar"></div>
      </div>
	  
	  </td>
	  
	  </tr>
	  
	  <tr>
	  <td>
	  		
LANGUAGE KNOWN : 
	  <td>
	  
	  <br>
	   </div>
      <div class="input-container" STYLE="MARGIN:0 10PX;padding:0px;">
        <input type="text" name="lang" required="required" style="height:20px; font-size:20px;padding-left:10px;"/>
       
        <div class="bar"></div>
      </div>
	  
	  </td>
	  
	  </tr>
	  <tr>
	  <td>
	  
	  		
MARITAL STATUS : 
	  </td> 
	  <br><td>
	   </div>
      <input type="radio" name="ms" value="YES">YES
		<input type="radio"  name="ms" value="NO">NO
		
	  
	  </td>
	  
	  </tr>
	  
	  
	 
	  
	  
	   
	   <tr>
	  <td>
		
		
ABOUT
	  <td> 
	  <br>
	   </div>
      <div class="input-container" STYLE="MARGIN:0 10PX;padding:0px;">
        <textarea rows="3" name="about"  style="height:50px; font-size:20px;padding-left:10px;"></textarea>
       
        <div class="bar"></div>
      </div>
	  
	  </td>
	  
	  </tr>
	  
	 
	  
	  
	  
	  
	  
	  
	  
	  <tr><td colspan="2">
	  <br>
	
	   <div class="button-container" >
        <button name="save1"><span>NEXT</span></button>
	
      </div>
	
	</td>
</form>
      
 </table>
 
 
 <div class="ft">
<center>

 Your Profile Compleate  : 2% 

</center>
</div>