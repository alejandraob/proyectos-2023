<?php
//inculimos las rutas de las clases que se encuentran por separado
include_once "ClassAdmin.php";
include_once "ClassPersona.php";
include_once "User";

//en la variable user, la instanciamos con el objeto de User
$use=new User;

//A la variable user, ahora le asignamos el valor del tipo de Administador del objeto Admin
$user->type=new Admin;

// mostramos el mensaje
echo $user->type->greet();
