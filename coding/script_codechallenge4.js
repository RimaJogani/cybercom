var john={
	fullName:'John Smith',
	Height:1.65,
	Mass:80,
	calculateBMI: function()
	{
		return this.Mass/(this.Height*this.Height);
	}
};
console.log(john);
console.log("Full Name:"+john['fullName']);
console.log("BMI of John:"+john.calculateBMI());//40

var mark={
	fullName:'Mark mary',
	Height:1.30,
	Mass:60

}

mark.calculateBMI=john.calculateBMI;
console.log("Full Name:"+mark['fullName']);
console.log("BMI of Mark:"+mark.calculateBMI());//22

if(john.calculateBMI() < mark.calculateBMI())
{
	console.log("mark's BMI Higher than John:"+mark.calculateBMI());
}
else if(john.calculateBMI() > mark.calculateBMI())
{
	console.log("John BMI Higher than mark:"+john.calculateBMI());
}
else
{
	console.log("both have same BMI");
}





