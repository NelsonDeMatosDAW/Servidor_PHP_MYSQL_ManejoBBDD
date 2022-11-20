<?php

    $ip="localhost"; //Dirección del servidor
    $nombreBBDD="proyecto"; //Nombre de la BBDD
    $nombreUsuario="admin"; //usuario para BBDD Proyecto
    $contra="6713"; //contraseña para BBDD Proyecto

    $conexion = new mysqli($ip, $nombreUsuario, $contra, $nombreBBDD); //Creamos el objConexión que abre nueva conexión al servidor de MYSQL

    if($conexion->connect_errno){ //Utilizamos el método connect_errno devuelve true si no se puede realizar la conexión
        echo"No se ha podido conectar con la BBDD".$conexion->connect_errno;
    }

?>