function submitFunction(){

var uemail=document.getElementById('uemail').value;

var upass=document.getElementById('upass').value;


 if(uemail=="")
{
	document.getElementById('uemail_e').innerHTML="* Please fill the email field";
	return false;
}



 if(upass=="")
{
	document.getElementById('upass_e').innerHTML="* Please fill the Password field";
	return false;
}
else if((upass.length < 8) || (upass.length > 20)) {
    document.getElementById('upass_e').innerHTML =" * Passwords length must be between  8 and 20";
    return false;   
    }



}	