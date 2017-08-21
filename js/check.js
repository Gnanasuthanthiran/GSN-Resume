
	 
function email()
{
 var email=/^[a-zA-Z0-9-_\.]+@[a-zA-Z]+\.[a-zA-Z]{2,3}$/;
   if(document.f1.t3.value.search(email)==-1)
    {
	document.getElementById("ct3").innerHTML="* Invalid Email";
	 document.f1.t3.focus();
	 return false;
	 }
	} 
	
	function pass()
	{
	var pass=/^[a-zA-Z0-9-_]{6,16}$/;
   if(document.f1.t4.value.search(pass)==-1)
    {
		document.getElementById("ct4").innerHTML="* week password";
	 document.f1.t4.focus();
	 return false;
	 }
	 }
	

function passck() {
var pass1 = document.getElementById("t4").value;
  var pass2 = document.getElementById("t5").value;

  if(document.f1.t5.value.search(pass1)==-1)
    {
		document.getElementById("ct5").innerHTML="* week password";
	 document.f1.t5.focus();
	 return false;
	 }
}  
	 
	 
	 
	function phone()
	{
	var phn=/^[0-9]{9,14}$/;
  if(document.f1.t5.value.search(phn)==-1)
    {
	 alert("enter correct phone no");
	 document.f1.t5.focus();
	 return false;
	 }
	 }
	
	
	

	
function vali()
{
  
   var email=/^[a-zA-Z0-9-_\.]+@[a-zA-Z]+\.[a-zA-Z]{2,3}$/;
    var pass=/^[a-zA-Z0-9-_]{6,16}$/;
	 	var phn=/^[0-9]{9,14}$/;
	
	  
   if(document.f1.t3.value.search(email)==-1)
    {
	 document.getElementById("ct3").innerHTML="* Invalid Email";
	 document.f1.t3.focus();
	 return false;
	 }
	 
	
	
   else if(document.f1.p1.value.search(pass)==-1)
    {
	 alert("enter correct pass");
	 document.f1.p1.focus();
	 return false;
	 }
	 
	
	  else if(document.f1.t5.value.search(phn)==-1)
    {
	 alert("enter correct phone no");
	 document.f1.t5.focus();
	 return false;
	 }
	 
	
 
	 
	 
	 
	
	 
	
	 
	 else 
	{
	 return true;
	 }
	 }
	