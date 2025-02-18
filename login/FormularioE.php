<?php

session_start();
include_once('../Config/conexion.php');

if (isset($_POST['documento'])&& isset($_POST['N_Empleados']) && isset($_POST['area_t']) && isset($_POST['cod_em']) && isset($_POST['edad_em']) && isset($_POST['Resumen_em'])) {
    function validar($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }

    $documento1 = validar($_POST['documento']);
    $NEmpleados = validar($_POST['N_Empleados']);
    $areat = validar($_POST['area_t']);
    $codigoEm = validar($_POST['cod_em']);
    $edad = validar($_POST['edad_em']);
    $resumen1 = validar($_POST['Resumen_em']);

    $datosusuario = 'documento=' . $documento1 . '&cod_em=' . $codigoEm;

    if (empty($documento1)) {
        header("location: ../empleados.php?error=El Documento es requerido&$datosusuario");
        exit();
    } elseif (empty($NEmpleados)) {
        header("location: ../empleados.php?error=Numero de empleados es requerido&$datosusuario");
        exit();
    } elseif (empty($areat)) {
        header("location: ../empleados.php?error=Area es requerida&$datosusuario");
        exit();
    } elseif (empty($codigoEm)) {
        header("location: ../empleados.php?error=El Codigo es requerido&$datosusuario");
        exit();
    } elseif (empty($edad)) {
        header("location: ../empleados.php?error=La Edad es requerida&$datosusuario");
        exit();
    } elseif (empty($resumen1)) {
        header("location: ../empleados.php?error=Resumen es requerido&$datosusuario");
        exit();
    } else {
        $sql = "SELECT * FROM empleados WHERE Documento = '$documento1'";
        $query = $conexion->query($sql);

        if (mysqli_num_rows($query) > 0) {
            header("location: ../empleados.php?error=El documento ya existe");
            exit();
        } else {
            $sql2 = "INSERT INTO empleados(Documento, NombreEmpleados, area_T, cod_em, edad_em, resumen_em) VALUES('$documento1','$NEmpleados','$areat','$codigoEm','$edad','$resumen1')";
            $query2 = $conexion->query($sql2);
            if ($query2) {
                header("location: ../empleados.php?success=Enviado con exito");
                exit();
            } else {
                header("location: ../empleados.php?success=ocurrio un error");
                exit();
            }
        }
    }
} else {

    header('location: ../empleados.php');
    exit();
}
