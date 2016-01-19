<?php

class QueenBee{
//
private $iHealth;
private $iDamage;
private $sColor;
private $sClass;

function __construct(){

	$this->iHealth = 100;
	$this->iDamage = 8;
	$this->sColor = "Red";
	$this->sClass = "queen";

}	

public function GetHealth(){
	
	return $this->iHealth;

}	

public function GetDamage(){

	return $this->iDamage;

}

public function GenerateDamage(){

	$this->iHealth -= $this->iDamage;
	if ($this->iHealth < 0) {

		$this->iHealth = 0;
	
		return "End";
	}	
	
}

public function GetColor(){

	return $this->sColor;
}

public function GetClass(){

	return $this->sClass;
}

public function kill_(){
	$this->iHealth = 0;

}

}





?>
