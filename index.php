<?php
// project/index.php
session_start();

$action = isset($_GET['action']) ? $_GET['action'] : 'home';

switch ($action) {
    case 'login':
        $controller = new ControllerAuth();
        $controller->login();
        break;
    case 'register':
        $controller = new ControllerAuth();
        $controller->register();
        break;
    case 'logout':
        $controller = new ControllerAuth();
        $controller->logout();
        break;
    default:
        header('Location: app/router/router1.php?action=truc');
        break;
}


?>

