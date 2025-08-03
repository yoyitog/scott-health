<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Home</title>
</head>
<body>
    <header>
        <div class="navbar">
            <div class="logo"><a href="home.php">NEW NOTIFI</a></div>
            <ul class="link">
            <li><a href="Home.php">Inicio</a> </li>
                <li><a href="centro_de_trabajo.php">Centro de trabajo</a></li>
                <li><a href="sobremi.php"> Propocito</a></li>
                <li><a href="experiencia_jefes.php">Experiencia jefes</a></li>
                <li><a href="empleados.php">Empleados</a></li>
                <li><a href="salario_trabajadores.php">Salario</a></li>
                <li><a href="ramas.php">Ramas</a></li>
                <li><a href="login/CerrarSesion.php">Cerrar sesion</a></li>
            </ul>
            <a href="home.php"class="action-btn">Atras</a>
            <div class="toggle_btn">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>

        <div class="drop_menu">
        <li><a href="Home.php">Inicio</a> </li>
                <li><a href="centro_de_trabajo.php">Centro de trabajo</a></li>
                <li><a href="sobremi.php"> Propocito</a></li>
                <li><a href="experiencia_jefes.php">Experiencia jefes</a></li>
                <li><a href="empleados.php">Empleados</a></li>
                <li><a href="salario_trabajadores.php">Salario</a></li>
                <li><a href="ramas.php">Ramas</a></li>
                <li><a href="login/CerrarSesion.php">Cerrar sesion</a></li>
                <li><a href="home.php"class="action-btn">Atras</a></li>
        </div>
    </header>

    <main>
        <section id="hero">
            <h1>¿QUIENES SOMOS?</h1>
            <p>
                Somos una plataforma informativa dedicada a recopilar y divulgar noticias relacionadas con las tecnologías emergentes y su impacto en diversas industrias. Nuestro objetivo es proporcionar análisis detallados y objetivos sobre las últimas innovaciones, avances tecnológicos y tendencias del mercado. También apoyamos la implementación de mecanismos de control y supervisión de empresas, especialmente en cuanto al cumplimiento de regulaciones, la ética empresarial y las mejores prácticas en la gestión tecnológica. <br />
Nuestra misión es brindar información precisa y actualizada para que los lectores puedan tomar decisiones bien fundamentadas en un entorno empresarial y tecnológico en constante cambio.
            </p>
        </section>
    </main>

    <script>
        const toggle_Btn= document.querySelector('.toggle_btn')
        const toggle_BtnIcon= document.querySelector('.toggle_btn i')
        const dropmenu= document.querySelector('.drop_menu')

        toggle_Btn.onclick = function () {
            dropmenu.classList.toggle('open')
            const isOpen =dropmenu.classList.contains('open')
                toggle_BtnIcon.classList= isOpen
                ? 'fa-solid fa-xmark'
                : 'fa-solid fa-bars'
            
        }

    </script>
</body>
</html>