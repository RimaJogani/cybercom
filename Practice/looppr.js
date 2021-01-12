var rima=['Rima','Jogani',1998,'designer',true];
//for loop
for(var i=0;i<rima.length;i++)
{
	console.log(rima[i]);
}

//while loop
var riddhi=['Riddhi','Jogani',1998,'designer',true];
var j=0;

/*while(j<riddhi.length)
{
	
	console.log(riddhi[j]);
	j++;
}*/

//continue
for(j=0;j<riddhi.length;j++)
{
	if(typeof riddhi[j] !== 'string') continue;	
	console.log(riddhi[j]);
}

//break

/*for(j=0;j<riddhi.length;j++)
{
	if(typeof riddhi[j] !== 'string') break;	
	console.log(riddhi[j]);
}*/

//backword loop

for(j>riddhi.length-1;j>=0;j--)
{
	console.log(riddhi[j]);
}