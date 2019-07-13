<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Page Title</title>
</head>
<body>
    <h3> Seletor de cores interativo <h3>
        
        <?php
        $r = $_POST['r'];
        $g = $_POST['g'];
        $b = $_POST['b'];
        $rgb = $r . ',' . $g . ',' . $b;
        ?>

        R: <?php echo $r; ?>
        G: <?php echo $g; ?>
        B: <?php echo $b; ?>
        
        <br>
        <br>

<div style="width:150px; height: 150px; background-color: rgb(<?php echo $rgb; ?>)"/></div>

</body>
</html>
