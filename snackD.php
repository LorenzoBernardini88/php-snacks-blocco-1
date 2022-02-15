<!-- Snack D
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. 
Prendere il paragrafo e suddividerlo in tanti paragrafi.
Ogni punto un nuovo paragrafo. -->

<!-- SVOLGIMENTO -->
<?php
    $stringa = "Tu non puoi passare! Sono un servitore del fuoco segreto e reggo la fiamma di Anor! 
                Il fuoco oscuro non ti servirà a nulla, fiamma di Udun! Ritorna nell'ombra!  Tu non puoi passare!";
    $nuovaStringa = explode('!',$stringa);
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
    <p>STRINGA INTERA:</p>
    <p><?php echo $stringa; ?></p>
    <p>STRINGA DIVISA:</p>
    <p><?php echo "<pre>"; var_dump($nuovaStringa); echo "</pre>" ?></p>
</body>
</html>