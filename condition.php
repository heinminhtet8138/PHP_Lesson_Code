<?php  

	// if condition

	// one condition
	
	$x=20;
	$y=20;

	if ($x==$y) {
		echo "<h1>X and Y are equal</h1>";
	}

	// Two condition
	date_default_timezone_set("Asia/Yangon");
	$t=date("H");
	
	if ($t==12) {
		echo "<h3>Break Time</h3>";
	}else{
		echo "<h3>Lecture Time</h3>";
	}

	// many condition

	$d=date("D");

	if ($d=="Mon") {
		echo "<h3>This Day is Monday.</h3>";
	}elseif ($d=="Tue") {
		echo "<h3>This Day is Tuesday.</h3>";
		
	}elseif ($d=="Wed") {
		echo "<h3>This Day is Wednesday.</h3>";
		
	}elseif ($d=="Thu") {
		echo "<h3>This Day is Thursday.</h3>";
		
	}elseif ($d=="Fri") {
		echo "<h3>This Day is Super Friday.</h3>";
	}else{
		echo "<h3>This Day is Holiday.</h3>";

	}

	// Switch Condition

	$z=3;

	switch ($z) {
			case 1:
				echo "<h3>This is case No 1.</h3>";
				break;
			case 2:
				echo "<h3>This is case No 2.</h3>";
				
				break;

			case 3:
				echo "<h3>This is case No 3.</h3>";
				break;
			
			default:
				echo "<h3>This is default.</h3>";
				break;
		}	

?>