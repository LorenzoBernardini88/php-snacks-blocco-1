<!-- Snack A
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, 
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<!-- SVOLGIMENTO -->
<?php 
    $partite =[
        [
            'squadra1' => 'Roma',
            'squadra2' => 'Lazio',
            'punti_squadra1' => 30,
            'punti_squadra2' => 36,
        ],
        [
            'squadra1' => 'Empoli',
            'squadra2' => 'Fiorentina',
            'punti_squadra1' => 56,
            'punti_squadra2' => 70,
        ],
        [
            'squadra1' => 'Juve',
            'squadra2' => 'Torino',
            'punti_squadra1' => 21,
            'punti_squadra2' => 45,
        ],
        [
            'squadra1' => 'Inter',
            'squadra2' => 'Milan',
            'punti_squadra1' => 10,
            'punti_squadra2' => 89,
        ],
        [
            'squadra1' => 'Geonoa',
            'squadra2' => 'Sampdoria',
            'punti_squadra1' => 32,
            'punti_squadra2' => 40,
        ],
        
    ]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    for( $i=0; $i<count($partite); $i++){
        echo $partite[$i]['squadra1'].'-'.$partite[$i]['squadra2'].'/'.
        $partite[$i]['punti_squadra1'].'-'.$partite[$i]['punti_squadra2'].'<br>';
    }
    ?>
</body>
</html>


