

//function pass as argument function..
var year=[1998,1999,1995];

function array_cal(arr,fn) {
	var arrres=[];
	for(var i=0;i<arr.length;i++)
	{
		arrres.push(fn(arr[i]));
	}
	return arrres;
	// body...
}

function calculateAge(a)
{
	return 2020-a;

}

var pass=array_cal(year,calculateAge);

console.log(pass);


//return the function..


function details(job)
{
	if(job == 'designer'){
		return function(name){
			console.log(name);
	}else if(job == 'teacher'){
		return function(name){
			console.log(name);
		}
	} else {
		return function(name){
			console.log(name);
		}
	}
}

var retfun=details('designer');
retfun('rima');