function disablebutton(){
    document.getElementById('submit').disabled = true;
     alert("pelease select agreement");
}




function activateButton(element) {

    if(element.checked) {
      document.getElementById('submit').disabled = false;
      
     }
     else  {
      document.getElementById('submit').disabled = true;
    }

}





function validation()
{
	var fname=document.getElementById('fname').value;
    var lname=document.getElementById('lname').value;
     var month=document.getElementById('month').value;
    var day=document.getElementById('day').value;
    var year=document.getElementById('year').value;
    var gender=document.uForm.gender.value;
    var country=document.getElementById('country').value;
    var uemail=document.getElementById('uemail').value;
   // alert(uemail);
    var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
     var phone =document.getElementById('phone').value;

     var pass=document.getElementById('pass').value;
     var cpass=document.getElementById('cpass').value;


	if (fname=="") 
	{
		document.getElementById('fname_e').innerHTML= "* Please fill First Name field";
		return false;
	}
	else if ((isNaN(fname) && fname.length <=2 )||(fname.length>10))
	{
		document.getElementById('fname_e').innerHTML= "* Username length must be between 2 and 10";
		return false;

	}
	else if (!isNaN(fname))
	 {
	 	document.getElementById('fname_e').innerHTML =" * only characters are allowed";
        return false;
	 }



	 
	if (lname=="") 
	{
		document.getElementById('lname_e').innerHTML= "* Please fill Last Name field";
		return false;
	}
	else if (isNaN(lname) && (lname.length <=2 )||(lname.length>10))
	{
		document.getElementById('lname_e').innerHTML= "* Username length must be between 2 and 10";
		return false;

	}
	else if (!isNaN(lname))
	 {
	 	document.getElementById('lname_e').innerHTML ="* only characters are allowed";
        return false;
	 }




	
    if(month == "none")
    {
    	document.getElementById('bod').innerHTML = " * select a month";
    	return false;
    }

	else if(day == "none")
	{
    	document.getElementById('bod').innerHTML =" * select a day";
    	return false;
    }
	else if(year == "none")
	{
    	document.getElementById('bod').innerHTML =" * select a year";
    	return false;
    }

     
    if(gender=="")
    {
        document.getElementById('gender_e').innerHTML ="* Please Check gender";
        return false;
    }

    
    if (country=="none") 
    {
    	document.getElementById('country_e').innerHTML = "* Please enter country";
    	return false;
    }



      if(uemail == ""){
            document.getElementById("email_e").innerHTML="* Please fill the email field";
             return false;
      }
     else if (!filter.test(uemail)) {
                    

                 document.getElementById("email_e").innerHTML = "* please enter valid email";
            }

        
       


       
        if (phone=="")
         {
            document.getElementById('phone_e').innerHTML ="* Enter phone Number";
            return false;
        }
        else if (isNaN(phone)) 
        {
            document.getElementById('phone_e').innerHTML ="* characters are not allowed";
            return false;
        }
        else if(phone.length != 10){
             document.getElementById('phone_e').innerHTML ="* please enter 10 digit";
            return false;
        }



        if(pass=="")
        {
            document.getElementById('pass_e').innerHTML="* Please fill the Password field";
            return false;
        }
        else if((pass.length < 8) || (pass.length > 20)) {
            document.getElementById('pass_e').innerHTML =" * Passwords length must be between  8 and 20";
            return false;   
            }


        if(cpass=="")
        {
            document.getElementById('cpass_e').innerHTML="* Please fill the Password field";
            return false;
        }
        else if(pass != cpass) {
            document.getElementById('cpass_e').innerHTML =" * Incorrect Password";
            return false;   
            }
       

}