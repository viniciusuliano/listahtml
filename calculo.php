<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Page Title</title>
</head>
<body>
    
    <?php
        $n1= $_POST['valor1'];
        $n2= $_POST['valor2']; 
        
        $opcao= $_POST['opcao'];
        if($opcao=='adicionar'){
            $calculo= $n1+$n2;
        }
        
        elseif($opcao=='subtrair'){
            $calculo= $n1-$n2;
        }
        elseif($opcao=='multiplicar'){
            $calculo= $n1*$n2;
        }
        elseif($opcao=='dividir'){
            $calculo= $n1/$n2;
        }
        print "Resultado do cálculo: $calculo";
    ?>

</body>
</html>
