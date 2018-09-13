
<?php

$x = 155;



     $test = 0;

     while ($test == 0)
     {
        $rand = rand(0, 1000);
       echo $rand;
       echo ('<br>');
       if ($rand == $x ) 
        {
           
            $test = 1;
    } 
     }

?>