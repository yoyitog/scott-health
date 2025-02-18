<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/registro.css" />
  <title>Formulario Registro</title>
</head>

<body>
  <br>
  <form action="login/registrarse.php" method="POST">
    <section class="form-register">
      <h4>Formulario Registro</h4>

      <?php if (isset($_GET['error'])) { ?>

        <p class="=error"><?php echo $_GET['error'] ?></p>
      <?php } ?>
      <br>
      <?php if (isset($_GET['success'])) { ?>

        <p class="=success"><?php echo $_GET['success'] ?></p>
      <?php } ?>
      <br>
      <input
        class="controls"
        type="text"
        name="Usuario"
        placeholder="Ingrese su usuario" />
      <input
        class="controls"
        type="text"
        name="NombreCompleto"
        placeholder="Nombre Completo" />
      <input
        class="controls"
        type="password"
        name="Clave"
        placeholder="Ingrese su Contraseña" />
      <input
        class="controls"
        type="password"
        name="rclave"
        placeholder="Repita su contraseña" />
      <p>
        Estoy de acuerdo con
        <a href="https://www.gov.co/terminos-y-condiciones">Terminos y Condiciones</a>
      </p>
        <input class="btn_enviar" type="submit" value="registrar" name="btn_enviar" />
      <p><a href="index.php">¿Ya tengo Cuenta?</a></p>
    </section>
  </form>
</body>

</html>