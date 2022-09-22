<?php

$input = readline('');

// $a[];
$i=0;
while($input != 0)
{
    $a[$i] = $input;
    $i++;
}
var_dump($a);
if ($input == 0)
    {
        for ($j = 0; $j < $a[$i]; $j++)
        {
            echo $a[$j]. "\n";
        }
        
    }