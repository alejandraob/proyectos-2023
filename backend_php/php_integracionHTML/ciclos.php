<?php
    $usuarios=["Michi", "Rata", "Perro"];
?>
<html>
<head>
    <title>Ciclos</title>
</head>

<body bgcolor="#8fc">
    <h3>Por for</h3>
    <ul>
        <?php for ($i = 0; $i < 10; $i++) : ?>
            <li>
                <h3><?= $i ?></h3>
            </li>
        <?php endfor; ?>
    </ul>
    <h3>Por While</h3>
    <ol>
        <?php
        $x = 0;
        while ($x < 10) : ?>
            <li>
                <h3><?= $x ?></h3>
            </li>
        <?php
            $x++;
        endwhile; ?>
    </ol>
    <h3>Por Foreach</h3>
    <ul>
        <?php foreach ($usuarios as $username): ?>
            <li><?= $username ?></li>
        <?php endforeach; ?>
    </ul>
</body>

</html>