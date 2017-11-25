<?php

/*
$lijstje = array();
$lijstje[0] = 2;
$lijstje[1] = 3;
$lijstje[2] = 1;
$lijstje[3] = 6;

function gemiddelde($array) {
    $som = 0;
    $teller = 0;
    foreach ($array as $waarde) {
    $som = $som + $waarde;
    $teller++;
    
    }
    $gemiddelde = $som / $teller;
    return $gemiddelde;
}


$gem = gemiddelde($lijstje);
print($gem); 

*/

$lijstje = array(1,2,3,4);

function draaiom($array) {
   $midden = count($array)/2;
   
    }

$draaiom = draaiom($lijstje);
print_r($draaiom);

//resultaat: 3 4 1 2