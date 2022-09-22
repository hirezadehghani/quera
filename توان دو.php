<?php

// $in = readline('');
$in = 95;
$tavan = 1;

for ($i =2 ; $tavan <= $in ; $i++)
{
    if($tavan > $in)
        echo $tavan;
    else
    {
        $tavan = $tavan **$i;
    }
}