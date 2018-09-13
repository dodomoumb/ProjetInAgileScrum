
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href= "exo1.css" type = "text/css">
</head>
<body>
    
</body>
</html>


<?php

$x = 155;
$test = 0;
$rand = -1;


     while ( $rand != $x)
     {
        $rand = rand(0, 1000);
        $test ++;
     } 

     if ($rand == $x) {
    ?>
             <br>
             <div class ="exo1" > 
                 <p> 
                  <?php echo $test . ' fois '. $rand; ?>
                 </p>
              </div> 
        <?php     
     }
   else  echo $test . ' fois '. $rand. '<br>';

    

?>