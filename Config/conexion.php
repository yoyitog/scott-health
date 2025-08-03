<?php
 
 $host ="localhost";
$user ="root";
$pass ="";
$db ="test";

$conexion =new mysqli($host, $user, $pass, $db);

if (!$conexion){
   echo "conexion fallida";
}
?>