<!-- Snack C
Creare un array con 15 numeri casuali, 
tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta. -->

<!-- SVOLGIMENTO -->
<?php
$numArray=[];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SnackC</title>
</head>
<body>
    <?php
    
    while (count($numArray) < 15) {
        $num = rand(0,100);
        if(!in_array($num,$numArray)){
            $numArray[] = $num;
        }
    }
    var_dump($numArray);
    ?>
    
</body>
</html>