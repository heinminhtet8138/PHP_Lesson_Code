<?php  

	
	// unset(var)
	$alphabet=["a","b","c","d"];

	print_r($alphabet);
	echo "<br>";


	unset($alphabet[2]);
	print_r($alphabet);
	echo "<br>";


	// array_key_exists(key, array)
	$arr1=["Apple"=>300,"Orange"=>200,"Banana"=>250];

	if (array_key_exists("Banana", $arr1)) {
		echo "Array Key Exists...<br>";
	}else{
		echo "Array Key does't Exists..<br>";
	}

	// in_array(needle, haystack)
	if (in_array(400, $arr1)) {
		echo "Array Value Exists...<br>";	
	}else{
		echo "Array Value does't Exists..<br>";

	}



	// implode(glue, pieces)=>Conver Array to string
	// explode(delimiter, string)=>Conver string to array

	$actors=["Nay Toe","Pyay Ti Oo","Myint Myat","Daung","Paing Ta Khun"];

	$actors_str=implode(",", $actors);

	echo $actors_str."<br>";

	$actors_arr=explode(",", $actors_str);
	print_r($actors_arr);
	echo "<br>";

	$str="https://youtu.be/3jLjYH5nvfc";
	$arr=explode("/", $str);
	print_r($arr);
	echo "<br>".$arr[3];






?>