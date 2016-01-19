<?php

include ("html".DIRECTORY_SEPARATOR."DroneBee.php");

function __autoload($class_name){

}

class DroneBeeTest extends PHPUnit_Framework_TestCase{
	
	
	public function testBeeCreation(){
	
       		 $Bee = new DroneBee();
	 	 $this->assertEquals(50, $Bee->GetHealth());	
		 $this->assertEquals(12, $Bee->GetDamage());
	}
			
	
	public function testCheckClass(){

		$Bee = new DroneBee();
		$this->assertEquals("drone", $Bee->GetClass());
	
	
	}
	

	public function testGetColor(){

		$Bee = new DroneBee();	
		$this->assertEquals("Orange", $Bee->GetColor());
	
	
	}
	
	public function	testGetDamage(){
	


	}

	public function	testDeductHealth(){
	
		$Bee = new DroneBee();
		$prevHealth = $Bee->GetHealth();
		$Bee->GenerateDamage();
		$this->assertEquals(12, $prevHealth - $Bee->GetHealth());

	}
}

















?>
