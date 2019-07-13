<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Page Title</title>
</head>
<body>
    
    <?php
    $nome= $_POST['nome'];
    $comida= $_POST['refeicao'];
    $sabor= $_POST['sabor'];
    print "Obrigado pela sua atenção, $nome.";
    ?>

    <hr>

    <?php
    print "Você realmente aprecia $comida, especialmente com um vinho $sabor.";
    ?>

</body>
</html>
