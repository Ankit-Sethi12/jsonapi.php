<?php

class Person {

var $person ID;
var $First Name;
var $Last Name;

}

$items = array();

for($i = 1; $i < 10; $i++) {
$personRecord = new Person();
$personRecord->Person ID = $i;
$personRecord->First Name = "Name $i";
$personRecord->Last Name = "Last Name $i";
$items[$i] = $personRecord;
}

header('Content-Type: application/json');

$jsonOutput = json_encode($items);

echo $jsonOutput;

?>
