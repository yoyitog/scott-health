<?php

session_start();
include_once('../Config/conexion.php');

if (
    isset($_POST['rama_trabajo']) && isset($_POST['N_empleados']) && isset($_POST['codigo']) && isset($_POST['Direccion']) && isset($_POST['Resumen'])) {
    function validar($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }
//centro de trabajo
    $rama = validar($_POST['rama_trabajo']);
    $Nempleados = validar($_POST['N_empleados']);
    $codigo = validar($_POST['codigo']);
    $direccion = validar($_POST['Direccion']);
    $resumen = validar($_POST['Resumen']);

    $datosusuario = 'codigo=' . $codigo . '&rama_trabajo=' . $rama;

    if (empty($rama)) {
        header("location: ../centro_de_trabajo.php?error=la rama es requerida&$datosusuario");
        exit();
    } elseif (empty($Nempleados)) {
        header("location: ../centro_de_trabajo.php?error=numero es requerido&$datosusuario");
        exit();
    } elseif (empty($codigo)) {
        header("location: ../centro_de_trabajo.php?error=el codigo es requerido&$datosusuario");
        exit();
    } elseif (empty($direccion)) {
        header("location: ../centro_de_trabajo.php?error=la direccion es requerida&$datosusuario");
        exit();
     } else {
        $sql = "SELECT * FROM centrodetrabajo  WHERE codigo = '$codigo'";
        $query = $conexion->query($sql);

        if (mysqli_num_rows($query) > 0) {
            header("location: ../centro_de_trabajo.php?error=el codigo ya existe");
            exit();
            header("location: ../centro_de_trabajo.php?error=el codigo ya existe");
            exit();
        } else {
            $sql2 = "INSERT INTO centrodetrabajo(rama, Nempleados, Codigo, Direccion, Resumen)  VALUES('$rama','$Nempleados','$codigo','$direccion','$resumen')";

            $query2 = $conexion->query($sql2);
            if ($query2) {
                header("location: ../centro_de_trabajo.php?success=codigo registrado");
                exit();
            } else {
                header("location: ../centro_de_trabajo.php?success=ocurrio un error");
                exit();
            }  
            
        }
    }
} else {

    header('location: ../centro_de_trabajo.php');
    exit();
    
} 