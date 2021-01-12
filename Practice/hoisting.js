//hoisting..

//fuction
calculateAge(1998);

function calculateAge(year)
{
	console.log(2020-year);
}

//variable

console.log(age);//undifine..
var age=22;

function food()
{
	var age=20;
	console.log(age);//20
}
food();

console.log(age);//22