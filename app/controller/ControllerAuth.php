<?php
// project/controllers/ControllerAuth.php
class ControllerAuth {
    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $login = $_POST['login'];
            $password = $_POST['password'];

            $user = ModelPersonne::getByCredentials($login, $password);
            if ($user) {
                session_start();
                $_SESSION['user_id'] = $user->id;
                $_SESSION['user_name'] = $user->prenom;
                $_SESSION['user_statut'] = $user->statut;
                header('Location: index.php');
            } else {
                $message = "Identifiants incorrects";
                include 'views/auth/login.php';
            }
        } else {
            include 'views/auth/login.php';
        }
    }

    public function register() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $no = $_POST['no'];
            $prenom = $_POST['prenom'];
            $statut = $_POST['statut'];
            $login = $_POST['login'];
            $password = $_POST['password'];

            if (ModelPersonne::add($no, $prenom, $statut, $login, $password)) {
                header('Location: index.php?action=login');
            } else {
                $message = "Erreur lors de l'inscription";
                include 'views/auth/register.php';
            }
        } else {
            include 'views/auth/register.php';
        }
    }

    public function logout() {
        session_start();
        session_destroy();
        header('Location: index.php');
    }
}
?>