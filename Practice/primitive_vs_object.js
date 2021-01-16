//primitive data...
var a=2;
var b=a;
a=5;

console.log(a);
console.log(b);

//object;


var rima={
	name:'Rima',
	age:13
}

var riddhi=rima;
rima.age=16;

console.log(riddhi.age);
console.log(rima.age);


//function

var age=25;
var obj1={
	name:'Rima',
	city:'Ahmedabad'
}

function change(a,b) {

	age=13;
	obj1.city='surat';
	// body...
}

change(age,obj1);
console.log(age);
console.log(obj1.city);