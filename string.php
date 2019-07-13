<!doctype <!DOCTYPE html>
<html>
<head>
    
    <meta charset="utf-8" />
    <title>Page Title</title>
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />

</head>
<body>
    
<?php
    $texto=$_POST['texto'];
    $opcao= $_POST['opcao'];
    
    $tamanhotexto= strlen ($texto);
    $inversotexto= strrev ($texto);
    $maiuscula= strtoupper ($texto);
    $minuscula= strtolower ($texto);
    $inicialmaiuscula= ucwords($minuscula);
    if($opcao=='tamanho'){
        print "Tamanho do texto: $tamanhotexto";
    }
    elseif($opcao=='inverter'){
        echo $inversotexto;
    }
    elseif($opcao=='maiuscula'){
        echo $maiuscula;
    }
    elseif($opcao=='minuscula'){
        echo $minuscula;
    }
    elseif($opcao=='inicialmaiuscula'){
        echo $inicialmaiuscula;
    }
?>

</body>
</html>
