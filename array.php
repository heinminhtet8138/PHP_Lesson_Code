<?php  
// Array

// index array

$laptops=array("Apple","Dell","Acer","Lenovo","HP","Asus");
print_r($laptops);

echo "<br>";

$fruits=["Apple","Orange","Mango"];
print_r($fruits);

echo "<br>";

$actors=[];
$actors[0]="Nay Toe";
$actors[1]="Pyay Ti Oo";
$actors[2]="Daung";

print_r($actors);
echo "<br>";
echo $actors[2];


echo "<br>";


// Associative Array
$alphabet=[
	"A"=>1,
	"B"=>2,
	"C"=>3,
	"Z"=>26
];
print_r($alphabet);
echo "<br>";


$students=["name"=>"Mg Mg","email"=>"mgmg@gmail.com","phone"=>"09876543121"];
print_r($students);
echo "<br>";

echo $students["email"];


?>