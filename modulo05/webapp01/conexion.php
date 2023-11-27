<?php

    $conexion = new mysqli("localhost", "usuario", "contraseña", "mi_base_de_datos"); 
    if($conexion->connect_error) { 
        die ("Conexión fallida: " . $conexion->connect_error); 
    }
    echo "Conexión exitosa";


?>