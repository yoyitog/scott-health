<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/ramascss.css">

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Centro de trabajo </title>
</head>

<body>
    <div class="container">
        <header>Centro de Trabajo</header>
        <br>
        <form action="login/Formulario.php" method="POST">
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
                            <label>Rama trabajo</label>
                            <input type="text" placeholder="Rama" name="rama_trabajo">
                        </div>

                        <div class="input-field">
                            <label>Numero de Empleados</label>
                            <input type="text" placeholder="N Empleados" name="N_empleados">
                        </div>

                        <div class="input-field">
                            <label>Codigo</label>
                            <input type="text" placeholder="codigo" name="codigo">
                        </div>

                        <div class="input-field">
                            <label>Direccion</label>
                            <input type="text" placeholder="Direccion" name="Direccion">
                        </div>

                        <div class="input-field">
                            <label>resumen</label>
                            <input type="text" placeholder="resumen" name="Resumen">
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