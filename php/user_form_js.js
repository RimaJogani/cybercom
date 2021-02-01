


function funValidation() {
  var uname = document.getElementById("uname");
  var upass=document.getElementById("upass");
  var uaddress=document.getElementById("uaddress");
  var ugame=document.getElementById("ugame");
  var ugender=document.getElementById("ugender");
  var uage=document.getElementById("uage");
  var ufile=document.getElementById("ufile");


  if (!uname.checkValidity()) {
    document.getElementById("uname_e").innerHTML = uname.validationMessage;
  }
  else if (!upass.checkValidity()) {
    document.getElementById("upass_e").innerHTML = upass.validationMessage;
  }
  else if (!uaddress.checkValidity()) {
    document.getElementById("uaddress_e").innerHTML = uaddress.validationMessage;
  }
 else if (!uage.checkValidity()) {
    document.getElementById("uage_e").innerHTML = uage.validationMessage;
  }
  else if (!ufile.checkValidity()) {
    document.getElementById("ufile_e").innerHTML = ufile.validationMessage;
  }


 }

