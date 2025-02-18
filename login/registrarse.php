<?php

session_start();
include_once('../Config/conexion.php');

if (isset($_POST['Usuario']) && isset($_POST['NombreCompleto']) && isset($_POST['Clave']) && isset($_POST['rclave'])) {
    function validar($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }

    $usuario = validar($_POST['Usuario']);
    $nombrecompleto = validar($_POST['NombreCompleto']);
    $clave = validar($_POST['Clave']);
    $rclave = validar($_POST['rclave']);

    $datosusuario = 'Usuario=' . $usuario . '&NombreCompleto=' . $nombrecompleto;

    if (empty($usuario)) {
        header("location: ../registrarse.php?error=el usuario es requerido&$datosusuario");
        exit();
    } elseif (empty($nombrecompleto)) {
        header("location: ../registrarse.php?error=el nombre completo es requerido&$datosusuario");
        exit();
    } elseif (empty($clave)) {
        header("location: ../registrarse.php?error=la clave es requerido&$datosusuario");
        exit();
    } elseif (empty($rclave)) {
        header("location: ../registrarse.php?error=repetir la clave es requerido&$datosusuario");
        exit();
    } elseif ($clave !== $rclave) {
        header("location: ../registrarse.php?error=repetir la clave no coincide&$datosusuario");
        exit();
    } else {
        $clave = password_hash($clave, PASSWORD_DEFAULT);
        $sql = "SELECT * FROM usuarios WHERE Nombreusuario = '$usuario'";
        $query = $conexion->query($sql);

        if (mysqli_num_rows($query) > 0) {
            header("location: ../registrarse.php?error=el usuario ya existe");
            exit();
        } else {
            $sql2 = "INSERT INTO usuarios(NombreCompleto, NombreUsuario, Clave) VALUES('$nombrecompleto','$usuario','$clave')";
            $query2 = $conexion->query($sql2);
            if ($query2) {
                header("location: ../registrarse.php?success=usuario creado con exito");
                exit();
            } else {
                header("location: ../registrarse.php?success=ocurrio un error");
                exit();
            }
        }
    }
} else {

    header('location: ../registrarse.php');
    exit();
}
