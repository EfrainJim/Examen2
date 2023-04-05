<?php

// DEFINICION DE FUNCIONES
function abriendoconexion(){
$hostname="localhost";
$nombreUsuario="root";
$contraseña="root";
$bd="alumnos_practicas";

$nombreConexion = mysqli_connect($hostname , $nombreUsuario , $contraseña,$bd);

if(!$nombreConexion){
    die("conexion fail" . mysqli_connect_error());
}

return $nombreConexion;
}

function cerrandoconexion($nombreConexión){
    $cerrandoconexion=mysqli_close($nombreConexión);

return $cerrandoconexion;
}


//ABRIENDO CONEXION
$conectando=abriendoconexion();


//CODIGO EJECUTADO
$query= mysqli_query($conectando,"SELECT alumnos.*, empresas.Nombre_empresa
FROM alumnos 
LEFT JOIN empresas
ON alumnos.fk_Nombre_empresa_id=empresas.id");

$extraer= mysqli_fetch_all($query,MYSQLI_ASSOC);
var_dump($extraer);


//CERRANNDO CONEXIÓN
cerrandoconexion($conectando);

?>