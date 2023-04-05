<?php

//CREANDO CONEXION
$hostname="localhost";
$nombreUsuario="root";
$contraseña="root";
$bd="alumnos_practicas";

$nombreConexion = mysqli_connect($hostname , $nombreUsuario , $contraseña,$bd);

if(!$nombreConexion){
    die("conexion fail" . mysqli_connect_error());
}


// CÓDIGO DE EJECUCIÓN
$query= mysqli_query($nombreConexion,"SELECT alumnos.*, empresas.Nombre_empresa
FROM alumnos 
LEFT JOIN empresas
ON alumnos.fk_Nombre_empresa_id=empresas.id");

$extraer= mysqli_fetch_all($query,MYSQLI_ASSOC);
var_dump($extraer);

?>