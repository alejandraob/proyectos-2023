<?php
//Fácil
$nombre = "Carlos";
$apellido = "Gómez";
$edad = 18;
$aprobado = true;

//Medio
$promedio = (8 + 9.5 + 9 + 10 + 8) / 5;
$nombre_completo = $nombre . " " . $apellido;
$presento_examen = (bool) 1;
echo $promedio."\n";
echo $nombre_completo."\n";
echo $presento_examen."\n";

//Avanzado
$numero_preguntas = 5 + "5";
$numero_respuestas = "5" + 5;
$promedio_maximo = $numero_respuestas / 1.0;
$michis = 3 + "5 michis";

echo $numero_preguntas."\n";
echo $numero_respuestas."\n";
echo $promedio_maximo."\n";
echo $michis."\n";

?>