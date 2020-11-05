<?php  
	
	// for loop
	
	$a=0;
	$b=0;

	for ($i=0; $i < 15; $i++) { 
		$a += 10;
		$b += 5;
	}

	echo "<h3>The looping end is a=".$a." and b=".$b."</h3>";

	// While Loop
	$j=0;
	$num=50;
	while ( $j < 10) {
		$num--;

		$j++;
	}

	echo "<h3>Looping stop at j=".$j." and num=".$num."</h3>";



	// Do While Loop

	$k=10;
	$n=50;

	do{

		$n++;

		$k++;

	}while ( $k < 10);

	echo "<h3>Looping stop at k=".$k." and n=".$n."</h3>";


	// foreach loop
	$laptops=array("Apple","Dell","Lenovo","HP","Acer","Asus");

	foreach ($laptops as $key => $value) {
		echo "<h3>Key is ".$key." and Value is ".$value."</h3>";

	}


?>