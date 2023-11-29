<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Página de Inicio</title>
    
    <?php
        require_once "public/html_header.php";
    ?>

</head>
<body>
    <div class="container">
        
        <header>
            <h1>Bienvenido a Nuestra Aplicación</h1>
            <nav>
                <ul>
                    <li><a href=".">Ver Usuarios</a></li>
                    <!-- Más enlaces de navegación según sea necesario -->
                </ul>
            </nav>
        </header>
    
        <main>
            <section>
                <div>
                    <?php 
                        if (isset($data)) // if Data exist
                        {
                            echo isset($data['message']) ? $data['message'] : "";
                            // require_once 'user/list.php';
                            require_once $data['view'];
                        }
                        else {
                            $userController = new UserController();
                            $data = $userController->listUsers();
                            require_once 'user/list.php';
                        }
                    ?>
                </div>
            </section>
            <section class='mt-5'>
                <h5>Descripción de la Aplicación</h5>
                <p>Esta es una aplicación web desarrollada en PHP siguiendo el patrón de diseño MVC.</p>
                <!-- Agrega más contenido relevante aquí -->
            </section>
        </main>
    
        <footer>
            <p>&copy; 2023 Tu Nombre</p>
        </footer>

    </div>
</body>
</html>