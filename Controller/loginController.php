<?php
if (!empty($_POST['login'])) {
    //llamar a un metodo que valide
    $_SESSION['user'] = userRepository::checkLogin($_POST['username'], $_POST['password']);
    include("View\mainView.phtml");
}
if (!empty($_GET['logout'])) {
    session_destroy();
    session_start();
    include("View\mainView.phtml");
}
include("View\loginView.phtml");
