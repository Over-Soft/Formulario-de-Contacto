<?php

$error ='';
$enviar ='';
if (isset($_POST['submit'])) {
      $nombre = $_POST['nombre'];
      $apellido = $_POST['apellido'];
      $correo = $_POST['correo'];
      $mensaje = $_POST['mensaje'];

      if (!empty($nombre)) {
         $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
      } else {
        $error .= 'No ha sido completado el campo Nombre <br>';
      }

            if (!empty($apellido)) {
               $apellido = filter_var($apellido, FILTER_SANITIZE_STRING);
            } else {
              $error .= 'No ha sido completado el campo Apellido <br>';
            }


                  if (!empty($correo)) {
                     $correo = filter_var($correo, FILTER_SANITIZE_EMAIL);
                     if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
                       $error .= 'Ingrese un correo Válido <br>';
                     }
                  } else {
                    $error .= ' No ha sido completado el campo Correo <br>';
                  }
                  if (!empty($mensaje)) {
                    $mensaje = htmlspecialchars($mensaje);
                    $mensaje = filter_var($mensaje, FILTER_SANITIZE_STRING);
                  } else {
                    $error .= 'No ha sido completado el campo Mensaje <br>';
                  }

                  if (!$error) {
                    $enviar_a = 'tucorreo@hotmail.com';
                    $asunto = 'Correo enviado desede mi pagina web';
                    $mensaje_a_preperar = "Nombre : $nombre \n";
                    $mensaje_a_preperar .= "Apellido : $apellido \n";
                    $mensaje_a_preperar .= "Correo : $correo \n";
                    $mensaje_a_preperar .= "Mensaje : . $mensaje ";

                    mail($enviar_a, $asunto , $mensaje_a_preperar);


                           $enviar = true;


                  }
}











require 'index.view.php';

 ?>
