<?php //php 7.0.8

$x = [3, 4, 300, 10, 4, 1, 0, 999, -123, 76, 102];
$rez = 0;

function findMaxNumber() {
    global $x, $rez;
    for ($i = 0; $i < sizeOf($x); $i++) {
        if ($rez < $x[$i]) {
            $rez = $x[$i];
        }
    }
    echo $rez;
}


findMaxNumber();
    
?>
