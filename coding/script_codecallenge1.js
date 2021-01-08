var markHeight=1.65;//meter
var markMass=68;//kilograme

var johnHeight=1.30;//meter
var johnMass=60;//kilograme

console.log('Mark Height:'+markHeight+'m');
console.log('Mark Mass:'+markMass+'kg');

console.log('John Height:'+johnHeight+'m');
console.log('John Mass:'+johnMass+'kg');

var markBMI,johnBMI;

markBMI = markMass / (markHeight * markHeight);

console.log('mark BMI:'+markBMI);

johnBMI = johnMass / (johnHeight * johnHeight);

console.log('john BMI:'+johnBMI);

var compare;
compare =markBMI > johnBMI;

console.log("Is mark's BMI Higher than John's?"+compare);




