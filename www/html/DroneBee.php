<?php

class DroneBee{
//
private $iHealth;
private $iDamage;
private $sColor;
private $sClass;

function __construct(){


	$this->iHealth = 50;
	$this->iDamage = 12;
	$this->sColor = "Orange";
	$this->sClass = "drone";
}	

public function GetHealth(){
	
	return $this->iHealth;

}	

public function GetDamage(){

	return $this->iDamage;

}


public function GenerateDamage(){

	$this->iHealth -= $this->iDamage;
	if ($this->iHealth < 0) $this->iHealth = 0;
	
	
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
