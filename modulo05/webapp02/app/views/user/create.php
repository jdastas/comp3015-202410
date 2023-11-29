<!DOCTYPE html>
<html>
<head>
    <title>Crear Usuario</title>
</head>
<body>
    <form action="/user/create" method="post">
        <input type="text" name="nombre" placeholder="Nombre" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="clave" placeholder="Contraseña" required>
        <button type="submit">Crear Usuario</button>
    </form>
</body>
</html>
