

var rima={
		firstName:'Rima',
		lastName:'Jogani',
		birthYear:1998,
		family:['Rima','umang','Riddhi'],
		job:'software',
		isMarried:false,

		calculateAge: function()
		{
			this.age=2020-this.birthYear;
		}


	};
	rima.calculateAge();
	console.log(rima);
	console.log(rima.firstName);

	console.log(rima['lastName']);

	var a='family';
	console.log(rima[a]);

	rima.job='designer';
	console.log(rima.job);
	console.log(rima);


	var riddhi=new Object();
	riddhi.name='Riddhi Chalodiya';
	riddhi.age=22;
	console.log(riddhi);


