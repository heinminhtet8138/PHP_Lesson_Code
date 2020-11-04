<?php  
	
	$name="Hein Min Htet";
	$address = "Mandalay";

	echo $name;
	echo $address;

	echo "<br>";

	echo "My Name is ".$name;
	echo "<br>";

	echo $name." Live in ".$address;
	echo "<br>";

	echo "My name is $name";
	echo "<br>";
	echo 'My name is $name';
	echo "<br>";

	$firstname="Ye";
	$lastname="Lay";

	echo $firstname.$lastname;
	echo "<br>";

	//.=

	echo $firstname."<br>";

	$firstname.=$lastname;
	echo $firstname;
	echo "<br>";

	//trim(str)=>remove begining space and end space of string

	$actor=" May La Thansin ";
	echo "My favrious acotr is".$actor."<br>";
	echo "My favrious acotr is".trim($actor)."<br>";


	// strlen(string)=> count string length
	$singer="Phyo Pyae Sone";
	echo strlen($singer)."<br>";

	// gettype(var)=>type of variable
	$num=12;
	$bol=true;
	echo '$num type is '.gettype($num)."<br>";
	echo '$bol type is '.gettype($bol)."<br>";

	// strtolower(str)=>change to lowercase
	$name="Hein Min Htet";
	echo strtolower($name)."<br>";

	// strtoupper(string)=>change to uppercase
	echo strtoupper($name)."<br>";

	// strcasecmp(str1, str2) => compare two string
	// if result is 0, string 1 and string are equal
	// if result is < 0 , string 1 less than string 2
	// if result is > 0 , string 1 greater than string 2
	echo strcasecmp("Hello", "Hello Bootcamper")."<br>";
	echo strcasecmp("Hello Member", "Hello Accs")."<br>";

	// substr(string, start)=> cut string
	$text="I go to Mandalay";
	echo substr($text, 8,2)."<br>";

	echo substr($text, -5)."<br>";


	// str_replace(search, replace, subject)=>string replace

	$str="Hello Mandalay";
	echo $str."<br>";
	echo str_replace("Mandalay", "Smart City", $str)."<br>";


?>