var johng1,johng2,johng3;
var mikeg1,mikeg2,mikeg3;

johng1=89;
johng2=120;
johng3=103;
mikeg1=116;
mikeg2=94;
mikeg3=123;


console.log('John game1:'+johng1+'   game2:'+johng2+'   game3:'+johng3);

console.log('Mike game1:'+mikeg1+'   game2:'+mikeg2+'   game3:'+mikeg3);

var johnTeamAvg;
var mikeTeamAvg;

johnTeamAvg=(johng1 + johng2 + johng3)/3;
mikeTeamAvg=(mikeg1 + mikeg2 + mikeg3)/3;

console.log("John Team Aevrage:"+johnTeamAvg);

console.log("Mike Team Aevrage:"+mikeTeamAvg);

if(johnTeamAvg > mikeTeamAvg)
{
	console.log(" John Team win the game:"+johnTeamAvg);
}
else
{
	console.log("Mike Team win the game:"+mikeTeamAvg);
}

johng1=110;

johnTeamAvg=(johng1 + johng2 + johng3)/3;
mikeTeamAvg=(mikeg1 + mikeg2 + mikeg3)/3;

console.log("John Team Aevrage:"+johnTeamAvg);

console.log("Mike Team Aevrage:"+mikeTeamAvg);

if(johnTeamAvg > mikeTeamAvg)
{
	console.log(" John Team win the game:"+johnTeamAvg);
}
else if(johnTeamAvg = mikeTeamAvg)
{
	console.log(" draws in both teams");
}

else
{
	console.log("Mike Team win the game:"+mikeTeamAvg);
}