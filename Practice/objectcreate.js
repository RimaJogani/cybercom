

var personproto ={

	calculateAge : function(){

			console.log(2020-this.yearOfBirth);
	}
}

var rima=Object.create(personproto);
rima.name='Rima';
rima.yearOfBirth=1998;
rima.job='designer';
rima.calculateAge();


var riddhi=Object.create(personproto,{
	name:{value:'Riddhi'},
	yearOfBirth:{value:1999},
	job:{value:'teacher'}

})
riddhi.calculateAge();



