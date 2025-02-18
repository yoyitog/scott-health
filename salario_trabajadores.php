<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/ramascss.css">

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>salario </title>
</head>

<body>
    <div class="container">
        <header>salario</header>
        <br>
        <form action="login/FormularioST.php" method="POST">
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
                    <span class="title">DATOS SALARIO</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Documento</label>
                            <input type="text" placeholder="cedula" name="Documento ">
                        </div>

                        <div class="input-field">
                            <label>Numero De Banco</label>
                            <input type="text" placeholder="Numero" name="Nu_banco">
                        </div>

                        <div class="input-field">
                            <label>Area que trabajas</label>
                            <input type="text" placeholder="area" name="area_T">
                        </div>

                        <div class="input-field">
                            <label>Codigo SALARIO</label>
                            <input type="text" placeholder="codigo" name="Cod_S ">
                        </div>

                        <div class="input-field">
                            <label>Nombre eps</label>
                            <input type="text" placeholder="eps" name="Nombre_eps ">
                        </div>

                        <div class="input-field">
                            <label>resumen</label>
                            <input type="text" placeholder="resumen" name="resumen_S">
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