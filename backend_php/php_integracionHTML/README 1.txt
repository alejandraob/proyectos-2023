Client Side Rendering (CSR): El navegador del cliente arma la estructura de la página web con JavaScript
Static Side Generation (SSG): La página web se construye al momento del build o compilación de la aplicación.
Sever Side Rendering (SSR): El servidor se encarga de procesar y generar la página web


------------
ALGUNOS ATAJOS DE VSC PARA WINDOWS

Para comentar codigo desde windows, posicionarse en la linea o lineas a comentar y presionar Ctrl + }

Para mover una o varias lineas de código Alt + ⬆

Para copiar una o varias lineas de código Alt + Shift + ⬆

Para tener multiples cursores (cambiar al mismo tiempo varios valores) mantener presionado Alt mientras seleccionas la ubicacion del nuevo cursor

Para seleccionar varios valores iguales, selecciona y presiona Ctrl + d (varias veces segun la cantidad que necesites modificar)


------------------
Hay varias maneras de sanitizar datos de formulario en PHP para evitar ataques de inyección de código y proteger la seguridad de la aplicación.
A continuación, se presentan algunas opciones:

Utilizar la función htmlspecialchars(): esta función convierte caracteres especiales en entidades HTML, evitando así que se interpreten como código. 
Por ejemplo: $name = htmlspecialchars($_POST[‘name’]);

Utilizar la función strip_tags(): esta función elimina todas las etiquetas HTML y PHP de una cadena, lo que impide que se ejecute código malicioso. 
Por ejemplo: $comment = strip_tags($_POST[‘comment’]);

Utilizar la función intval(): esta función convierte una variable en un entero y elimina cualquier valor no numérico. 
Por ejemplo: **$id = intval($_POST[‘id’]);
**

Utilizar la función filter_var(): esta función permite filtrar una variable a través de diferentes tipos de filtros, 
como filtros de correo electrónico, URL o entero. Por ejemplo: $email = filter_var($_POST[‘email’], FILTER_SANITIZE_EMAIL);

Utilizar expresiones regulares: las expresiones regulares (regex) son una herramienta muy potente para validar 
y sanitizar datos de formulario. Por ejemplo, para permitir solo números y letras en un campo de texto, 
se puede utilizar la siguiente expresión regular: /^[a-zA-Z0-9]+$/

Es importante tener en cuenta que la sanitización de datos no es suficiente en sí misma para proteger la 
aplicación de ataques de inyección de código. También es necesario validar los datos de formulario para 
asegurarse de que cumplen con los requisitos de la aplicación y utilizar consultas preparadas y parámetros con marcadores para 
proteger las consultas a la base de datos.

//////////////////////////
https://fontawesome.com/
https://packagist.org/packages/phpmailer/phpmailer


//////////////////
A quienes no les llegue el mail a Gmail agreguen “use PHPMailer\PHPMailer\SMTP;” abajo de “use PHPMailer\PHPMailer\PHPMailer;” en su archivo mail.php 😃

Les dejo el repo para que lo consulten:
https://github.com/PHPMailer/PHPMailer



/////////////////////



