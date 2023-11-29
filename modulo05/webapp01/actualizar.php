<?php

    $sql = "UPDATE usuarios SET nombre='Pedro', email = ‘pedro@email.com’ WHERE id=1"; 
    if ($conexion->query($sql) === TRUE) { 
        echo "Registro actualizado con éxito"; 
    } else { 
        echo "Error actualizando el registro: ";
        echo  $conexion->error; 
    }

?>