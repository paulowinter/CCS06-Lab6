<?php

$name = $argv[1];
$birthYear = $argv[2];

$age = date("Y") - $birthYear;

if ($age >=  18){
    $voter = "You are a voter";

}
else if ($age >= 60){
    $senior = "You are a senior citizen";

}

echo "Your name is $name, and your age is $age years old\n";
echo "$voter\n";
echo "$senior\n";
?>