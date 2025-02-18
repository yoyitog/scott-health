<?php

session_start();
include_once('../Config/conexion.php');

if (isset($_POST['NombreEmpleados'])&& isset($_POST['Nu_empleados']) && isset($_POST['Area_encargado']) && isset($_POST['Nombre_jefe']) && isset($_POST['Cod_J']) && isset($_POST['Resumen_J'])) {
    function validar($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }

    $nombreE = validar($_POST['NombreEmpleados']);
    $nuempleados = validar($_POST['Nu_empleados']);
    $areaE = validar($_POST['Area_encargado']);
    $NombreJ = validar($_POST['Nombre_jefe']);
    $codigoJ = validar($_POST['Cod_J']);
    $resumen2 = validar($_POST['Resumen_J']);

    $datosusuario = 'Cod_J=' . $codigoJ . '&Nombre_jefe=' . $NombreJ;

    if (empty($nombreE)) {
        header("location: ../experiencia_jefes.php?error=El Nombre es requerido&$datosusuario");
        exit();
    } elseif (empty($nuempleados)) {
        header("location: ../experiencia_jefes.php?error=Numero de empleados es requerido&$datosusuario");
        exit();
    } elseif (empty($areaE)) {
        header("location: ../experiencia_jefes.php?error=Area es requerida&$datosusuario");
        exit();
    } elseif (empty($NombreJ)) {
        header("location: ../experiencia_jefes.php?error=Nombre jefe es requerido&$datosusuario");
        exit();
    } elseif (empty($codigoJ)) {
        header("location: ../experiencia_jefes.php?error=El Codifo es requerido&$datosusuario");
        exit();
    } elseif (empty($resumen2)) {
        header("location: ../experiencia_jefes.php?error=Resumen es requerido&$datosusuario");
        exit();
    } else {
        $sql = "SELECT * FROM experiencia_j WHERE Cod_J = '$codigoJ'";
        $query = $conexion->query($sql);

        if (mysqli_num_rows($query) > 0) {
            header("location: ../experiencia_jefes.php?error=El Codigo ya existe");
            exit();
        } else {
            $sql2 = "INSERT INTO experiencia_j(NombreEmpleados, Nu_empleados, Area_encargado, Nombre_jefe, cod_J, resumen_J) VALUES('$nombreE','$nuempleados','$areaE','$NombreJ','$codigoJ','$resumen2')";
            $query2 = $conexion->query($sql2);
            if ($query2) {
                header("location: ../experiencia_jefes.php?success=Enviado con exito");
                exit();
            } else {
                header("location: ../experiencia_jefes.php?success=ocurrio un error");
                exit();
            }
        }
    }
} else {

    header('location: ../experiencia_jefes.php');
    exit();
}
