
 
var no1 = 0;
var no2 = 1;
var ans;
 
var num = prompt("Enter the limit to generate fibonacci no");
 
document.write(no1+"<br />");
document.write(no2+"<br />");
 
for(var i=3; i <= num ;i++)
{
	ans = no1 + no2;
	no1 = no2;
	no2 = ans;
 
document.write(ans+"<br />");
}
 
