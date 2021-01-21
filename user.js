var user = [];


if(localStorage.getItem('user')) {
    user = JSON.parse(localStorage.getItem('user'));
}

function userAdd(){
    var aName = document.getElementById('name').value;
    var aEmail = document.getElementById('email').value;
    var aPass = document.getElementById('pass').value;
    var aDate = document.getElementById('date').value;


    var userdata = {
        name :aName,
        email : aEmail,
        pass : aPass,
        date:aDate
    };

    if(localStorage.getItem('user'))
    {
        user = JSON.parse(localStorage.getItem('user'));
    }

    user.push(userdata);
    console.log(user);

    localStorage.setItem("user", JSON.stringify(user));


       var arr = localStorage.getItem('user');
        var items = JSON.parse(arr);
        
        arr = items;
        
        document.write('<table border = "1" id = "table1">');
        document.write('<tr>');
        document.write('<th>Name</th> <th>Email</th> <th>Date Of Birth</th> </tr> <tr>');
                    
            if(arr == null )
            {
                alert("Records not found!");
                document.getElementById("table1").style.display = "none";
                window.location.href = "login.html";
            }           
            else
            {
                for(var k = 0 ; k < arr.length; k++)
                {   
                    document.write('<td>'+ arr[k].name + '</td>' );
                    document.write('<td>'+ arr[k].email + '</td>' );
                    document.write('<td>'+ arr[k].date + '</td>' );
                    document.write('</tr>');
                }
            }
            document.write('</table>'); 
    





}

