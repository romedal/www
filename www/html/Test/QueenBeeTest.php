<?php


include("html".DIRECTORY_SEPARATOR."QueenBee.php");



class QueenBeeTest extends PHPUnit_Framework_TestCase{
	
	
	public function testQueenBeeCreation(){
	
       		 $Bee = new QueenBee();
	 	 $this->assertEquals(100, $Bee->GetHealth());	
		 $this->assertEquals(8, $Bee->GetDamage());
	}
			
	
	public function testGetColor(){
		$Bee = new QueenBee();	
		$this->assertEquals("Red", $Bee->GetColor());
	
	
	}
	public function testGetClass(){

		$Bee = new QueenBee();
		$this->assertEquals("queen", $Bee->GetClass()); 
	}	
	
	public function	testDeductHealth(){
	
		$Bee = new QueenBee();
		$prevHealth = $Bee->GetHealth();
		$Bee->GenerateDamage();
		$this->assertEquals(8, $prevHealth - $Bee->GetHealth());

	}

}

















?>
