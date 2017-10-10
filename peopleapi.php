<?php

class person {

var $personID
var $firstname
var $lastname

}

$items = array()

For($i = 0; $i<10; $i++) {
$personRecord = new person();
$personRecord->personID = $i;
$personrecord->firstname = "Name $i";
$personrecord->lasttname = "LastName $i";
$items[$i] = $personRecord;

}
header('content-Type: application/json');
$jsonoutput = json_encode($items);
echo $jsonOutput;
