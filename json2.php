<?php 
$personData = file_get_contents('data/person.json');
$person = json_decode($personData, true);
echo $person['name'];