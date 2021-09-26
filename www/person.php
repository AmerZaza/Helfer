<?php
include "connect.php";
include "functions.php";

$persons = superGet("*", "Person");


$myJSON = json_encode($persons);

//$myJSON = "{'name':'amer'}";

echo $myJSON;
?>