var rima=
{

		name:'Rima',
		yearOfBirth:1998,
		calculateAge: function() {
			console.log(this);
			console.log(2020-this.yearOfBirth);
		}

};
rima.calculateAge();

var riddhi=
{
	name:'Riddhi',
	yearOfBirth:1999
};
riddhi.calculateAge=rima.calculateAge;
riddhi.calculateAge();