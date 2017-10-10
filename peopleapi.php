<?php

class Person {

var $PersonID;
var $FirstName;
var $LastName;

}

$items = array();

for($i = 1; $i < 10; $i++) {
$personRecord = new Person();
$personRecord->PersonID = $i;
$personRecord->FirstName = "Name $i";
$personRecord->LastName = "LastName $i";
$items[$i] = $personRecord;
}

header('Content-Type: application/json');

$jsonOutput = json_encode($items);

echo $jsonOutput;

?>
