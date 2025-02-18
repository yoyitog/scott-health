<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/ramascss.css">

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Ramas</title>
</head>

<body>
    <div class="container">
        <header>Ramas resumen</header>
        <br>
        <form action="login/FormularioR.php" method="POST">
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
                    <span class="title">DATOS </span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Nombre Empleados</label>
                            <input type="text" placeholder="Nombre" name="NombreEmpleadosR">
                        </div>

                        <div class="input-field">
                            <label>Diseño grafico</label>
                            <input type="text" placeholder="nota" name="diseno_grafico">
                        </div>

                        <div class="input-field">
                            <label>Diseño software</label>
                            <input type="text" placeholder="nota" name="desarrollo_soft">
                        </div>

                        <div class="input-field">
                            <label>Analisis</label>
                            <input type="text" placeholder="nota" name="analisis_info">
                        </div>

                        <div class="input-field">
                            <label>Codigo centro de trabajo</label>
                            <input type="text" placeholder="edad empleado" name="cod_cdt ">
                        </div>

                        <div class="input-field">
                            <label>resumen</label>
                            <input type="text" placeholder="resumen" name="resumen_r">
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