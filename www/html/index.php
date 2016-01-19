
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <!--
    Modified from the Debian original for Ubuntu
    Last updated: 2014-03-19
    See: https://launchpad.net/bugs/1288690
  -->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title></title>
    <style type="text/css" media="screen">
  * {
    margin: 0px 0px 0px 0px;
    padding: 0px 0px 0px 0px;
  }
/*
  */ 
    </style>
  </head>
  <body>
    <div class="main_page">
      <div class="page_header floating_element">
        <img src="/icons/ubuntu-logo.png" alt="Ubuntu Logo" class="floating_element"/>
        <br>
	<span class="floating_element">
	<br>
        </span>
      </div>
<!--      <div class="table_of_contents floating_element">
-->

      </div>
    </div>
    <div class="validator">
    </div>
  </body>
</html>



<?php



error_reporting(E_ALL);

require_once "QueenBee.php";
require_once "DroneBee.php";
require_once "WorkerBee.php";

function kill_all($BeesArray){
	foreach ($BeesArray as $key=>$value){
		$value->kill_();	

	}	
}


function draw_page($BeesArray){
?>


<html>
<body>
<table>
<form method = "POST" action = "index.php">
<tr>
<?php
foreach ($BeesArray as $key => $value) {
?>



<td>

<div style = "width:35px; height:35px; background-color: <?= $value->GetColor() ?>"> 

<?= $value->GetHealth()?>

</div>
</td>


<?php
}
?>
</tr>

<tr>

<td><input style = "width:35px;" type = "submit" name = "hit" value = "hit!!!"></td>

<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><input type = "submit" name = "reset" value = "reset"></td>


</tr>
</table>
</body>
</html>
</form>



<?php

echo "                "; 

}



session_start();

if (isset($_POST["hit"])) {

	$d = count($_SESSION);
	draw_page($_SESSION["ar"]);
	$hh = $_SESSION["ar"][array_rand($_SESSION["ar"])]->GenerateDamage();
	if ($hh == "End") {
		kill_all($_SESSION["ar"]);
	}else{
		die;	
	}
}





$BeesArray = array();

$BeesArray[] = new QueenBee;


for ($i = 0; $i < 5; $i++){

	$BeesArray[] = new WorkerBee;
}

for ($i = 0; $i < 8; $i++){
	$BeesArray[] = new DroneBee;	
	
}
?>

<html>
<body>
<table>
<form method = "POST" action = "index.php">
<tr>
<?php
foreach ($BeesArray as $key => $value) {
?>



<td>

<div style = "width:35px; height:35px; background-color: <?= $value->GetColor() ?>"> 

<?= $value->GetHealth()?>

</div>
</td>


<?php
}
?>
</tr>

<tr>

<td><input style = "width:35px;" type = "submit" name = "hit" value = "hit"></td>

<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><input type = "submit" name = "reset" value = "reset"></td>


</tr>
</table>
</body>
</html>
</form>
<?php


$_SESSION["ar"] = $BeesArray;


?>

