<?php

session_start();

include_once('../Config/conexion.php');

if (isset($_POST['Usuario']) && isset($_POST['Clave'])) {

    function Validar($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }

    $usuario = Validar($_POST['Usuario']);
    $clave = Validar($_POST['Clave']);

    if (empty($usuario)) {
        header(('location: ../index.php?error=El usuario es requerido'));
        exit();
    } elseif (empty($clave)) {
        header(('location: ../index.php?error=La contraseña es requerida'));
        exit();
    } else {
        $sql = "SELECT * FROM usuarios WHERE NombreUsuario = '$usuario'";
        $queary = mysqli_query($conexion, $sql);

        if ($queary->num_rows==1) {
            $usuarioQ = $queary->fetch_assoc();

            $Id = $usuarioQ['Id'];
            $NombreUsuario = $usuarioQ['NombreUsuario'];
            $Clave = $usuarioQ['Clave'];
            $NombreCompleto = $usuarioQ['NombreCompleto'];


            if ($usuario === $NombreUsuario) {
                if (password_verify($clave, $Clave)) {
                    $_SESSION['Id'] = $Id;
                    $_SESSION['NombreUsuario'] = $NombreUsuario;
                    $_SESSION['NombreCompleto'] = $NombreCompleto;

                    echo "<script>
                        alert('Bienvenido $NombreCompleto');
                        location.href = '../Home.php';
                        </script>";
                } else {
                    header('location:../index.php?error="Usuario o Clave incorrecta');
                }
            } else {
                header('location:../index.php?error=Usuario o Clave incorrecta');
            }
        } else {
            header('location:../index.php?error=Usuario o Clave incorrecta');
        }
    }
}
