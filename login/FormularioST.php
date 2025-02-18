<?php

session_start();
include_once('../Config/conexion.php');

if (
    isset($_POST['Documento']) && isset($_POST['Nu_banco']) && isset($_POST['area_T']) && isset($_POST['Cod_S']) && isset($_POST['Nombre_eps']) && isset($_POST['resumen_S'])) {
    function validar($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }

    $documento2 = validar($_POST['Documento']);
    $numeroB = validar($_POST['Nu_banco']);
    $areaT = validar($_POST['area_T']);
    $codigoS = validar($_POST['Cod_S']);
    $eps = validar($_POST['Nombre_eps']);
    $resumen4 = validar($_POST['resumen_S']);

    $datosusuario = 'Documento=' . $documento2 . '&Cod_S=' . $codigoS;

    if (empty($documento2)) {
        header("location: ../salario_trabajadores.php?error=El Documento es requerido&$datosusuario");
        exit();
    } elseif (empty($numeroB)) {
        header("location: ../salario_trabajadores.php?error=N banco es requerido&$datosusuario");
        exit();
    } elseif (empty($areaT)) {
        header("location: ../salario_trabajadores.php?error=Area de trabajo es requerido&$datosusuario");
        exit();
    } elseif (empty($codigoS)) {
        header("location: ../salario_trabajadores.php?error=codigo salario es requerido&$datosusuario");
        exit();
    } elseif (empty($eps)) {
        header("location: ../salario_trabajadores.php?error=El eps es requerido&$datosusuario");
        exit();
    } elseif (empty($resumen4)) {
        header("location: ../salario_trabajadores.php?error=El resumen es requerido&$datosusuario");
        exit();
    } else {
        $sql = "SELECT * FROM salario_t WHERE Documento = '$documento2'";
        $query = $conexion->query($sql);

        if (mysqli_num_rows($query) > 0) {
            header("location: ../salario_trabajadores.php?error=El Documento ya existe");
            exit();
        } else {
            $sql2 = "INSERT INTO salario_t(Documento, Nu_banco, area_T, Cod_S , Nombre_eps, resumen_S) VALUES('$documento2','$numeroB','$areaT','$codigoS','$eps','$resumen4')";
            $query2 = $conexion->query($sql2);
            if ($query2) {
                header("location: ../salario_trabajadores.php?success=Enviado con exito");
                exit();
            } else {
                header("location: ../salario_trabajadores.php?success=ocurrio un error");
                exit();
            }
        }
    }
} else {

    header('location: ../salario_trabajadores.php');
    exit();
}
