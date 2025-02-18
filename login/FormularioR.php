<?php

session_start();
include_once('../Config/conexion.php');

if (isset($_POST['NombreEmpleadosR']) && isset($_POST['diseno_grafico'])&& isset($_POST['desarrollo_soft']) && isset($_POST['analisis_info']) && isset($_POST['cod_cdt']) && isset($_POST['resumen_r'])) {
    function validar($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }

    $nombreR = validar($_POST['NombreEmpleadosR']);
    $diseno = validar($_POST['diseno_grafico']);
    $desarrollo = validar($_POST['desarrollo_soft']);
    $analisis = validar($_POST['analisis_info']);
    $codigoCDT = validar($_POST['cod_cdt']);
    $resumen3 = validar($_POST['resumen_r']);

    $datosusuario = 'cod_cdt=' . $codigoCDT . '&NombreEmpleadosR=' . $nombreR;

    if (empty($nombreR)) {
        header("location: ../Ramas.php?error=Nombre rama es requerido&$datosusuario");
        exit();
    } elseif (empty($diseno)) {
        header("location: ../Ramas.php?error=espacio vacio&$datosusuario");
        exit();
    } elseif (empty($desarrollo)) {
        header("location: ../Ramas.php?error=espacio vacio&$datosusuario");
        exit();
    } elseif (empty($analisis)) {
        header("location: ../Ramas.php?error=espacio vacio&$datosusuario");
        exit();
    } elseif (empty($codigoCDT)) {
        header("location: ../Ramas.php?error=El codigo es requerido&$datosusuario");
        exit();
    } elseif (empty($resumen3)) {
        header("location: ../Ramas.php?error=Resumen es requerido&$datosusuario");
        exit();
    } else {
        $sql = "SELECT * FROM ramas WHERE cod_cdt = '$codigoCDT'";
        $query = $conexion->query($sql);

        if (mysqli_num_rows($query) > 0) {
            header("location: ../Ramas.php?error=EL Codigo ya existe");
            exit();
        } else {
            $sql2 = "INSERT INTO ramas(NombreEmpleados, diseno_grafico, desarrollo_soft, analisis_info, cod_cdt, resumen_r) VALUES('$nombreR','$diseno','$desarrollo','$analisis','$codigoCDT','$resumen3')";
            $query2 = $conexion->query($sql2);
            if ($query2) {
                header("location: ../Ramas.php?success=Enviado con exito");
                exit();
            } else {
                header("location: ../Ramas.php?success=ocurrio un error");
                exit();
            }
        }
    }
} else {

    header('location: ../Ramas.php');
    exit();
}
