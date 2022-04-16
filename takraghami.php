<?php

// $num = readline('');

$num = ($num);
PHP_MAX_INT();

echo Count_int($num);

// echo "num".$len;




function Count_int($num)
{
    $len = 1;
    while($num != 0)
    {
        $num = intval($num/10);
        $len++;
    }
    return $len;
}
