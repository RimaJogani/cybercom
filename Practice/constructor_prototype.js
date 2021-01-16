

//function Constructor

/*var Person = function(name,yearOfBirth,job){
		this.name=name;
		this.yearOfBirth=yearOfBirth;
		this.job=job;
		this.calculateAge=function(){
			console.log(2020-this.yearOfBirth);
		}
}

var rima=new Person('Rima',1998,'designer');
rima.calculateAge();

var make=new Person('Make',1988,'teacher');
make.calculateAge();*/

//prototype method

var Person = function(name,yearOfBirth,job){
		this.name=name;
		this.yearOfBirth=yearOfBirth;
		this.job=job;
		
}

Person.prototype.calculateAge=function(){
	console.log(2020-this.yearOfBirth);
 }

Person.prototype.lastName='Jogani';
var rima=new Person('Rima',1998,'designer');
rima.calculateAge();

var make=new Person('Make',1988,'teacher');
make.calculateAge()

console.log(rima.lastName);

console.log(rima.hasOwnProperty('job'));

