 <script type="text/javascript" src="../js/jquery.min.js"></script>
 <script type="text/javascript" src="../js/education.js"> </script>


 <script type="text/javascript" >


 
 </script>
<style>
p{
	margin:0px;
	padding:0px;
}
</style> 
 
<div class="head">
<div class="pen-title">
    <h3 STYLE="font-size:30px;">EDUCATION QUALIFICATION <h3>
	</div>
</div>

<TABLE>
<tr>
<td colspan="2">
SELECT YOUR EDUCATION OPTIONS

</td>
</tr>
<tr>


<td>
<input type="checkbox" name="qual" id="qualsslc" value="sslc">
SSLC(10<sup>th</sup>)
</td>

<td><input type="checkbox" name="qual" id="qualhsc" value="hsc" >
HSC(12<sup>th</sup>)
</td>

</tr>

<TR>
<td><input type="checkbox" name="qual" id="qualdip" value="dip">
DIPLOMO
</td>

<td><input type="checkbox" name="qual"  id="qualiti" value="iti">
ITI
</td>
</TR>
<TR>
<td><input type="checkbox" name="qual" id="qualug" value="ug">
UG
</td>

<td><input type="checkbox" name="qual"  id="qualpg" value="pg">
PG
</td>

</tr>



</table>

<form method="post" action="form2-action.php">
	   <BR>

	   <!------------------->

<input type="hidden" name="sslc"/>
<div class="bk" id="sslc">
    <h1 class="title">SSLC(10<SUP>th</SUP>) QUALIFICATION 
	
	
	</h1>




	
	
	<p style="text-align:left; margin:opx;margin-left:30px;padding:0px;">
	  SCHOOL NAME</p>
	  
	   
      <div class="input-container">
        <input type="TEXT" name="t101" />
       
        <div class="bar"></div>
      </div>
	
	<p style="text-align:left; margin:opx;margin-left:30px;padding:0px;">CITY</p>
	  
	   
      <div class="input-container">
        <input type="TEXT" name="t102" />
       
        <div class="bar"></div>
      </div>
	  
	  
	  
	  
	  
	
	
	<p style="text-align:left; margin:opx;margin-left:30px;padding:0px;">
	  PERCENTAGE (%)</p>
	  
	   
      <div class="input-container">
        <input type="TEXT" name="t103" />
       
        <div class="bar"></div>
      </div>
	    
		<p style="text-align:left; margin:opx;margin-left:30px;padding:0px;">
		ACEDEMIC YEAR</p>
	  
	   
      <div class="input-container">
        <input type="TEXT" name="t104" />
       
        <div class="bar"></div>
      </div>
	  

			<p style="text-align:left; margin:opx;margin-left:30px;padding:0px;">
		BOARD(CBSC (or) STATE )</p>
	  
	   
      <div class="input-container">
        <input type="TEXT" name="t10univ" />
       
        <div class="bar"></div>
      </div>
	  
	
	
	
	</div>
	
	   
	   <!------------------->
	
	
	<input type="hidden" name="hsc"/>
<div class="bk" id="hsc"  name="hsc">	
	
	<BR><HR>
	
    <h1 class="title">HSC(+2) QUALIFICATION </h1>




	<p style="text-align:left; margin:opx;margin-left:30px;padding:0px;">
	
	
	  SCHOOL NAME</p>
	  
	   
      <div class="input-container">
        <input type="TEXT" name="t121" />
       
        <div class="bar"></div>
      </div>
	  
	  
	  <p style="text-align:left; margin:opx;margin-left:30px;padding:0px;">
	  
	   CITY</p>
	  
	   
      <div class="input-container">
        <input type="TEXT" name="t122" />
       
        <div class="bar"></div>
      </div>
	
	
	<p style="text-align:left; margin:opx;margin-left:30px;padding:0px;">
	  PERCENTAGE (%)
	  </p>
	   
      <div class="input-container">
        <input type="TEXT" name="t123" />
       
        <div class="bar"></div>
      </div>
	    
		<p style="text-align:left; margin:opx;margin-left:30px;padding:0px;">
		ACEDEMIC YEAR</p>
	  
	   
      <div class="input-container">
        <input type="TEXT" name="t124" />
       
        <div class="bar"></div>
      </div>
	  
	
	  
	  
	  <p style="text-align:left; margin:opx;margin-left:30px;padding:0px;">
		BOARD(CBSC (or) STATE )</p>
	  
	   
      <div class="input-container">
        <input type="TEXT" name="t12univ" />
       
        <div class="bar"></div>
      </div>
	  
	</div>
	  
	
	   <!------------------->
	  
	  <input type="hidden" name="dip">
	  <div class="bk" id="dip">
    <h1 class="title">DIPLOMO QUALIFICATION </h1>




	
	<p style="text-align:left; margin:opx;margin-left:30px;padding:0px;">
	  COURSE : </p>
	  
	   
      <div class="input-container">
        <input type="TEXT" name="dip" />
       
        <div class="bar"></div>
      </div>
	  
	  
	<p style="text-align:left; margin:opx;margin-left:30px;padding:0px;">
	  UNIVERCITY</p>
	  
	   
      <div class="input-container">
        <input type="TEXT" name="dipuniv" />
       
        <div class="bar"></div>
      </div>
	  
	
	<p style="text-align:left; margin:opx;margin-left:30px;padding:0px;">
	  COLLAGE NAME</p>
	  
	   
      <div class="input-container">
        <input type="TEXT" name="dip1" />
       
        <div class="bar"></div>
      </div>
	  
	  
	  
	  
	  
	<p style="text-align:left; margin:opx;margin-left:30px;padding:0px;">
 CITY</p>
	  
	   
      <div class="input-container">
        <input type="TEXT" name="dip2" />
       
        <div class="bar"></div>
      </div>	
	<p style="text-align:left; margin:opx;margin-left:30px;padding:0px;">
	  PERCENTAGE (%)</p>
	  
	   
      <div class="input-container">
        <input type="TEXT" name="dip3" />
       
        <div class="bar"></div>
      </div>
	    
		<p style="text-align:left; margin:opx;margin-left:30px;padding:0px;">
		ACEDEMIC YEAR</p>
	  
	   
      <div class="input-container">
        <input type="TEXT" name="dip4" />
       
        <div class="bar"></div>
      </div>
	  
	
	</div>
	
	
	
	
	
	<!------------------->
	  
	  <input type="hidden" name="iti">
	  <div class="bk" id="iti">
    <h1 class="title">ITI QUALIFICATION </h1>




	<p style="text-align:left; margin:opx;margin-left:30px;padding:0px;">
	  COURSE : </p>
	  
	   
      <div class="input-container">
        <input type="TEXT" name="iti" />
       
        <div class="bar"></div>
      </div>
	  
	
	<p style="text-align:left; margin:opx;margin-left:30px;padding:0px;">
	  UNIVERCITY</p>
	  
	   
      <div class="input-container">
        <input type="text" name="itiuniv" />
       
        <div class="bar"></div>
      </div>
	  
	
	<p style="text-align:left; margin:opx;margin-left:30px;padding:0px;">
	  COLLAGE NAME</p>
	  
	   
      <div class="input-container">
        <input type="TEXT" name="iti1" />
       
        <div class="bar"></div>
      </div>
	  
	  
	  
	  
	  <p style="text-align:left; margin:opx;margin-left:30px;padding:0px;">
 CITY
	  </p>
	   
      <div class="input-container">
        <input type="TEXT" name="iti2" />
       
        <div class="bar"></div>
      </div>	
	
	<p style="text-align:left; margin:opx;margin-left:30px;padding:0px;">
	  PERCENTAGE (%)</p>
	  
	   
      <div class="input-container">
        <input type="TEXT" name="iti3" />
       
        <div class="bar"></div>
      </div>
	    
		<p style="text-align:left; margin:opx;margin-left:30px;padding:0px;">
		ACEDEMIC YEAR</p>
	  
	   
      <div class="input-container">
        <input type="TEXT" name="iti4" />
       
        <div class="bar"></div>
      </div>
	  
	
	</div>
	

	
	
	
	
	
	
	   <!------------------->
	<input type="hidden" name="ug">
	<div class="bk" id="ug">
	
    <h1 class="title">UG QUALIFICATION </h1>




	<p style="text-align:left; margin:opx;margin-left:30px;padding:0px;">
	  COURSE : </p>
	  
	   
      <div class="input-container">
        <input type="TEXT" name="ug" />
       
        <div class="bar"></div>
      </div>
	  
	  
	<p style="text-align:left; margin:opx;margin-left:30px;padding:0px;">
	  UNIVERCITY</p>
	  
	   
      <div class="input-container">
        <input type="TEXT" name="uguniv" />
       
        <div class="bar"></div>
      </div>
	  
	  
	
	
	<p style="text-align:left; margin:opx;margin-left:30px;padding:0px;">
	  COLLAGE NAME</p>
	  
	   
      <div class="input-container">
        <input type="TEXT" name="ug1" />
       
        <div class="bar"></div>
      </div>
	  
	  
	  
	  
	  <p style="text-align:left; margin:opx;margin-left:30px;padding:0px;">
 CITY</p>
	  
	   
      <div class="input-container">
        <input type="TEXT" name="ug2" />
       
        <div class="bar"></div>
      </div>	
	
	<p style="text-align:left; margin:opx;margin-left:30px;padding:0px;">
	  PERCENTAGE (%)</p>
	  
	   
      <div class="input-container">
        <input type="TEXT" name="ug3" />
       
        <div class="bar"></div>
      </div>
	    
		<p style="text-align:left; margin:opx;margin-left:30px;padding:0px;">
		ACEDEMIC YEAR
	  </p>
	   
      <div class="input-container">
        <input type="TEXT" name="ug4" />
       
        <div class="bar"></div>
      </div>
	  
	
		</div>
	
	
	
	
	   <!------------------->
	<input type="hidden" name="pg"/>
	<div class="bk" id="pg"  name="pg">
	
    <h1 class="title">PG QUALIFICATION </h1>




	<p style="text-align:left; margin:opx;margin-left:30px;padding:0px;">
	  COURSE : </p>
	  
	   
      <div class="input-container">
        <input type="TEXT" name="pg" />
       
        <div class="bar"></div>
      </div>
	  
	  
	<p style="text-align:left; margin:opx;margin-left:30px;padding:0px;">
	  UNIVERCITY</p>
	  
	   
      <div class="input-container">
        <input type="TEXT" name="pguniv" />
       
        <div class="bar"></div>
      </div>
	
	
	<p style="text-align:left; margin:opx;margin-left:30px;padding:0px;">
	  COLLAGE NAME</p>
	  
	   
      <div class="input-container">
        <input type="TEXT" name="pg1" />
       
        <div class="bar"></div>
      </div>
	  
	  
	  
	  
	  
	<p style="text-align:left; margin:opx;margin-left:30px;padding:0px;">
 CITY</p>
	  
	   
      <div class="input-container">
        <input type="TEXT" name="pg2" />
       
        <div class="bar"></div>
      </div>	
	<p style="text-align:left; margin:opx;margin-left:30px;padding:0px;">
	  PERCENTAGE (%)</p>
	  
	   
      <div class="input-container">
        <input type="TEXT" name="pg3" />
       
        <div class="bar"></div>
      </div>
	    
		<p style="text-align:left; margin:opx;margin-left:30px;padding:0px;">
		ACEDEMIC YEAR</p>
	  
	   
      <div class="input-container">
        <input type="TEXT" name="pg4" />
       
        <div class="bar"></div>
      </div>
	  
	
	</div>
	
	   <div class="button-container" id="bt">
        <button name="save2" onclick="check()"><span>NEXT</span></button>
	
      </div>
	
	</form>
	
	
	<div class="ft">
<center>

 Your Profile Compleate  : 50% 

</center>
</div>