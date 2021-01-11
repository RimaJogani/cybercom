
var whatdoyodo = function(job,name)
				{
					switch(job)
					{
						case 'teacher':
							console.log(name + ' teaches kids how to code.');
							break;
						case 'driver':
							console.log(name + ' drives a cab in landon.');
							break;
						default :
							console.log(name + ' does something else.');
							break;	
					}				
				}

whatdoyodo('teacher','Riddhi');
whatdoyodo('driver','Rima');
whatdoyodo('dancer','Payal');