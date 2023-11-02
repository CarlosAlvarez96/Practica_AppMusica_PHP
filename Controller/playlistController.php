<?php


if (!empty($_SESSION['user'])) {
    $user_id = $_SESSION['user']->getId();
    $userPlaylists = PlaylistRepository::listUserPlaylists($user_id);


    echo "Depuración: Todas las canciones acumuladas:<pre>";
}






include("./View/mainView.phtml");
