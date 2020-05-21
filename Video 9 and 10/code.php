<?php

$x = 10;

echo ($x+10)*100;

echo "<br>";

$x = "Helloz";

echo $x." there!";

echo "<br>";

if($x=="Hello"){
	echo "Hi";
}else{
	echo "Not hello";
}

echo "<br>";

if(strlen($x)>5){
	echo "It's longer than 5";
}

echo "<br>";


for($i = 0; $i < 10; $i++){
	
	echo "i = ".$i."<br>";
	
	if($i%2==0){
		echo "i is Even <br>";
	}
	
}

$a = array("We","Are","Learning","Arrays");

var_dump($a);

$b = array(
	"type"=>"Sedan",
	"brand"=>"Toyota",
	"price"=>19000
);

echo "<br>";

var_dump($b);

echo "<br>";

echo $b["type"];

echo "<br>";

foreach($b as $key=>$value){
	echo $key." ".$value."<br>";
}

$c = array(
	"type"=>"Hatch",
	"brand"=>"Mazda",
	"price"=>25000
);

$cars = array($b,$c);

echo "<br>";

var_dump($cars);

echo "<br>";

foreach($cars as $car){
	echo $car['type']." ".$car['brand']."<br>";
}



?>