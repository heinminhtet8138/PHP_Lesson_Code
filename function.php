<?php  
	
	// function
	function myName() {
		echo "<h3>Hein Min Htet</h3>";
	}

	myName();

	// argument fucntion

	function myBrother($value1="Mg Mg",$value2=30){
		echo $value1." and ".$value2;
	};

	$bro="Aung Aung";
	$age=32;
	myBrother($bro,$age);

	echo "<br>";


	// function with array argument
	function arrFun($array){
		echo $array[0]+$array[1];
	}

	$arr=[200,300];

	arrFun($arr)


	


?>