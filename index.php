<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>login</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <form action="login/loginp.php" method="POST">
    <div class="wrapprt">
            <h1>inicio de sesion</h1>
            <?php if(isset($_GET['error'])) {?>
                <p><?php echo $_GET['error']?></p>
                <?php } ?>
            <div class="imput-box">
                <input type="text" placeholder="Usuario" name="Usuario">
                
            </div>
            <div class="imput-box">
                <input type="password" placeholder="contraseña" name="Clave">
                
            </div>
                <button class="button">ingrese</button>
            <div class="register-link">
                <p>No esta registrado? <a href="registrarse.php">registrarse</a></p>
            </div>
        </form>
    </div>

</body>
</html>