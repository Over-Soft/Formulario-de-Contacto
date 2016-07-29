<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="estilos.css">
  <title>Contacto</title>
</head>
<body>
  <h1>Formulario de Contacto</h1>
  <div class="contenedor">
    <form class="formulario" action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
      <label for="nombre" class="texto">Nombre <span>(requrido)</span></label>
      <input type="text" name="nombre" class="input" value="<?php if(!$enviar && isset($nombre)) echo $nombre ?>">

      <label for="apellido" class="texto">Apellido <span>(requerido)</span></label>
      <input type="text" name="apellido" class="input" value="<?php if(!$enviar && isset($apellido)) echo $apellido ?>">

      <label for="correo" class="texto">Correo <span>(requerido)</span></label>
      <input type="text" name="correo" class="input" value="<?php if(!$enviar && isset($correo)) echo $correo ?>">

          <label for="mensaje" class="mensaje">Mensaje <span>(requerido)</span></label>
          <textarea name="mensaje" class="mensajes"><?php if(!$enviar && isset($mensaje)) echo $mensaje ?></textarea>

          <?php if(!empty($error)): ?>
            <div class="error">
              <?php echo $error; ?>
            </div>
          <?php elseif($enviar): ?>
            <div class="exito">
              <p>
                Mensaje Enviado Correctamente
              </p>
            </div>
          <?php endif ?>

          <input type="submit" name="submit" class="btn" value="Enviar Mensaje">


    </form>
  </div>
</body>
</html>
