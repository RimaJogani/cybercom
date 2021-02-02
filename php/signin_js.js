function submitFunction(){

var uemail=document.getElementById('uemail').value;
//alert(uemail);
var email="rima@gmail.com";
//alert(email);

if(uemail=="")
{
	document.getElementById('uemail_e').innerHTML="Please fill the email field";
	return false;
}
else if(!email===uemail){
	document.getElementById('uemail_e').innerHTML="Incorrect Email";
	return false;
}


}