

$(document).ready(function(){
	
	
	document.getElementById("sslc").style.display="none";
	document.getElementById("hsc").style.display="none";
	document.getElementById("dip").style.display="none";
	document.getElementById("iti").style.display="none";
	document.getElementById("ug").style.display="none";
	document.getElementById("pg").style.display="none";
		//document.getElementById("bt").style.display="none";
	
	
	
	
	
	
	
    $("#qualsslc").click(function(){
		
		var ck= document.getElementById("qualsslc").checked;
		if(ck==true)
        $("div#sslc").show();
	else
	   $("div#sslc").hide();	
    });
  






 $("#qualhsc").click(function(){
		
		var ck= document.getElementById("qualhsc").checked;
		if(ck==true)
        $("div#hsc").show();
	else
	   $("div#hsc").hide();	
    });
  


 $("#qualdip").click(function(){
		
		var ck= document.getElementById("qualdip").checked;
		if(ck==true)
        $("#dip").show();
	else
	   $("#dip").hide();	
    });
  


 $("#qualiti").click(function(){
		
		var ck= document.getElementById("qualiti").checked;
		if(ck==true)
        $("#iti").show();
	else
	   $("#iti").hide();	
    });
  



 $("#qualpg").click(function(){
		
		var ck= document.getElementById("qualpg").checked;
		if(ck==true)
        $("#pg").show();
	else
	   $("#pg").hide();	
    });
  



 $("#qualug").click(function(){
		
		var ck= document.getElementById("qualug").checked;
		if(ck==true)
        $("#ug").show();
	else
	   $("#ug").hide();	
    });
  
});