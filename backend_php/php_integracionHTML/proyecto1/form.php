<?php
function validate($name, $email, $subject, $message, $enviar){
    return !empty($name) && !empty($email) && !empty($subject) && !empty($message);

}
$status="";
if(isset($_POST["enviar"])){
    if(validate(...$_POST)){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $subject=$_POST['subject'];
        $message=$_POST['message'];

        //mandar mail
        $status="success";

    }else{
        $status="danger";
    }
}

?>


<html>

<head>
    <title>Formulario de Contacto</title>
</head>

<body text="#99eeff" bgcolor="#005765" align="center">
<?php if($status=="success") : ?>
    <div style="background-color: chartreuse;" id="alert_exito">
    <span>
        El mensaje se envio con alert_exito
    </span>
   </div> 
<?php endif; ?>
<?php if($status=="danger") : ?>
    <div style="background-color:crimson;" id="alert_problem">
    <span>
        Surgio un problema
    </span>
   </div> 
<?php endif; ?>   


    <form action="form.php" method="post">
        <h1>Contactanos</h1>
        <div>
            <label for="name">Nombre:</label><br>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label for="email">correo:</label><br>
            <input type="email" name="email" id="email">
        </div>
        <div>
            <label for="subject">Asunto:</label><br>
            <input name="subject" id="subject"></textarea>
        </div>
        <div>
            <label for="message">Mensaje:</label><br>
            <textarea name="message" id="message" cols="50" rows="10"></textarea>
        </div>
        <div>
            <button type="submit" name="enviar">Enviar</button>
        </div>
    </form>
</body>

</html>