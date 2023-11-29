<!DOCTYPE html>
<html>
<head>
    <title>Eliminar Usuario</title>
</head>
<body>
    <p>¿Estás seguro de que deseas eliminar al usuario <?php echo $user['nombre']; ?>?</p>
    <form action="/user/delete/<?php echo $user['id']; ?>" method="post">
        <button type="submit">Eliminar Usuario</button>
    </form>
</body>
</html>
