<?php

function fact($f){
    if($f == 1 || $f == 0)
        return 1;
    else
    return $f*fact(($f-1));
}

$a = readline('');
// $a = 3;
// $res = $a;

echo fact($a);
// for($i = 1; $i < $a ; $i++)
// {
//     $res *= ($a-1);
// }
// echo $res;
?>