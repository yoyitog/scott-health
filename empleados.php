<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/ramascss.css">

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Empleados</title>
</head>

<body>
    <div class="container">
        <header>empleados</header>
        <br>
        <form action="login/FormularioE.php" method="POST">
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
                            <label>Documento</label>
                            <input type="text" placeholder="Documento" name="documento">
                        </div>

                        <div class="input-field">
                            <label>Nombre empleado</label>
                            <input type="text" placeholder="Nombre" name="N_Empleados">
                        </div>

                        <div class="input-field">
                            <label>area de trabajo</label>
                            <input type="text" placeholder="area que trabajas" name="area_t">
                        </div>

                        <div class="input-field">
                            <label>codigo empleados</label>
                            <input type="text" placeholder="codigo empleado" name="cod_em">
                        </div>

                        <div class="input-field">
                            <label>edad empleados</label>
                            <input type="text" placeholder="edad empleado" name="edad_em">
                        </div>

                        <div class="input-field">
                            <label>resumen</label>
                            <input type="text" placeholder="resumen" name="Resumen_em">
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