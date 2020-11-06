<?php  

// array sort

echo "<h1>Array Sort</h1>";

$pl=["Python","Java","PHP","JavaScript","C","C++"];

// sort(array)=>array order by ascending
// rsort(array)=>array order by descending


// sort($pl);

rsort($pl);

foreach ($pl as $key => $value) {
	echo $value."<br>";
}



// asort(array)=>associative array order ascending by value
// ksort(array)=>associative array order ascending by key


$foods=[
	'breakfast'=>'Mohingar',
	'lunch'=>'Burmese Rice and Curry',
	'dinner'=>'Mala Xianguo'
];

// asort($foods);

// ksort($foods);

// arsort($foods);
krsort($foods);

foreach ($foods as $key => $value) {
	echo $key." and ".$value."<br>";
}




?>