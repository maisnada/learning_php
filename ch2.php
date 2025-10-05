<?php


//integer
$age = 20;

//check is number is integer
if(is_int($age)){

  echo "Age is type integer" . PHP_EOL;
}

//begin 0x to values in hexadecimal. Output 65 (value in decimal)
echo 0x41.PHP_EOL;
      
//string
$status = "OK";

echo "Status is {$status}" . PHP_EOL;

//Double quotes allow interpolated, but sigle not
echo 'Status is TRUE ' . PHP_EOL;

//float
$pi = 3.14;

if(is_float($pi)){

  echo "Value PI is float" . PHP_EOL;
}

//boolean
$isBool = true;

//array
$cars = array('Ford', 'GM');

foreach($cars as $car){

  echo $car . PHP_EOL;
} 

$fruts = array(0 => 'Orange', 1 => 'Melon');

for($i = 0; $i < count($fruts); $i++){

  echo "Frut position {$i} is {$fruts[$i]}" . PHP_EOL;
} 

//objetcs
/*class Person{

private $name = '';

}

$person = new Person();
$person->method or properties:

 */



//Constant value
define('NAME', "ROSA");

echo "Name is ". NAME . PHP_EOL;
