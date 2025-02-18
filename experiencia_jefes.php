<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/ramascss.css">

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Jefes </title>
</head>

<body>
    <div class="container">
        <header>Experiencia Jefes</header>
        <br>
        <form action="login/FormularioEJ.php" method="POST">
            <?php if (isset($_GET['error'])) { ?>

                <p class="=error"><?php echo $_GET['error'] ?></p>
            <?php } ?>
            <br>
            <?php if (isset($_GET['success'])) { ?>

                <p class="=success"><?php echo $_GET['success'] ?></p>
            <?php } ?>
            <br>
            <div class="form first">
                <div class="details personal">
                    <span class="title">DATOS</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Nombre Empleados</label>
                            <input type="text" placeholder="Empleados" name="NombreEmpleados">
                        </div>

                        <div class="input-field">
                            <label>Numero Empleados</label>
                            <input type="text" placeholder="Cantidad de empleados" name="Nu_empleados">
                        </div>

                        <div class="input-field">
                            <label>Area encargado</label>
                            <input type="text" placeholder="area" name="Area_encargado">
                        </div>

                        <div class="input-field">
                            <label>Nombre jefe</label>
                            <input type="text" placeholder="Nombre" name="Nombre_jefe">
                        </div>

                        <div class="input-field">
                            <label>Codigo jefe</label>
                            <input type="text" placeholder="codigo" name="Cod_J">
                        </div>

                        <div class="input-field">
                            <label>resumen</label>
                            <input type="text" placeholder="resumen" name="Resumen_J">
                        </div>
                    </div>
                </div>
                <div>
                    <button class="nextBtn">
                        <span class="btnText">Next</span>
                        <i class="uil uil-navigator"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>

</body>

</html>