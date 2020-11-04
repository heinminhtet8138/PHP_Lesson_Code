<?php  

echo "<h1>Date</h1>";

echo "Today date is ".date("Y-m-d")."<br>";
echo "Today date is ".date("Y.M.D")."<br>";
echo "Today date is ".date("d.m.y")."<br>";
echo "Today date is ".date("d/m/y")."<br>";
echo "Today date is ".date("Y M,d")."<br>";

echo "Today is ".date("l")."<br>";

echo "<h1>Time</h1>";
echo "The time is ".date("h:i:sa")."<br>";

date_default_timezone_set("Asia/Yangon");
echo "Yangon time is ".date("h:i:sa")."<br>";

echo "<h1>String to Time</h1>";

$tomorrow=strtotime("tomorrow");
echo "$tomorrow<br>";
echo "Tomorrow is ".date("d.m.Y",$tomorrow)."<br>";

$sat=strtotime("next Saturday");
echo "Saturday is ".date('d.m.Y',$sat)."<br>";

$two=strtotime("+2 weeks");
echo "Comming 2 Weeks is ".date('d.m.Y',$two)."<br>";


?>