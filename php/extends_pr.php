<?php  

class Name {

   public $_firstName;
   public $_lastName;
   
 public  function __construct($first_name, $last_name) {
         $this->_firstName = $first_name;
         $this->_lastName = $last_name;
         //echo $this->_firstName;
         //echo  $this->_lastName;
   }
   
  public function Describe()  
              {  
                      return $this->_firstName . ", " . $this->_lastName . "<br>";      
              }  
}


class NameSub1 extends Name {

   public $_middleInitial;
   
  public function __construct($first_name, $middle_initial, $last_name) {
     echo  parent::__construct($first_name, $last_name);
      $this->_middleInitial = $middle_initial;
      //echo $first_name;
     // echo $this->_middleInitial;

   }
   
  public function Describe() {
       return parent::Describe() .",". $this->_middleInitial;
   }
}


$alex=new NameSub1("rima","riddhi","payal");
echo $alex->Describe(); 
?>