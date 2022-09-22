<?php

$rc = readline('');
// $chair = readline('');

$chair = intval($rc%10);
$radif = intval($rc/10);

// $radif = 4;
// $chair = 15;

if($chair <= 10 && $chair >= 1)
    $jahat = "Right";
else
    $jahat = "Left";

// khoroji : a = radif , b = chair

$a = 11-$radif;

if($jahat == "Left")
$b = 21-$chair;
elseif ($jahat = "Right")
$b = 0+$chair;

echo $jahat. " ". $a. " ". $b;
?>