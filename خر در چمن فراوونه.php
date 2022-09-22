<?php

// $ar = readline('');

function sum($a, $b, $ar)
{
    $res = 1;

        while($ar != 0)
        {
            if($ar % 2 != 0){
                $t_a = intval($ar/2) +1;
                $t_b = intval($ar/2);

                $res = $t_a*$a + $t_b*$b; 
            }
            elseif ($ar %2 ==0){
                $t_a = $t_b = intval($ar/2);

                $res = $t_a*$a + $t_b*$b; 
            }
        return $res;    
        }
    }

    $input = readline($input);
// $input = "10 3 2";
$input = explode(" ", $input);
$ar = $input[2];
$a = $input[0];
$b = $input[1];

echo sum($a, $b, $ar);
