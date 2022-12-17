<?php
//Codigo para envíar un correo
if(isset($_POST['enviar'])){
    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['telefono']) && !empty($_POST['mensaje'])){
        $name = $_POST['name'];
        $mensaje = $_POST['mensaje'];
        $telefono = $_POST['telefono'];
        $correo = $_POST['email'];

        $email = "johnnymn77@gmail.com";//Destinatario del correo
        $asunto = "Correo desde turing-ia";

        $header = "From: " . $correo . "\r\n";
        $header = "Reply-To: " . $correo . "\r\n";
        $header = "X-Mailer: PHP/" . phpversion();

        $mail = @mail($email, $asunto, $mensaje, $header);
        if($mail){
            header('Location: index.php?ok=1');//Si el correo se envío correctamente se envía un 1
        }else{
            header('Location: index.php?ok=2');//Si el correo no se envío correctamente se envía un 2
        }

    }
}