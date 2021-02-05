<?php  
class Name  
{  
private $name="Alex";  //get error
private function show()  
{  
echo "This is private method of parent class";  
}  
}     
class child extends Name 
{  
function show1()  
{  
echo $this->name;  
}  
}     
$obj= new child;  
$obj->show();  
$obj->show1();  
?>  
