<?php

$a = readline('');
// $a = 101;

// switch($a)
// {
//     case $a > 100:
//         {
//             echo "Steam";
//             break;
//         }
//     case $a < 0:
//     {
//         echo "Ice";
//         break;
//     }
//     case $a >= 0 && $a <= 100 || $a == 0:
//         {
//             echo "Water";
//             break;
//         }

// }

if($a < 0) echo "Ice";
elseif ($a > 100) echo "Steam";

else 
echo "Water";
?>