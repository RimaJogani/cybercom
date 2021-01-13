var bill=[124,48,268];
var tip=[];
var total=[];

function calculateTip()
{
	for(var i=0;i<3;i++)
	{
	if(bill[i]<50)
	{
		tip[i]=(bill[i]*20)/100;
		total[i]=bill[i]+tip[i];
	}
	else if(bill[i]>=50 && bill[i]<=200)
	{
		tip[i]=(bill[i]*15)/100;
		total[i]=bill[i]+tip[i];
	}
	else
	{
		tip[i]=(bill[i]*10)/100;
		total[i]=bill[i]+tip[i];
	}
}
	for(var j=0;j<3;j++)
	{
		console.log('Tip '+j+': '+tip[j])
	}

	for(var j=0;j<3;j++)
	{
		console.log('Total Bill With Tip '+j+': '+total[j])
	}
}

calculateTip();