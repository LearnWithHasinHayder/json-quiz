<?php 
$person = [
    'name' => 'John Doe',
    'age'=>26,
    'email'=>'john@doe.com'
];

$json = '{"name":"John Doe","age":26,"email":"john@doe.com"}';

$personJson = json_encode($person);
$personArray = json_decode($json, true);

// echo $personArray['name'];
print_r($personArray);

// echo $personJson;