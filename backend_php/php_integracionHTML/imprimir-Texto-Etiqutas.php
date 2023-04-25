<?
$nombre="Michi";
?>
<html>
<head>
    <title>Imprime texto y etiquetas con PHP</title>
</head>
<body>
<?php 

echo "<b>Hola! esoty aprendiendo a integrar php con html</br>";
?>
<?= "<i>Esta es otra forma de guardar texto en html</i>";

?>

<h1>Hola <?= $nombre?></h1>
</body>
</html>