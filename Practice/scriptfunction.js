function calculateage(year) 
{
	return 2020 - year;
}

function yearretirement(year,name) 
{
	var age=65-calculateage(year);
	console.log(name + ' retires in ' + age + ' years.');
 
}


yearretirement(2000,'Rima');
