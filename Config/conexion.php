<?php
 
 $host ="localhost";
$user ="root";
$pass ="";
$db ="prueba";

$conexion =new mysqli($host, $user, $pass, $db);

if (!$conexion){
   echo "conexion fallida";
}
?>