function submitFunction(){

  var email="rima@gmail.com";
  var password="rima123";
  var uemail=document.getElementById("uemail");
  var pass=document.getElementById("pass");
  
  var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  

  
  if (emailValidation(uemail, "* Please enter a valid email address *")) {
    return true;
  }
  else
  {
    return false;
  }

  function emailValidation(inputtext, alertMsg) 
  {

    var emailExp = /^[w-.+]+@[a-zA-Z0-9.-]+.[a-zA-z0-9]{2,4}$/;
     if (inputtext.value.match(emailExp)) 
     {
        if(inputtext==email){
          return true;
        }
    }

     else {
     document.getElementById('uemail_e').innerText = alertMsg; // This segment displays the validation rule for email.
     inputtext.focus();
     return false;
    }
}
        
  


  /* if (!pass.checkValidity()) {
         if(!password==pass){
          var pass_e="incorrect password";
          document.getElementById("pass_e").innerHTML = pass_e;
       }
       else{


        document.getElementById("pass_e").innerHTML = pass.validationMessage;
       }
  }*/
  
  

}