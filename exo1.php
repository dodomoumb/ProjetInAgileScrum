
<?php

$x = 155;
$test = 0;
$rand = -1;


     while ( $rand != $x)
     {
        $rand = rand(0, 1000);
        $test ++;
     } 
     echo $test . ' fois '. $rand. '<br>';

?>