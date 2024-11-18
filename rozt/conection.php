<?php

$server = "localhost";
$user = "root";
$pass = "";
$db= "rozt";

$conection = new mysqli($server,$user,$pass,$db);

if ($conection->connect_errno){
    die("conexion Fallida" . $conexion->connect_errno);
} else {
    //echo "conectado";
}
?>