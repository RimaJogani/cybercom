var fistName='Rima';
var age=17;

//Ternary Operator...

var result=age >= 18 ? ' Rima is a women' :   ' Rima is girl.' ;

console.log(result);

// switch case...
age=30;

switch(true)
{

	case age < 13 :
					console.log(fistName + ' is a girl');
					break;

	case age >= 13 && age < 20 :
					console.log(fistName + ' is teenagar');
					break;
	case age >=20 && age < 30 :
					console.log(fistName + ' is	young women');
					break;
	default :
					console.log(fistName + ' is women');
					break;




}