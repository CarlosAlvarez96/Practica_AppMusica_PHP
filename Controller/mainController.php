<?php

//Aquí van las variable de entrada
require_once("./Model/user.php");
require_once("./Model/userRepository.php");
require_once("./Model/playlist.php");
require_once("./Model/playlistRepository.php");
require_once("./Model/song.php");
require_once("./Model/songRepository.php");
//...
session_start();

if (!empty($_GET['u'])) {
    if ($_GET['u'] == "login") {
        require_once("Controller/loginController.php");
    }
    if ($_GET['u'] == "signUp") {
        require_once("Controller/signUpController.php");
    }
    if ($_GET['u'] == "manage") {
        require_once("Controller/manageController.php");
    }
    if ($_GET['u'] == "playlist") {
        require_once("Controller/playlistController.php");
    }
} else {
    include("./View/mainView.phtml");
}
