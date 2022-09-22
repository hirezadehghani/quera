<?php

$weekdays = ["shanbe","1shanbe","2shanbe","3shanbe","4shanbe","5shanbe","jome"];


$in1 = readline('');
$arr1 = readline('');

$in2 = readline('');
$arr2 = readline('');

$in3 = readline('');
$arr3 = readline('');

$arr1 = explode(" ", $arr1);
$arr2 = explode(" ", $arr2);
$arr3 = explode(" ", $arr3);

$all = array_merge($arr1, $arr2, $arr3);

foreach($all as $a)
{
    $k = array_search($a, $weekdays);   
    unset($weekdays[$k]);
}

echo Count($weekdays);