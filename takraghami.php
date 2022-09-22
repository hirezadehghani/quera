<?php

// $num = readline('');
$num = 1;

// echo Count_int($num);


    $array [] = 0;
    $i=0;
    $array[$i] =  sum($num);

var_dump($array);

//     while(Count_int($array[$i]) != 1)
//     {
//     $array[$i] =  sum($num);
    

//     if(Count_int ($array[$i]) == 1)
//     {
//         echo "final". $array[$i];
//         break;
//     }
//     $i++;
// }



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

function sum($num)
{
$res = 0;
while($num != 0)
{
    $res += $num%10;
}
return $res;
}