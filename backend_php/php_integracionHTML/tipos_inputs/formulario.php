<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de input</title>
</head>
<body>
    
    <form action="server.php" method="post" enctype="multipart/form-data">
        <!-- Input simple -->
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre"></br>
        <!-- Arreglos -->
        <h4>Arreglo</h4>
        <label>Personas:</label>
        <input type="text" name="personas[]"></br>
        <input type="text" name="personas[]"></br>
        <input type="text" name="personas[]"></br>
        <!-- Arreglos asociativos -->
        <h4>Arreglo Asociativo</h4>
        <label>Nombre de la persona:</label>
        <input type="text" name="persona[nombre]"></br>
        <label>Correo de la persona:</label>
        <input type="email" name="persona[email]"></br>
        <label>Edad de la persona:</label>
        <input type="number" name="persona[edad]"></br>
        <!-- Checkbox -->
        <input type="checkbox" name="list1">
        <input type="checkbox" name="list2" value="Este valor fue clicado">
        <input type="checkbox" name="list3"></br>
        <button type="submit">Mandar formulario</button>
    </form>
</body>
</html>