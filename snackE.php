<!-- Snack E
Creare un array contenente qualche alunno di un’ipotetica classe. 
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<!-- SVOLGIMENTO -->
<?php
$classe = [
    [
        'nome'=> 'Lorenzo',
        'cognome' => 'Programma Satelliti Osnago',
        'voti' => ['10', '10', '10', '11', '15']
    ],
    [
        'nome'=> 'Simone',
        'cognome' => 'Massaro Lo Fanno',
        'voti' => ['2', '2', '1', '1', '1']
    ],
    [
        'nome'=> 'Guido',
        'cognome' => 'La Barca',
        'voti' => ['3', '4', '7', '9', '4']
    ],
    [
        'nome'=> 'Milan',
        'cognome' => 'Serbo Polemico',
        'voti' => ['9', '9', '9', '10', '10']
    ],
    [
        'nome'=> 'Walter',
        'cognome' => 'Il Mago',
        'voti' => ['6', '2', '6', '5', '7']
    ],
    [
        'nome'=> 'Matteo',
        'cognome' => 'Pompei Incredibile Impressionante',
        'voti' => ['6', '10', '8', '9', '7']
    ],
]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SnackD</title>
</head>
<body>
    <?php
    for($i=0; $i<count($classe); $i++){
        $media = array_sum ($classe[$i]['voti']) / count ($classe[$i]['voti']).'<br>';
        echo $classe[$i]['nome'].'-'.$classe[$i]['cognome'].'<br>'.'Media Voti:'.$media.'<br>';
    }
    ?>
</body>
</html>