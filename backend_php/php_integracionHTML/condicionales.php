<?php
$se_hablo_de_bruno = true;
?>
<html>

<head>
    <title>Condicionales</title>
</head>

<body>
    <!--Esto no se debe hacer---->
    <h1>Esto no se debe hacer</h1>
    <?php
    if ($se_hablo_de_bruno) {
        echo "<b>esta condicional es verdadera</b></br>";
    } else {
        echo "<b>esta condicional es falsa</b></br>";
    } ?>
    
    
    <!--Esto es aceptable Pero hasta un punto---->
    <h1>Esto es aceptable</h1>
    <?php if ($se_hablo_de_bruno) { ?>
        <b>esta condicional es verdadera</b></br>
    <?php } else { ?>
        <b>esta condicional es falsa</b></br>
    <?php   } ?>

    <!--Esto si deberias hacer--->
    <h1>Esto si deberias hacer</h1>
    <?php if ($se_hablo_de_bruno) : ?>
        <b>esta condicional es verdadera :O</b></br>
    <?php else : ?>
        <b>esta condicional es falsa :D</b></br>
    <?php endif; ?>



</body>

</html>