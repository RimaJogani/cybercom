<?php  
abstract class Animal  
{  
    public $name;  
    public $age;  
		public function Describe()  
		        {  
		                echo $this->name . ", " . $this->age . " years old";      
		        }  
		abstract public function Greet();  
 }  



class Dog extends Animal  
{  
		public function Greet()  
		        {  
		                echo  "Woof!";      
		        }  
		      
        public function Describe()  
        {  
                return Animal::Describe() . ", and I'm a dog!";      
        }  
}  
$animal = new Dog();  
$animal->name = "Bob";  
$animal->age = 7;  
echo $animal->Describe();  
echo $animal->Greet();  
?>  