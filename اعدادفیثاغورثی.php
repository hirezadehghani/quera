<?php

$adad[] = readline('');
// $adad = [3,4,5];
intval($adad);

// echo count($adad);

for ($i=0 ; $i< Count($adad); $i++)
{
    $adad[$i] **= 2;
}

$count = 0;

if($adad[0] == $adad[1]+$adad[2] || $adad[1] == $adad[2]+$adad[0] || $adad[2] == $adad[0]+$adad[1])
    echo "YES";
else
    echo "NO";

// print_r ($adad);