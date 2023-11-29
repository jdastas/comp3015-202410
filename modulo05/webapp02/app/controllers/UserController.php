<?php

include_once 'app/models/UserModel.php';
include_once 'app/config/Database.php';

class UserController {
    private $userModel;

    public function __construct() {
        $database = new Database();
        $db = $database->connect();
        $this->userModel = new UserModel($db);
    }

    public function index() {

        $userController = new UserController();
        $data = $userController->listUsers(); // listUsers() es un método en UserController

        include 'app/views/home.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $data = [
                'nombre' => $_POST['nombre'],
                'email' => $_POST['email'],
                'clave' => $_POST['clave']
            ];

            $result = $this->userModel->create($data);
            if ($result) {
                // Redirigir o cargar una vista de éxito
            } else {
                // Cargar una vista de error
            }
        } else {
            // Cargar la vista del formulario de creación
            include 'app/views/user/create.php';
        }
    }

    public function read($id) {
        $user = $this->userModel->read($id);
        if ($user) {
            include 'app/views/user/read.php';
            // Cargar una vista para mostrar los datos del usuario
        } else {
            echo 'Error reading a record.';
            // Mostrar un mensaje de error o redirigir
        }
    }

    public function update($id) {
        
        // Cargar la vista del formulario de actualización
        $data['user'] = $this->userModel->read($id);
        $data['view'] = 'app/views/user/update.php';
        include 'app/views/home.php';
        
    }

    public function save($data) {
        $new_data = [
            'id' => $data['id'],
            'nombre' => $data['nombre'],
            'email' => $data['email'],
            'clave' => $data['clave']
        ];

        $result = $this->userModel->update($new_data);
        if ($result) {
            // Se pudo actualizar, mensaje de éxito
            $data['message'] = 'Récord actualizado con éxito.';
        } else {
            // No se pudo actualizar, mensaje de error
            $data['message'] = 'Récord actualizado con éxito.';
        }

        $data['view'] = 'app/views/user/list.php';
        $data['users'] = $this->userModel->getAll();
        include 'app/views/home.php';
    }

    public function delete($id) {
        $result = $this->userModel->delete($id);
        if ($result) {
            // Redirigir o mostrar un mensaje de éxito
        } else {
            // Mostrar un mensaje de error
        }
    }

    public function listUsers() {
        // $users = $this->userModel->getAll();
        $data['users'] = $this->userModel->getAll();
        $data['view'] = 'user/list.php';
        // $view = 'app/views/user/update.php';
        return $data;
    
        // Carga la vista y pasa los datos de los usuarios
        // include 'app/views/user/list.php';
    }
    
}

?>
