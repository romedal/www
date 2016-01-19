<?php

include ("html".DIRECTORY_SEPARATOR."WorkerBee.php");


class WorkerBeeTest extends PHPUnit_Framework_TestCase{
	
	
	public function testBeeCreation(){
	
       		 $Bee = new WorkerBee();
	 	 $this->assertEquals(75, $Bee->GetHealth());	
		 $this->assertEquals(10, $Bee->GetDamage());
	}
			
	
	public function testGetClass(){
	
		$Bee = new WorkerBee();
		$this->assertEquals("worker", $Bee->GetClass());
	
	}
	
	public function testGetColor(){
		$Bee = new WorkerBee();	
		$this->assertEquals("Green", $Bee->GetColor());
	
	
	}
	
	public function	testGetDamage(){
	


	}

	public function	testDeductHealth(){
	
		$Bee = new WorkerBee();
		$prevHealth = $Bee->GetHealth();
		$Bee->GenerateDamage();
		$this->assertEquals(10, $prevHealth - $Bee->GetHealth());

	}
}

















?>
