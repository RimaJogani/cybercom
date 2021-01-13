var john={
	fullName:'John Smith',
	johnHeight:1.30,
	johnMass:68,
	calculateBMI: function()
	{
		return this.johnMass/(this.johnHeight*this.johnHeight);
	}
};
console.log(john);
console.log("Full Name:"+john['fullName']);
console.log("BMI of John:"+john.calculateBMI());//40

var mark={
	fullName:'Mark mary',
	johnHeight:1.65,
	johnMass:60

}

mark.calculateBMI=john.calculateBMI;
console.log("Full Name:"+mark['fullName']);
console.log("BMI of Mark:"+mark.calculateBMI());//22

if(john.calculateBMI() < mark.calculateBMI())
{
	console.log("mark's BMI Higher than John:"+mark.calculateBMI());
}
else
{
	console.log("John BMI Higher than mark:"+john.calculateBMI());
}





