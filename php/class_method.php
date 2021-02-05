<?php

class BankBalance{

	public $balance=1000;

	public function DisplayBalance(){
		echo "Balance is : ".$this->balance;

			}
	public function Withdraw($amount){
		if($this->balance<$amount){
			echo "Not Enough Balance";
		}
		else{
			echo "Withdraw Balance : ".$amount."<br>";
			$this->balance=$this->balance - $amount;
		}
	}

	public function deposit($amount){
		echo "deposit amount : ".$amount."<br>";
		echo "deposit after amount : ".$this->balance=$this->balance+$amount."<br>";
			}


}

class savingaccount extends BankBalance{



}


$alex=new BankBalance();
echo "total balance :" .$alex->balance."<br>"; 
$alex->Withdraw(900);
$alex->deposit(900);
$alex->DisplayBalance();


$alex2=new savingaccount();
echo "total balance :" .$alex2->balance."<br>"; 
$alex2->Withdraw(500);
$alex2->deposit(400);
$alex2->DisplayBalance();
	




?>