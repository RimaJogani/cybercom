


function validation() {



 var uname=document.getElementById('uname').value;

  var upass=document.getElementById("upass").value;
  var uaddress=document.getElementById("uaddress").value;
  var ugame=document.getElementsByName("ugame[]");
  var ugender=document.uForm.ugender.value;
 
  var uage=document.getElementById("uage").value;
 var ufile=document.getElementById("ufile").value;

	

  if (uname == "") {
  
    document.getElementById("uname_e").innerHTML = "* Please fill the username field";
    return false;
  }
 else if((isNaN(uname) && uname.length <= 2) || (uname.length > 20)) {
    
    document.getElementById('uname_e').innerHTML =" * Username length must be between 2 and 20";
    return false;   
    }
 else if(!isNaN(uname)){
    document.getElementById('uname_e').innerHTML =" * only characters are allowed";
    return false;
    }


    if(upass == ""){
    document.getElementById('upass_e').innerHTML =" * Please fill the password field";
    return false;
    }
    else if((upass.length < 8) || (upass.length > 20)) {
    document.getElementById('upass_e').innerHTML =" * Passwords length must be between  8 and 20";
    return false;   
    }
  
 if(uaddress == ""){
    document.getElementById('uaddress_e').innerHTML =" * Please fill the password field";
    return false;
    }

var game = [];
 var checked=false;
    for(var i=0; i < ugame.length; i++) {
        if(ugame[i].checked) {
            // Populate hobbies array with selected values
            game.push(ugame[i].value);
            checked=true;
        }
    }
        if(checked == false){
        document.getElementById('ugame_e').innerHTML =" ** Please Check atleast one game";
        // alert("pick atlest one game");
        return false;
    }



 if(ugender==""){
    document.getElementById('ugender_e').innerHTML =" * Please Check gender";
    return false;
 }

if(uage=="none"){
    document.getElementById('uage_e').innerHTML =" * Please Check age group";
    return false;
 }


if(ufile==""){
    document.getElementById('ufile_e').innerHTML =" * Please upload file";
    return false;
 }

    

 }
